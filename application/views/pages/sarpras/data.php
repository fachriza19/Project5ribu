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


					</div>
				</div> <!-- END DIV CLASS ROW -->







			</div> <!-- END CARD BODY -->
		</div> <!-- END CARD -->


	</div>
</div>
