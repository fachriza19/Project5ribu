<div class="page-wrapper">
  <div class="container-fluid">


    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Berita</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Berita</a></li>
          <li class="breadcrumb-item active">Tambah Berita</li>
        </ol>
      </div>
      </div>




      <div class="row">
       <!-- Column -->
       <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <h2>Masukkan Berita</h2><hr/>
                <form action="<?php echo base_url('adminmenu/simpan_berita')?>" method="post" enctype="multipart/form-data">
                  <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
                  <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
                  <input type="file" name="filefoto" required>
                  <button class="btn btn-success btn-lg pull-right" type="submit">Post Berita</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
