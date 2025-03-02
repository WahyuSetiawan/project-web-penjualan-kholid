<div class="card">
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

    <div class="card-header">
      <strong>Setting</strong> Website
    </div>

    <div class="card-body card-block">
      <div class="row form-group">
        <div class="col col-md-3">
          <label for="text-input" class=" form-control-label">Nama Website</label>
        </div>
        <div class="col-12 col-md-9">
          <input type="text" id="nama_website" name="setting[nama_website]" placeholder="Nama Website" class="form-control"
            value="{{(isset($setting['nama_website']))? $setting['nama_website']->value: ""}}">
          <small class="form-text text-muted">Nama Website</small>
        </div>
      </div>

      <div class="row form-group">
        <div class="col col-md-3">
          <label for="text-input" class=" form-control-label">Facebook</label>
        </div>
        <div class="col-12 col-md-9">
          <input type="text" id="facebook" name="setting[facebook]" placeholder="Facebook" class="form-control" value="{{(isset($setting['facebook']))? $setting['facebook']->value: ""}}">
          <small class="form-text text-muted">Facebook toko</small>
        </div>
      </div>

      <div class="row form-group">
        <div class="col col-md-3">
          <label for="text-input" class=" form-control-label">Instagram</label>
        </div>
        <div class="col-12 col-md-9">
          <input type="text" id="instagram" name="setting[instagram]" placeholder="Instagram" class="form-control"
            value="{{(isset($setting['instagram']))? $setting['instagram']->value: ""}}">
          <small class="form-text text-muted">Instagram toko</small>
        </div>
      </div>

      <div class="row form-group">
        <div class="col col-md-3">
          <label for="text-input" class=" form-control-label">No Telepon</label>
        </div>
        <div class="col-12 col-md-9">
          <input type="text" id="phone" name="setting[phone]" placeholder="No Telepon" class="form-control" value="{{(isset($setting['phone']))? $setting['phone']->value: ""}}">
          <small class="form-text text-muted">No Telepon yang dapat dihubungi</small>
        </div>
      </div>

      <div class="row form-group">
        <div class="col col-md-3">
          <label for="text-input" class=" form-control-label">Email</label>
        </div>
        <div class="col-12 col-md-9">
          <input type="text" id="email" name="setting[email]" placeholder="Email" class="form-control" value="{{(isset($setting['email']))? $setting['email']->value: ""}}">
          <small class="form-text text-muted">Email yang dapat dihubungi</small>
        </div>
      </div>

      <div class="row form-group">
        <div class="col col-md-3">
          <label for="text-input" class=" form-control-label">Alamat</label>
        </div>
        <div class="col-12 col-md-9">
          <input type="text" id="alamat" name="setting[alamat]" placeholder="Alamat" class="form-control" value="{{(isset($setting['alamat']))? $setting['alamat']->value: ""}}">
          <small class="form-text text-muted">Alamat dari toko sekarang</small>
        </div>
      </div>

      <div class="row form-group">
        <div class="col col-md-3">
          <label for="text-input" class=" form-control-label">About Us</label>
        </div>
        <div class="col-12 col-md-9">
          <textarea id="about_us" name="setting[about_us]" placeholder="Tentang Kami" class="form-control">{{(isset($setting['about_us']))? $setting['about_us']->value: ""}}</textarea>
          <small class="form-text text-muted">Beberapa keterangan tentang toko</small>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary btn-sm" name="set">
        <i class="fa fa-dot-circle-o"></i> Update Setting
      </button>
    </div>
  </form>
</div>