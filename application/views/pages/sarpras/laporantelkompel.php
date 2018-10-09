<div class="page-wrapper">
  <div class="container-fluid">



    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Telkompel</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Telkompel</li>
        </ol>
      </div>
    </div>
  


    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <?php if ($this->session->flashdata('success')): ?>
              <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>Data Berhasil Diinput<br>Terima kasih telah menginput laporan harian
              </div>
            <?php endif; ?>
            <h4 class="card-title" align="center">LAPORAN HARIAN</h4>
            <h4 class="card-title" align="center">DISTRIK NAVIGASI KELAS I TANJUNG PRIOK</h4>
            <br><br>
            <form action="<?php echo base_url(). 'telkompel/simpanlaporan'; ?>" class="form-horizontal form-bordered" method="post">
              <div class="form-body">
                <div class="form-group row">
                <label class="control-label text-left col-md-3">Nama Instansi</label>
                  <div class="col-md-3">
                    <select class="form-control custom-select" name="instansi">
                      <option value="STASIUN RADIO PANTAI CIREBON">SROP CIREBON</option>
                      <option value="VESSEL TRAFFIC SERVICE MERAK">VTS MERAK</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Hari</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="hari1">
                  </div>
                  <label class="control-label text-left col-md-1">s/d</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="hari2">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Tanggal</label>
                  <div class="col-md-3">
                    <input type="date" class="form-control" name="tgl1">
                  </div>
                  <label class="control-label text-left col-md-1">s/d</label>
                  <div class="col-md-3">
                    <input type="date" class="form-control" name="tgl2">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Waktu</label>
                  <div class="col-md-3">
                    <input type="time" class="form-control" name="jam1">
                  </div>
                  <label class="control-label text-left col-md-1">s/d</label>
                  <div class="col-md-3">
                    <input type="time" class="form-control" name="jam2">
                  </div>
                </div>

                <h5 class="card-title">I. Lalu lintas Kapal</h5><br>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Kapal Masuk</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="kmasuk">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Kapal Keluar</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="kkeluar">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Kapal Melintas</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="klintas">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Kapal Labuh</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="klabuh">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Kapal Sandar</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="ksandar">
                  </div>
                </div>

                <h5 class="card-title">II. Prakiraan Cuaca Wilayah Pelabuhan dari BMKG</h5><br>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Cuaca</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="cuaca">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Arah Angin</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="araha">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Kecepatan Angin</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="kecepatana">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Jarak Pandang</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="jrkpandang">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Tinggi Gelombang</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="tgigel">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Suhu Udara Maximum</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="suhumax">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Suhu Udara Minimum</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="suhumin">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Pasang Surut Maximum</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="pasangmax">
                  </div>
                </div>

                <h5 class="card-title">III. Kondisi</h5><br>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Alur Pelayaran</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="alurpel">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">SBNP</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="sbnp">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Peralatan</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="peralatan">
                  </div>
                </div>

                <h5 class="card-title">IV. Jasa PNBP VTS/Telegram Radio</h5><br>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Nota Tagih</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" name="nota">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Master Cable</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="mastercbl">
                  </div>
                </div>

                <h5 class="card-title">V. Lain - lain</h5><br>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Lain - lain</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="lain">
                  </div>
                </div>

                <h5 class="card-title">VI. Petugas Jaga</h5><br>
                <div class="form-group row">
                  <label class="control-label text-left col-md-3">Petugas 1</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="petugas1">
                  </div>
                </div>
                <div class="form-group row last">
                  <label class="control-label text-left col-md-3">Petugas 2</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="petugas2">
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="offset-sm-3 col-md-9">
                        <button type="submit" class="btn btn-success">
                          <i class="fa fa-check"></i>Submit
                        </button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>

</div>
