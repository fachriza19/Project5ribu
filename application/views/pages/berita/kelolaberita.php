<div class="page-wrapper">
	<div class="container-fluid">

		<div class="row page-titles">
			<div class="col-lg-12 align-self-center">
				<h3 class="text-themecolor">Berita</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
					<li class="breadcrumb-item active">Berita</li>
					<li class="breadcrumb-item active">Kelola Berita</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<!-- Column -->
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<?php if ($this->session->flashdata('success')){ ?>
									<div class="alert alert-icon alert-success border-success alert-dismissible fade show" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>Data Berhasil Dihapus
									</div>
								<?php }elseif($this->session->flashdata('gagaleditgambarberita')){ ?>
								<div class="alert alert-icon alert-danger border-danger alert-dismissible fade show" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><?php echo $this->session->flashdata('gagaleditgambarberita');?>
								</div>

								<?php } ?>
								<table id="example2" class="table table-bordered table-responsive nowrap table-hover" style="width:100%">
									<thead>
										<tr>
											<th style="width=5%">ID Berita</th>
											<th style="width=45%">Judul Berita</th>
											<!-- <th>Isi Berita</th> -->
											<th style="width=40%">Gambar Berita</th>
											<th style="width=10%;">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php

										foreach ($data->result_array() as $i) :
											$id=$i['berita_id'];
											$judul=$i['berita_judul'];
											// $isi=$i['berita_isi'];
											$image=$i['berita_image'];
											?>

											<tr>
												<td><?php echo $id;?> </td>
												<td><?php echo $judul;?> </td>
												<!-- <td><?php echo $isi;?> </td> -->
												<td width="400px"><img src="<?php echo base_url('assets/images/Upload/'.$image) ?>" class="img-fluid img-thumbnail col-sm-5"></td>
												<td><a class="btn btn-xs btn-info" href="<?php echo base_url('adminmenu/updateberita/'.$id) ?>"> Edit</a>
													<a href="#form" data-toggle="modal" class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_editgambarberita<?= $id; ?>"> Edit Gambar</a>
													<a class="btn btn-xs btn-info" href="<?php echo base_url('adminmenu/hapusberita/'.$id) ?>" onclick="return confirm('Data Akan Dihapus');">Hapus</a>
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


<?php
foreach ($data->result_array() as $i) :
	$id=$i['berita_id'];
	// $judul=$i['berita_judul'];
	// $isi=$i['berita_isi'];
	$image=$i['berita_image'];
	?>

	<div class="modal fade" id="modal_editgambarberita<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Edit Gambar</h3>
				</div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'adminmenu/modal_editgambarberita'?>" enctype="multipart/form-data">

					<div class="modal-body">
						<input type="hidden" name="idmodaleditgambarberita" value="<?php echo $id;?>">

						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Edit Gambar</h4>
								<center><img src="<?php echo base_url().'assets/images/Upload/'.$image;?>" class="img-fluid"><br><br></center>
								<input type="file" name="editgambarberita"/>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancel</button>
						<input type="submit" name="" class="btn btn-primary pull-right" value="Update Gambar">
					</div>

				</form>
			</div>
		</div>
	</div>
<?php endforeach;?>
