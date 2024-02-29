<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
        <?php if(session()->get('level')== 1 || session()->get('level')== 2 ) { ?>
          <a href="<?= base_url('/home/tambah_album/')?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
        <?php }else{} ?>

          <h1></h1>
          <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Album</th> 
                <th>Deskripsi</th>
                <?php if(session()->get('level')== 1 || session()->get('level')== 2 ) { ?>
                <th>Tanggal</th>
                <th>Aksi</th>
                <?php }else{} ?>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach ($ferdi as $gas){
                ?>
                <tr>
                  <th><?php echo $no++ ?></th>
                  <td><?php echo $gas->nama_album?></td>
                  <td><?php echo $gas->deskripsi?></td>
                  <?php if(session()->get('level')== 1 || session()->get('level')== 2 ) { ?>
                  <td><?php echo $gas->tanggal?></td>
                  <td>
                    <a href="<?= base_url('/home/edit_album/'.$gas->id_album)?>"><button class="btn btn-warning"><i class="fa fa-edit"></i>Edit </button></a>
                    <a href="<?= base_url('/home/hapus_album/'.$gas->id_album)?>"><button class="btn btn-danger"><i class="fa fa-trash-o"></i>Hapus </button></a>
                  </td>
                <?php }else{} ?> 

                </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>