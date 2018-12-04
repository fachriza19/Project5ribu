<?php 
	$b=$data->row_array();
?>
<title><?php echo $b['berita_judul'];?></title>
<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row page-titles">
				<div class="col-md-5 col-8 align-self-center">
					<h3 class="text-themecolor">Berita</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Berita</a></li>
						<li class="breadcrumb-item active">Berita Lengkap</li>
					</ol>
				</div>
			</div>

			<div class="row">

				<div class="col-lg-12 col-md">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-12">
									<div itemprop="text" class="entry-content">
										<h1 class="text-center"><?php echo $b['berita_judul'];?></h1><hr/>
										<img src="<?php echo base_url().'assets/images/Upload/'.$b['berita_image'];?>" class="img-fluid"><br><br>
										<div class="text-dark"><?php echo date_indo( $b['berita_tanggal']); ?></br><?php echo $b['berita_isi'];?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
</div>
