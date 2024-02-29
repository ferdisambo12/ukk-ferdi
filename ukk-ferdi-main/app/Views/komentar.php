        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  
                  <h1></h1>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Foto</th>
                      <th>Komentar</th> 
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($ferdi as $gas){
                      ?>
                      <tr>
                        <th><?php echo $no++ ?></th>
                        <td><?php echo $gas->id_foto?></td>
                        <td><?php echo $gas->isi?></td>
                        <td><?php echo $gas->tanggal?></td>
                        <td>
                          <a href="<?= base_url('/home/hapus_komentar/'.$gas->id_komentar)?>"><button class="btn btn-danger mr-2"><i class="fa fa-trash"></i>Delete</button></a>
                        </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>