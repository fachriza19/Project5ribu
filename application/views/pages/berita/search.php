<div class="page-wrapper">
  <div class="container-fluid">



    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Helpdesk</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Helpdesk</li>
        </ol>
      </div>
    </div>



    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="container">
            	<h3>Hasil Pencarian</h3>
            	<hr> 
            	<?php
            	if(count($cari)>0)
            	{
            		foreach ($cari as $data) {
            			echo $data->berita_judul . " ";
            			echo $data->berita_image . " ";
            			echo $data->berita_isi	 . " ";
            		}
            	}
            	else
            	{
            		echo "Data tidak ditemukan";
            	}
            	?>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>