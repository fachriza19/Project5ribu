<div class="page-wrapper">
  <div class="container-fluid">



    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Kelola Data Sarana & Prasarana </h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Menu Admin</li>
          <li class="breadcrumb-item active">Kelola Data Sarana & Prasarana</li>
        </ol>
      </div>
    </div>





    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kelola Sarana & Prasarana</h4>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Data</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tabtambahdata" role="tab" aria-expanded="false"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Tambah Data</span></a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
          <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
            <div class="p-20">

              <div class="row">
                <div class="col-lg-12">
                  <h2 class="card-title text-center">Data</h2>



                  <table id="table1" class=" table table-bordered table-responsive nowrap table-hover" style="width: 100%;">
                    <thead>
                      <tr>
                        <th class="all" style="width: 5%;">ID</th>
                        <th class="all" style="width: 40%;">NAMA SBNP</th>
                        <th class="all" style="width: 25%;">NOMOR DSI</th>
                        <th class="all" style="width: 20%;">JENIS</th>
                        <th class="all" style="width: 10%;">AKSI</th>
                        <th class="none">LINTANG SELATAN : </th>
                        <th class="none">BUJUR TIMUR : </th>
                        <th class="none">LATITUDE : </th>
                        <th class="none">LONGTITUDE : </th>
                        <th class="none">WARNA BANGUNAN : </th>
                        <th class="none">WARNA CAHAYA : </th>
                        <th class="none">KARAKTERISTIK CAHAYA : </th>
                        <th class="none">PERIODE CAHAYA : </th>
                        <th class="none">TINGGI BANGUNAN : </th>
                        <th class="none">ELEVASI : </th>
                        <th class="none">JARAK TAMPAK : </th>
                        <th class="none">SISTEM PELAMPUNGAN : </th>
                        <th class="none">BAHAN BANGUNAN : </th>
                        <th class="none">BENTUK TANDA PUNCAK : </th>
                        <th class="none">SUMBER ENERGI : </th>
                        <th class="none">RADAR REFLEKTOR : </th>
                        <th class="none">STATUS : </th>
                        <th class="none">TAHUN PEMB/REHAB : </th>
                      </tr>
                    </thead>

                    <tbody id="target">



                      <?php
                      foreach ($data as $r){ ?>
                        <tr>
                          <td><?= $r->id; ?></td>
                          <td><?= $r->namasbnp; ?></td>
                          <td><?= $r->nomordsi; ?></td>
                          <td><?= $r->jenis; ?></td>
                          <td> <a href="#form" data-toggle="modal" class="btn btn-primary" data-toggle="modal" data-target="#modal_edit<?= $r->id; ?>">Edit</a>
                            <a href="<?php echo base_url('adminmenu/hapusdata/'.$r->id) ?>" onclick="return confirm('Data Akan Dihapus');"class="btn btn-danger">Delete</a>
                          </td>
                          <td><?= $r->LS; ?></td>
                          <td><?= $r->BT; ?></td>
                          <td><?= $r->latitude; ?></td>
                          <td><?= $r->longtitude; ?></td>
                          <td><?= $r->warna_bangunan; ?></td>
                          <td><?= $r->warna_cahaya; ?></td>
                          <td><?= $r->karakteristik_cahaya; ?></td>
                          <td><?= $r->periode_cahaya; ?></td>
                          <td><?= $r->tinggi_bangunan; ?></td>
                          <td><?= $r->elevasi; ?></td>
                          <td><?= $r->jarak_tampak; ?></td>
                          <td><?= $r->sistem_pelampungan; ?></td>
                          <td><?= $r->bahan_bangunan; ?></td>
                          <td><?= $r->bentuk_tanda_puncak; ?></td>
                          <td><?= $r->sumber_energi; ?></td>
                          <td><?= $r->radar_reflektor; ?></td>
                          <td><?= $r->status; ?></td>
                          <td><?= $r->thn_pemb; ?></td>
                        </tr>
                      <?php } ?>

                    </tbody>
                  </table>

                </div>
              </div> <!-- END DIV CLASS ROW -->


            </div>
          </div>
          <div class="tab-pane p-20" id="tabtambahdata" role="tabpanel" aria-expanded="false">

            <form action="<?php echo base_url('adminmenu/tambahdata'); ?>" method="post">


              <div class="form-group row">
                <label for="inputnamaSBNP" class="col-2 col-form-label">Nama SBNP</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : TG. PRIOK No.2 " name="namasbnp" id="inputnamaSBNP"required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Nomor DSI</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : 123456" name="nomordsi" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Lintang Selatan</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="" name="LS" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Bujur Timur</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="" name="BT" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Latitude</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : -6.1194908" name="latitude" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Longtitude</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : 106.8624483" name="longtitude" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Jenis SBNP</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : Pelampung Suar" name="jenis" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Warna Bangunan</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : Merah" name="wb" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Warna Cahaya</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : Warna Cahaya" name="wc" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Karateristik Cahaya</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : FL.R 5s EB" name="kc" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Periode Cahaya</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : FL.1.0 - Ecl. 4.0" name="pc">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Tinggi Bangunan</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : 3 Meter" name="tb">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Elevasi</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : " name="elevasi" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Jarak Tampak</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : 4 Nm" name="jt" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Sistem Pelampungan</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : Lateral Mark" name="sp" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Bahan Bangunan</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : Baja " name="bb" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Bentuk Tanda Puncak</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : (Bola Merah) " name="btp" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Sumber Energi</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : Tenaga Surya" name="se" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Radar Reflektor</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : - " name="rr" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Status</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : Tidak Tetap " name="status" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2 col-form-label">Tahun Pemb/rehab</label>
                <div class="col-10">
                  <input class="form-control" type="text" placeholder="Contoh : 2015/- " name="tahun" required>
                </div>
              </div>
              <div class="form-group row button-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-danger waves-effect waves-light pull-right" >Tambah</button>
                  <button type="reset" class="btn btn-default waves-effect pull-right">Reset</button>
                </div>
              </div>
            </div>


          </form>
        </div> <!-- END TAB PANE TAMBAH DATA -->


      </div>  <!-- END TAB CONTENT -->
    </div> <!-- END CARD BODY -->
  </div> <!-- END CARD -->

