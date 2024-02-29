<div class="card card-info">
              <div class="card-header">
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_komentar')?>" method="post">
                <h1></h1>
                 <div class="item form-group">
          <label class="control-label col-12">Foto<span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_foto" class="form-control text-capitalize" id="id_foto" required>
              <option>Pilih Foto</option>

              <?php 
              foreach ($apa as $barang_nama) {
              ?>
              
              <option value="<?php echo $barang_nama->id_foto?>"><?php echo $barang_nama->foto ?></option>
              <?php } ?>
            </select>
          </div>
        </div> 
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Komentar<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="isi" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="isi" required="required" placeholder="Silahkan Isi">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal" name="tanggal" placeholder="Tanggal " required="required" class="form-control col-12">
          </div>
        </div>
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/komentar" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>