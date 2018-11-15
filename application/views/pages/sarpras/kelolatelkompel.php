<div class="page-wrapper">
	<div class="container-fluid">
		
		<div class="row page-titles">
			<div class="col-lg-12 align-self-center">
				<h3 class="text-themecolor">Laporan Telkompel</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
					<li class="breadcrumb-item active">Laporan Telkompel</li>
					<li class="breadcrumb-item active">Kelola Laporan</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="col-lg-12">
						<h2>Grafik Informasi Kapal, Menurut masing-masing laporan SROP dan VTS perHari</h2>
 							<div id="graph"></div>
 						<!--Morris JavaScript -->
 						<script src="<?php echo base_url()?>/assets/plugins/raphael/raphael-min.js"></script>
 						<script src="<?php echo base_url()?>/assets/plugins/morrisjs/morris.js"></script>
 						<script src="<?php echo base_url()?>/js/morris-data.js"></script>
						<script>
							Morris.Bar({
								element: 'graph',
								data: <?php echo $chart;?>,
								xkey: 'nama_instansi',
								ykeys: ['kapal_masuk', 'kapal_keluar', 'kapal_melintas', 'kapal_labuh', 'kapal_sandar'],
								labels: ['kapal_masuk', 'kapal_keluar', 'kapal_melintas', 'kapal_labuh', 'kapal_sandar']
							});
						</script>		
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Column -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<?php if ($this->session->flashdata('success')): ?>
                                    <div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>Data Berhasil Dihapus
                                    </div>
                                <?php endif; ?>
								<table id="example2" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>ID</th>
                                            <th>Instansi</th>
											<th style="width: 175px;">Tanggal</th>
											<th>Waktu</th>
											<th>Kapal Masuk</th>
											<th>Kapal keluar</th>
											<th>Kapal Melintas</th>
                                            <th>Kapal Labuh</th>
											<th>Kapal Sandar</th>
											<th>Petugas</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                                        <?php

                                        foreach ($data->result_array() as $t) :
                                            $id=$t['id_laporan'];
                                            $ins=$t['nama_instansi'];
											$tgl1=$t['tanggal_mulai'];
											$tgla=date_indo($tgl1);
											//$tgla=date_format(strtotime($tgl1),"d F Y");
											//$tgla=date('d F Y', strtotime($tgl1));
											$tgl2=$t['tanggal_akhir'];
											$tglb=date_indo($tgl2);
											//$tglb=date_format($tgl2,"d F Y");
                                            $jam1=$t['jam_awal'];
                                            $jam2=$t['jam_akhir'];
                                            $kplmsk=$t['kapal_masuk'];
                                            $kplklr=$t['kapal_keluar'];
                                            $kpllnt=$t['kapal_melintas'];
                                            $kpllbh=$t['kapal_labuh'];
                                            $kplsdr=$t['kapal_sandar'];
                                            $ptg1=$t['petugas1'];
                                            $ptg2=$t['petugas2']
                                        ?>

                                            <tr>
                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $ins; ?></td>
                                                <td><?php echo $tgla," s/d <br>",$tglb; ?></td>
                                                <td><?php echo $jam1,"&nbsp- ",$jam2; ?></td>
                                                <td><?php echo $kplmsk; ?></td>
                                                <td><?php echo $kplklr; ?></td>
                                                <td><?php echo $kpllnt; ?></td>
                                                <td><?php echo $kpllbh; ?></td>
                                                <td><?php echo $kplsdr; ?></td>
                                                <td><?php echo "1. &nbsp",$ptg1,"<br>2. ",$ptg2; ?></td>
                                                
                                                <td>
                                                    <a class="btn btn-xs btn-info" href="<?php echo base_url('telkompel/printlaporan/'.$id);?>" >Print</a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
									</tbody>
								<!-- 	<tfoot>
										<tr>
											<th>ID Berita</th>
											<th>Judul Berita</th>
											<th>Isi Berita</th>
											<th>Gambar Berita</th>
											<th>Action</th>
										</tr>
									</tfoot> -->
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<form>