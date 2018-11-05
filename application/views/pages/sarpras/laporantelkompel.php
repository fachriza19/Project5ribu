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
                <h5 class="control-label text-left col-md-3">Nama Instansi</h5>
                  <div class="col-md-3">
                    <select class="form-control custom-select" name="instansi">
                      <option value="STASIUN RADIO PANTAI CIREBON">SROP CIREBON</option>
                      <option value="VESSEL TRAFFIC SERVICE MERAK">VTS MERAK</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Tanggal</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="2018-09-03" name="tgl1" id="mdate" data-dtp="dtp_QCnhf"> 
                  </div>
                  <h5 class="control-label text-left col-md-1">s/d</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="2018-09-04" name="tgl2" id="mdate1" data-dtp="dtp_QCnhf"> 
                  </div>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Waktu</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="timepicker" placeholder="Jam" name="jam1" data-dtp="dtp_6Vvs4">  
                  </div>
                  <h5 class="control-label text-left col-md-1">s/d</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="timepicker1" placeholder="Jam" name="jam2" data-dtp="dtp_6Vvs4">
                  </div>
                </div><hr><br>

                <h5 class="card-title">I. Lalu lintas Kapal</h5><br>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Kapal Masuk</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Jumlah Kapal Masuk" name="kmasuk">
                  </div>
                  <h5 class="control-label text-left col-md-3">Kapal</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Kapal Keluar</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Jumlah Kapal Keluar" name="kkeluar">
                  </div>
                  <h5 class="control-label text-left col-md-3">Kapal</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Kapal Melintas</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Jumlah Kapal Melintas" name="klintas">
                  </div>
                  <h5 class="control-label text-left col-md-3">Kapal</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Kapal Labuh</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Jumlah Kapal Labuh" name="klabuh">
                  </div>
                  <h5 class="control-label text-left col-md-3">Kapal</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Kapal Sandar</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Jumlah Kapal Sandar" name="ksandar">
                  </div>
                  <h5 class="control-label text-left col-md-3">Kapal</h5>
                </div><hr><br>

                <h5 class="card-title">II. Prakiraan Cuaca Wilayah Pelabuhan dari BMKG</h5><br>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Cuaca</h5>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="cuaca">
                  </div>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Arah Angin</h5>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="araha">
                  </div>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Kecepatan Angin</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="kecepatana">
                  </div>
                  <h5 class="control-label text-left col-md-3">Knots</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Jarak Pandang</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="jrkpandang">
                  </div>
                  <h5 class="control-label text-left col-md-3">Km</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Tinggi Gelombang</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="tgigel">
                  </div>
                  <h5 class="control-label text-left col-md-3">Meter</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Suhu Udara Maximum</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="suhumax">
                  </div>
                  <h5 class="control-label text-left col-md-3">°C</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Suhu Udara Minimum</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="suhumin">
                  </div>
                  <h5 class="control-label text-left col-md-3">°C</h5>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Pasang Surut Maximum</h5>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="pasangmax">
                  </div>
                  <h5 class="control-label text-left col-md-3">Meter</h5>
                </div><hr><br>

                <h5 class="card-title">III. Kondisi</h5><br>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Alur Pelayaran</h5>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="alurpel">
                  </div>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">SBNP</h5>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="sbnp">
                  </div>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Peralatan</h5>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="peralatan">
                  </div>
                </div><hr><br>

                <h5 class="card-title">IV. Jasa PNBP VTS/Telegram Radio</h5><br>
                <div class="form-group row"><h5 class="control-label text-left col-md-3">> VTS</h5></div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">&emsp;Nota Tagih</h5>
                  <div class="col-md-2">
                    <input type="text" class="form-control" name="notavts">
                  </div>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">&emsp;Master Cable</h5>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="mastercblvts">
                  </div>
                </div>
                <div class="form-group row"><h5 class="control-label text-left col-md-3">> Telegram Radio</h5></div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">&emsp;Nota Tagih</h5>
                  <div class="col-md-2">
                    <input type="text" class="form-control" name="notatr">
                  </div>
                </div>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">&emsp;Master Cable</h5>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="mastercbltr">
                  </div>
                </div><hr><br>

                <h5 class="card-title">V. Lain - lain</h5><br>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Lain - lain</h5>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="lain">
                  </div>
                </div><hr><br>

                <h5 class="card-title">VI. Petugas Jaga</h5><br>
                <div class="form-group row">
                  <h5 class="control-label text-left col-md-3">Petugas 1</h5>
                  <div class="col-md-6">
                    <input type="text" class="form-control" name="petugas1">
                  </div>
                </div>
                <div class="form-group row last">
                  <h5 class="control-label text-left col-md-3">Petugas 2</h5>
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
                        <button type="reset" class="btn btn-danger">Cancel</button>
                        <button type="submit" class="btn btn-success">
                          <i class="fa fa-check"></i>Submit
                        </button>
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
