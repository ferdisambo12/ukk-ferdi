<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body"> 
          <?php if(session()->get('level')== 1 || session()->get('level')== 2 ) { ?>
          <a href="<?= base_url('/home/tambah_foto/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i>Tambah</button></a>
        <?php }else{} ?>
          <h1></h1>
          <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
              <tr>
                <td>No</td>
                <td>Gambar</td>
                <td>Judul</td> 
                <td>Deskripsi</td>
                <td>Tanggal</td>
                <td>Lokasi</td>
                <td>Album</td>     
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach ($ferdi as $gas){
                ?>
                <tr>
                  <th><?php echo $no++ ?></th>
                 <td>
                    <img src="<?= base_url('assets/img/foto/' . $gas->foto_mobil)?>" style="width: 150px; height: 100px;" />
                  </td>
                  <th><?php echo $gas->judul?></th>
                  <th><?php echo $gas->deskripsi?></th>
                  <th><?php echo $gas->tanggal?></th>
                  <th><?php echo $gas->lokasi?></th>
                  <th><?php echo $gas->id_album?></th>
                  <td>
                  <?php if(session()->get('level')== 1 || session()->get('level')== 2 ) { ?>
                  <a href="<?= base_url('/home/edit_foto/'.$gas->id_foto)?>"><button class="btn btn-warning mr-2"><i class="fa fa-edit"></i>Edit</button></a>
                  <a href="<?= base_url('/home/hapus_foto/'.$gas->id_foto)?>"><button class="btn btn-danger mr-2"><i class="fa fa-trash"></i>Delete</button></a>
                  <?php }else{} ?>
                  <?php if(session()->get('level')== 3 ) { ?>
                  <a href="<?= base_url('/home/tambah_komentar/'.$gas->id_komentar)?>"><button class="btn btn-info mr-2"><i class="fa fa-edit"></i>Coment</button></a>
                  <?php }else{} ?>

                  </td>
                </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>