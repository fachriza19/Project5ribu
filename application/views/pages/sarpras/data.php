<div class="page-wrapper">
	<div class="container-fluid">

    <div class="row page-titles">
          <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Sarana & Prasarana</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
              <li class="breadcrumb-item active">Petakenavigasian</li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </div>
        </div>

<div class="card">
  <div class="card-body">



      <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
        <div class="p-20">

          <div class="row">
            <div class="col-lg-12">
              <h2 class="card-title text-center">Data</h2>



              <table id="table3" class=" table table-bordered table-responsive nowrap table-hover" style="width: 100%;">
								<thead>
									<tr>
										<th class="all" style="width: 5%;">ID</th>
										<th class="all" style="width: 40%;">NAMA SBNP</th>
										<th class="all" style="width: 25%;">NOMOR DSI</th>
										<th class="all" style="width: 20%;">JENIS</th>
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
						<td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" href="<?php echo base_url('adminmenu/detailpeta/'.$r->id) ?>"><?=  $r->namasbnp; ?></a></td>
						<td><?= $r->nomordsi; ?></td>
						<td><?= $r->jenis; ?></td>
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


                                <!-- ===== MODAL EDIT DATA ===== -->
          <!-- <?php
          // foreach($data->result_array() as $i):
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
           <div class="modal fade" id="modal_edit<?php //echo $dataid;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                   <h3 class="modal-title" id="myModalLabel">Edit Data</h3>
                 </div>

                 <form class="form-horizontal" method="post" action="<?php //echo base_url().'index.php/barang/edit_barang'?>">
                                 <div class="modal-body">

                                     <div class="form-group">
                                         <label class="control-label col-xs-3" >Kode Barang</label>
                                         <div class="col-xs-8">
                                             <input name="kode_barang" value="<?php //echo $barang_id;?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label class="control-label col-xs-3" >Nama Barang</label>
                                         <div class="col-xs-8">
                                             <input name="nama_barang" value="<?php //echo $barang_nama;?>" class="form-control" type="text" placeholder="Nama Barang..." required>
                                         </div>
                                     </div>


               </div>
             </div>
           </div>
         <?php //endforeach;?> -->
             <!--END MODAL EDIT DATA-->



  </div>
</div> <!-- END DIV CLASS ROW -->


</div>
</div>




</div> <!-- END CARD BODY -->
</div> <!-- END CARD -->


</div>
</div>
