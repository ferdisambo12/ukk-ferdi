<div class="card card-info">
  <div class="card-header">
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_foto')?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $ferdi->id_foto?>">
      <h1></h1> 
      <div class="item form-group">
        <label class="control-label col-12" >Judul Foto<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="judul" class="form-control col-12 "name="judul" required="required" placeholder="Judul Foto" value="<?= $ferdi->judul?>">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Deksripsi<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="deskripsi" class="form-control col-12 "name="deskripsi" required="required" placeholder="Deksripsi" value="<?= $ferdi->deskripsi?>">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Tanggal<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="date" id="tanggal" name="tanggal" placeholder="Tanggal" required="required" class="form-control col-12 " value="<?= $ferdi->tanggal?>">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Lokasi<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="lokasi" class="form-control col-12 "name="lokasi" required="required" placeholder="Lokasi" value="<?= $ferdi->lokasi?>">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
          <label class="control-label col-12">Nama Album <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="id_album" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="id_album" required="required">
              <?php foreach ($apa as $gas){ ?>
                <option value="<?= $gas->id_album; ?>"><?= $gas->nama_album; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
      <h1></h1>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/foto" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
    </form>
  </div>