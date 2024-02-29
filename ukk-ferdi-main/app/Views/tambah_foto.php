<div class="card card-info">
  <div class="card-header">
      <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_foto')?>" method="post">      
        <h1></h1>
         <div class="form-container">
    <form action="/post/aksi_tambah/" method="post" enctype="multipart/form-data">
      <label for="photo">Foto</label>
      <div class="position-relative">
        <input type="file" class="form-control" placeholder="Foto" name="foto" id="foto" onchange="previewImage()" accept="image/*" required>
        <img id="preview" src="" alt="" style="max-width: 100px; margin-top: 10px;">
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Judul<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="judul" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="judul" required="required" placeholder="Isi Judul">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Deskripsi<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="deskripsi" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="deskripsi" required="required" placeholder="Isi Deskripsi">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Tanggal<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="date" id="tanggal" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="tanggal" required="required" placeholder="Tanggal">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Lokasi File<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="lokasi" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="lokasi" required="required" placeholder="Isi Lokasi">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
          <label class="control-label col-12">Nama Album<span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_album" class="form-control text-capitalize" id="id_album" required>
              <option>Pilih Nama</option>

              <?php 
              foreach ($apa as $nama_album) {
              ?>
              
              <option value="<?php echo $nama_album->id_album?>"><?php echo $nama_album->nama_album ?></option>
              <?php } ?>
            </select>
          </div>
        </div> 
      <h1></h1>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/foto" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>