</div><!-- END CONTAINER FLUID -->
</div> <!-- END PAGE WRAPPER -->


<!-- ===== MODAL EDIT DATA ===== -->
<?php
foreach($data as $i):
  //     $dataid=$i['id'];
  //     $datanama=$i['nama'];
  //     $datakelompok=$i['kelompok'];
  //     $datalatitude=$i['latitude'];
  //     $datalongtitude=$i['longtitude'];
  //     $datalokasi=$i['lokasi'];
  //     $dataluas_area=$i['luas_area'];
  //     $datanomordsi=$i['nomordsi'];
  //     $datapenanggung_jawab=$i['penanggung_jawab'];
  //     $datajml_sdm=$i['jml_sdm'];
  //     $datawktjagaopl=$i['wktjagaopl'];
  //     $dataperangkat=$i['perangkat'];
  //     $datalampu=$i['lampu'];
  //     $datasolar_cell=$i['solar_cell'];
  //     $databattery=$i['battery'];
  ?>
  <div class="modal fade" id="modal_edit<?php echo $i->id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h3 class="modal-title" id="myModalLabel">Edit Data</h3>
        </div>

        <form class="form-horizontal" method="post" action="<?php echo base_url().'adminmenu/modal_edit'?>">
          <div class="modal-body">
            <input type="text" name="idmodal" value="<?php echo $i->id;?>">
            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Nama SBNP</label>
                <div class="col-xs-8">
                  <input name="namasbnp" value="<?php echo $i->namasbnp;?>" class="form-control" type="text" placeholder="Nama SBNP..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Nomor DSI</label>
                <div class="col-xs-8">
                  <input name="nomordsi" value="<?php echo $i->nomordsi;?>" class="form-control" type="text" placeholder="Nomor DSI..." required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Lintang Selatan</label>
                <div class="col-xs-8">
                  <input name="LS" value="<?php echo $i->LS;?>" class="form-control" type="text" placeholder="Lintang Selatan..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Bujur Timur</label>
                <div class="col-xs-8">
                  <input name="BT" value="<?php echo $i->BT;?>" class="form-control" type="text" placeholder="Bujur Timur..." required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Latitude</label>
                <div class="col-xs-8">
                  <input name="latitude" value="<?php echo $i->latitude;?>" class="form-control" type="text" placeholder="Latitude..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Longtitude</label>
                <div class="col-xs-8">
                  <input name="longtitude" value="<?php echo $i->longtitude;?>" class="form-control" type="text" placeholder="Longtitude..." required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Jenis SBNP</label>
                <div class="col-xs-8">
                  <input name="jenis" value="<?php echo $i->jenis;?>" class="form-control" type="text" placeholder="Jenis SBNP..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Warna Bangunan</label>
                <div class="col-xs-8">
                  <input name="wb" value="<?php echo $i->warna_bangunan;?>" class="form-control" type="text" placeholder="Warna Bangunan..." required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Warna Cahaya</label>
                <div class="col-xs-8">
                  <input name="wc" value="<?php echo $i->warna_cahaya;?>" class="form-control" type="text" placeholder="Warna Cahaya..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Karakteristik Cahaya</label>
                <div class="col-xs-8">
                  <input name="kc" value="<?php echo $i->karakteristik_cahaya;?>" class="form-control" type="text" placeholder="Karakteristik Cahaya..." required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Periode Cahaya</label>
                <div class="col-xs-8">
                  <input name="pc" value="<?php echo $i->periode_cahaya;?>" class="form-control" type="text" placeholder="Periode Cahaya..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Tinggi Bangunan</label>
                <div class="col-xs-8">
                  <input name="tb" value="<?php echo $i->tinggi_bangunan;?>" class="form-control" type="text" placeholder="Tinggi Bangunan..." required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Elevasi</label>
                <div class="col-xs-8">
                  <input name="elevasi" value="<?php echo $i->elevasi;?>" class="form-control" type="text" placeholder="Elevasi..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Jarak Tampak</label>
                <div class="col-xs-8">
                  <input name="jt" value="<?php echo $i->jarak_tampak;?>" class="form-control" type="text" placeholder="Jarak Tampak..." required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Sistem Pelampungan</label>
                <div class="col-xs-8">
                  <input name="sp" value="<?php echo $i->sistem_pelampungan;?>" class="form-control" type="text" placeholder="Sistem Pelampungan..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Bahan Bangunan</label>
                <div class="col-xs-8">
                  <input name="bb" value="<?php echo $i->bahan_bangunan;?>" class="form-control" type="text" placeholder="Bahan Bangunan..." required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Bentuk Tanda Puncak</label>
                <div class="col-xs-8">
                  <input name="btp" value="<?php echo $i->bentuk_tanda_puncak;?>" class="form-control" type="text" placeholder="Bentuk Tanda Puncak..." required>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label class="control-label col-xs-3" >Sumber Energi</label>
                <div class="col-xs-8">
                  <input name="se" value="<?php echo $i->nomordsi;?>" class="form-control" type="text" placeholder="Sumber Energi..." required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4">
                <label class="control-label col-xs-3" >Radar Reflektor</label>
                <div class="col-xs-8">
                  <input name="rr" value=<?php echo $i->radar_reflektor;?>"" class="form-control" type="text" placeholder="Radar Reflektor..." required>
                </div>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label col-xs-3" >Status</label>
                <div class="col-xs-8">
                  <input name="status" value="<?php echo $i->status;?>" class="form-control" type="text" placeholder="Status..." required>
                </div>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label col-xs-3" >Tahun Pemb/Rehab</label>
                <div class="col-xs-8">
                  <input name="tahun" value="<?php echo $i->thn_pemb;?>" class="form-control" type="text" placeholder="2000..." required>
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
              <input type="submit" name="" class="btn btn-primary pull-right" value="Update Data">
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>
<?php endforeach;?>
<!--END MODAL EDIT DATA-->
