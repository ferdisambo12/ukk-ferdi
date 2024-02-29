<div class="card card-info">
  <div class="card-header">
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_album')?>" method="post" enctype="multipart/form-data">
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Nama Album<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="nama_album" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_album" required="required" placeholder="Nama Album">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Deskripsi<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="umur" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="deskripsi" required="required" placeholder="Deskripsi">
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
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/album" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>