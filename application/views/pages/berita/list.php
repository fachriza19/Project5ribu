<div class="page-wrapper">
	<div class="container-fluid">
    
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>


    <div class="row">
        <div class="col-lg-8 col-md">
          <?php 
            function limit_words($string, $word_limit){
              $words = explode(" ",$string);
              return implode(" ",array_splice($words,0,$word_limit));
            }
            foreach ($results as $i) :
              // $id=$i['berita_id'];
              // $judul=$i['berita_judul'];
              // $image=$i['berita_image'];
              //$tgl=$i['berita_tanggal'];
              //$tglindo=date_indo($tgl);
              // $isi=$i['berita_isi'];
          ?>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div itemprop="text" class="entry-content">
                        <h2 class="text-center"><?php echo $i->berita_judul;?></h2><hr/>
                        <div class="ribbon-wrapper card">
                        <div class="ribbon ribbon-bookmark ribbon-success"><?php echo date_indo($i->berita_tanggal); ?></div></br>
                        <img src="<?php echo base_url().'assets/images/Upload/'.$i->berita_image;?>" class="img-fluid"></br></br>
                        </div>
                        <!-- <h5 class="text-right"></h5> -->
                        </br>
                        <div class="text-dark"><?php echo limit_words($i->berita_isi,30);?><br><a href="<?php echo base_url().'daftarberita/tampilanberita/'.$i->berita_id;?>"> Selengkapnya...</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php endforeach;?>
          <center> <p><?php  echo $links; ?></p> </center>
        </div>

        <!-- untuk function search -->
        <div class="col-lg-4 col-md-5">
        <div class="card">
          <div class="card-body">
            <div class="col-12">
              <form class="form-inline" action="<?php echo base_url('daftarberita/cari')?>" action="GET">
                <div class="form-group">
                <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
                </div>
                <input class="btn btn-primary" type="submit" value="Cari">
              </form><br>


              <h3>Berita Terbaru</h3>
              <?php
               foreach ($dataSB->result_array() as $i) :
              $id=$i['berita_id'];
              $judul=$i['berita_judul'];
               ?>
              <div>
              <ul>
                <li><a href="<?php echo base_url().'daftarberita/tampilanberita/'.$id;?>"><?=  $judul; ?><div class="text-dark"></a></div></li>
              </ul>
              </div>
              <?php endforeach;?>  


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
