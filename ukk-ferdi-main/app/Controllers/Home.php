<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Home extends BaseController
{
    public function index()
    {
        
        if(session()->get('id')>0 ) {
            return redirect()->to('/home/dashboard');
        }else{

            $model=new M_model();
            echo view('login');
        }
    }

    public function aksi_login()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');
        $model= new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>md5($p)
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {

            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');

    //     }else {
    //     return redirect()->to('/');
    // }
        }
    }
    public function log_out()
    {
        // if(session()->get('id')>0) {

     session()->destroy();
     return redirect()->to('/');

    //  }else{
    //     return redirect()->to('/home/dashboard');
    // }
 }
 public function dashboard()
 {
        // if(session()->get('id')>0) {

    $model= new M_model();

    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where); 

    echo view ('header', $kui);
    echo view ('menu');
    echo view ('dashboard');
    echo view ('footer');
    //      }else{
    //     return redirect()->to('/');
    // }
}
public function pengguna()
{
    // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model = new M_model();
    $on='pengguna.id_user_user=user.id_user';
    $kui['ferdi'] = $model->fusionleft('pengguna', 'user', $on, );

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where); 

    // $id = session()->get('id');
    // $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('pengguna');
    echo view('footer');
    // }else{
    // return redirect()->to('/home/dashboard');
    // }
}
public function hapus_pengguna($id)
{
    // if(session()->get('level')== 1) {

    $model=new M_model();
    $where2=array('id_user'=>$id);
    $where=array('id_user_user'=>$id);
    $model->hapus('pengguna',$where);
    $model->hapus('user',$where2);
    return redirect()->to('/home/pengguna');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function tambah_pengguna()
{
        // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model=new M_model();
    $on='pengguna.id_user_user=user.id_user';
    $kui['duar']=$model->fusionleft('pengguna',  'user', $on, );

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    $where=array('id_user' => session()->get('id'));
        // $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu');
    echo view('tambah_pengguna');
    echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_tambah_pengguna()
{
    $model=new M_model();

    $nama=$this->request->getPost('nama');
    $email=$this->request->getPost('email');    
    $jk=$this->request->getPost('jk');
    $alamat=$this->request->getPost('alamat');
    $username=$this->request->getPost('username');
    $password=$this->request->getPost('password');
    $level=$this->request->getPost('level');
    $id_user=session()->get('id');
    
    $user=array(
        'username'=>$username,
        'password'=>md5($password),
        'level'=>$level,
    );

    $model=new M_model();
    $model->simpan('user', $user);
    $where=array('username'=>$username);
    $id=$model->getarray('user', $where);
    $iduser = $id['id_user'];

    $pengguna=array(
        'nama'=>$nama,
        'email'=>$email,
        'jk'=>$jk,
        'alamat'=>$alamat,

        'id_user_user'=>$iduser,
        // 'tanggal_pgu'=>date('Y-m-d')
    );
    // print_r($pengguna);
    $model->simpan('pengguna', $pengguna);
    return redirect()->to('/home/pengguna');
}
public function edit_pengguna($id)
{
        // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

    $model=new M_model();
    $where2=array('pengguna.id_user_user'=>$id);
    $on=('pengguna.id_user_user=user.id_user');
    $kui['duar']=$model->fusion_Row('pengguna', 'user',$on,$where2);

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu');
    echo view('edit_pengguna');
    echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_edit_pengguna()
{
    $id= $this->request->getPost('id');
    $nama=$this->request->getPost('nama');
    $email=$this->request->getPost('email');
    $jk=$this->request->getPost('jk');
    $alamat=$this->request->getPost('alamat');
    $username=$this->request->getPost('username');
    $level=$this->request->getPost('level');
    // $iduser=session()->get('id');

    $where=array('id_user'=>$id); 
    $where2=array('id_user_user'=>$id);   
    if ($password !='') {
        $user=array(
            'username'=>$username,
            'level'=>$level,
        );
    }else{
        $user=array(
            'username'=>$username,
            'level'=>$level,
        );
    }
    
    $model=new M_model();
    $model->edit('user', $user,$where);

    $pengguna=array(
        'nama'=>$nama,
        'email'=>$email,
        'jk'=>$jk,
        'alamat'=>$alamat,
        // 'id_user_user'=>$iduser
    );
    // print_r($user);
    // print_r($pengguna);
    $model->edit('pengguna', $pengguna, $where2);
    return redirect()->to('/home/pengguna');
    }
    // -----------------------------------------------------------------------------------------------------------
    public function foto()
    {
    // if(session()->get('level')== 1 || session()->get('level')== 3) {

        $model = new M_model();
        $on='foto.id_album=album.id_album';
        $kui['ferdi'] = $model->tampil('foto');

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        echo view('header', $kui);
        echo view('menu');
        echo view('foto');
        echo view('footer');
    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function hapus_foto($id)
    {
    // if(session()->get('level')== 1) {

    $model=new M_model();
    $where=array('id_foto'=>$id);
    $model->hapus('foto',$where);
    return redirect()->to('/home/foto');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function tambah_foto()
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $on='foto.id_album=album.id_album';
        $kui['ferdi'] = $model->fusion('foto', 'album',$on);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        $kui['apa'] = $model->tampil('album');

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_foto',$kui);
        echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
   public function aksi_tambah_foto()
{
    $model = new M_model();
    $judul = $this->request->getPost('judul');
    $deskripsi = $this->request->getPost('deskripsi');
    $tanggal = $this->request->getPost('tanggal');
    $lokasi = $this->request->getPost('lokasi');
    $id_album = $this->request->getPost('id_album');
    $data = array(
        'judul' => $judul,
        'deskripsi' => $deskripsi,
        'tanggal' => $tanggal,
        'lokasi' => $lokasi,
        'id_album' => $id_album,
    );

    try {
        $foto = $this->request->getFile('foto');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $imageName = $foto->getRandomName();
            $foto->move('Downloads/', $imageName);
        } else {
            $imageName = 'default.png';
        }

        $data['foto'] = $imageName; // Simpan nama file foto dalam array data
        $model->simpan('foto', $data);
        return redirect()->to('/home/foto');
    } catch (\Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

    public function edit_foto($id)
{
    $model = new M_model();

    // Mengambil data foto yang akan diedit
    $where = array('id_foto' => $id);
    $kui['ferdi'] = $model->getRow('foto', $where);

    // Mengambil data user
    $userId = session()->get('id');
    $whereUser = array('id_user' => $userId);
    $kui['user'] = $model->getRow('user', $whereUser);

    // Mengambil data album untuk ditampilkan dalam dropdown
    $kui['apa'] = $model->tampil('album');

    echo view('header', $kui);
    echo view('menu', $kui);
    echo view('edit_foto', $kui);
    echo view('footer');
}

    public function aksi_edit_foto()
    {
    $model = new M_model();
    
    // Mengambil data dari form
    $id = $this->request->getPost('id');
    $judul = $this->request->getPost('judul');
    $deskripsi = $this->request->getPost('deskripsi');
    $tanggal = $this->request->getPost('tanggal');
    $lokasi = $this->request->getPost('lokasi');
    $id_album = $this->request->getPost('id_album');
    
    // Menyiapkan data untuk diedit
    $data = array(
        'judul' => $judul,
        'deskripsi' => $deskripsi,
        'tanggal' => $tanggal,
        'lokasi' => $lokasi,
        'id_album' => $id_album,
    );
        

    // Menentukan kondisi untuk pengeditan
    $where = array('id_foto' => $id);
    
    // Melakukan pengeditan
    $model->edit('foto', $data, $where);
     try {
        $foto = $this->request->getFile('foto');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newName = $foto->getRandomName();
            $foto->move(ROOTPATH . '/public/assets/img/foto/', $newName);
            $data['foto'] = $newName; // Add the uploaded file name to the data
        }

        $where=array('id_foto'=>$id);
        $model->edit('foto',$data,$where);
        return redirect()->to('/home/foto');
        } catch (\Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
    
    }


    //-----------------------------------------------------------------------------------------------------------------------------
    public function album()
    {
    // if(session()->get('level')== 1 || session()->get('level')== 3) {

    $model = new M_model();
    $kui['ferdi'] = $model->tampil('album');

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header', $kui);
    echo view('menu');
    echo view('album');
    echo view('footer');
    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function hapus_album($id)
    {
    // if(session()->get('level')== 1) {

    $model=new M_model();
    $where=array('id_album'=>$id);
    $model->hapus('album',$where);
    return redirect()->to('/home/album');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function tambah_album()
    {
        // if(session()->get('level')== 4) {

    $model=new M_model();
    $kui['ferdi']=$model->tampil('album');

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

    echo view('header',$kui);
    echo view('menu',$kui);
    echo view('tambah_album',$kui);
    echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
}
public function aksi_tambah_album()
{
    $model=new M_model();
    $nama_album=$this->request->getPost('nama_album');
    $deskripsi=$this->request->getPost('deskripsi');
    $tanggal=$this->request->getPost('tanggal');
    $data=array(
       
        'nama_album'=>$nama_album,
        'deskripsi'=>$deskripsi,
        'tanggal'=>$tanggal,
    );
        $model = new M_model();
        $model->simpan('album',$data);
        return redirect()->to('/home/album');
}

public function edit_album($id)
{
        // if(session()->get('level')== 4) {

    $model=new M_model();
    $where=array('id_album'=>$id);
    $kui['ferdi']=$model->getRow('album', $where);

    $id=session()->get('id');
    $where=array('id_user'=>$id);
    $where=array('id_user' => session()->get('id'));
    $kui['user']=$model->getRow('user',$where);

        // $where=array('id_user' => session()->get('id'));

    echo view('header',$kui);
    echo view('menu',$kui);
    echo view('edit_album',$kui);
    echo view('footer');

//     }else{
//         return redirect()->to('/home/dashboard');
//     }
}
    public function aksi_edit_album()
    {
    $model=new M_model();
    $id=$this->request->getPost('id');
    $nama_album=$this->request->getPost('nama_album');
    $deskripsi=$this->request->getPost('deskripsi');
    $tanggal=$this->request->getPost('tanggal');
    $data=array(
        'nama_album'=>$nama_album,
        'deskripsi'=>$deskripsi,
        'tanggal'=>$tanggal,
    );
        $where=array('id_album'=>$id);
        $model->edit('album',$data,$where);
        return redirect()->to('/home/album');
        
    }

// ----------------------------------------------------------------------------------------------------------------------------
    public function komentar()
    {
 // if(session()->get('level')== 1 || session()->get('level')== 3) {

        $model = new M_model();
        $on='komentar.id_foto=foto.id_foto';
        $kui['ferdi'] = $model->tampil('komentar');

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        echo view('header', $kui);
        echo view('menu');
        echo view('komentar');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }
    public function hapus_komentar($id)
    {
    // if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_komentar'=>$id);
        $model->hapus('komentar',$where);
        return redirect()->to('/home/komentar');

    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function tambah_komentar()
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $on='komentar.id_foto=foto.id_foto';
        $kui['ferdi'] = $model->fusion('komentar', 'foto',$on);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        $kui['apa'] = $model->tampil('foto');


        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_komentar',$kui);
        echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function aksi_tambah_komentar()
    {
        $model=new M_model();
        $id_foto=$this->request->getPost('id_foto');
        $isi=$this->request->getPost('isi');
        $tanggal=$this->request->getPost('tanggal');
        $data=array(
            'id_foto'=>$id_foto,
            'isi'=>$isi,
            'tanggal'=>$tanggal,
        );
        $model->simpan('komentar',$data);
        return redirect()->to('/home/komentar');
    }
    public function edit_komentar($id)
    {
        // if(session()->get('level')== 4) {

        $model=new M_model();
        $where=array('id_komentar'=>$id);
        $kui['ferdi']=$model->getRow('komentar', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);

        $kui['apa'] = $model->tampil('foto');


        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_komentar',$kui);
        echo view('footer');

//     }else{
//         return redirect()->to('/home/dashboard');
//     }
    }
    public function aksi_edit_komentar()
    {
        $model=new M_model();
        $id=$this->request->getPost('id');
        $id_foto=$this->request->getPost('id_foto');
        $isi=$this->request->getPost('isi');
        $tanggal=$this->request->getPost('tanggal');
        $data=array(
           'id_foto'=>$id_foto,
            'isi'=>$isi,
            'tanggal'=>$tanggal,
        );
        $where=array('id_komentar'=>$id);
        $model->edit('komentar',$data,$where);
        return redirect()->to('/home/komentar');
    }

    //-----------------------------------------------------------------------------------------------------------------
    public function laporan_pembayaran()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $kui['kunci']='view_pembayaran';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));
        $kui['user']=$model->getRow('user',$where);
        // $kui['user']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function cari_pembayaran()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_pembayaran('pembayaran',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['user'] = base64_encode($img);

        echo view('c_pembayaran',$kui);
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function pdf_pembayaran()
    {
        // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_pembayaran('pembayaran',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['user'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->setPaper('A4','landscape');
        $dompdf->loadHtml(view('c_pembayaran',$kui));
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function excel_pembayaran()
{
    // if(session()->get('level')== 2 ||session()->get('level')==4 ) {

    $model = new M_model();
    $awal = $this->request->getPost('awal');
    $akhir = $this->request->getPost('akhir');
    $data = $model->filter_pembayaran('pembayaran', $awal, $akhir);

    $spreadsheet = new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'Nama Anak')
        ->setCellValue('B1', 'Bulan')
        ->setCellValue('C1', 'Harga')
        ->setCellValue('D1', 'Tanggal');

    $column = 2;

    foreach ($data as $data_row) { // Ubah nama variabel agar tidak bentrok dengan variabel foreach sebelumnya
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A' . $column, $data_row->id_anak)
            ->setCellValue('B' . $column, $data_row->bulan)
            ->setCellValue('C' . $column, $data_row->harga)
            ->setCellValue('D' . $column, $data_row->tanggal);

        $column++;
    }

    $writer = new Xlsx($spreadsheet);
    $fileName = 'Laporan Pembayaran.xlsx'; // Ubah ekstensi file menjadi .xlsx

    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
// }else{
//     return redirect()->to('/home/dashboard');
// }
}
}
