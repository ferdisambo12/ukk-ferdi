<div class="card card-info">
  <div class="card-header">
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_album')?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $ferdi->id_album?>">
      <div class="item form-group">
        <label class="control-label col-12" >Nama Album<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="nama_album" class="form-control col-12 "name="nama_album" required="required" placeholder="Nama Album" value="<?= $ferdi->nama_album?>">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Deskripsi<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="deskripsi" class="form-control col-12 "name="deskripsi" required="required" placeholder="Deskripsi" value="<?= $ferdi->deskripsi?>">
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
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/album" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
    </form>
  </div>