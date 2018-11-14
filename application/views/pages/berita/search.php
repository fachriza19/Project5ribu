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

            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12">
                     <h3>Hasil Pencarian</h3>
                      <hr>

                      <?php
                      function limit_words($string, $word_limit){
                      $words = explode(" ",$string);
                      return implode(" ",array_splice($words,0,$word_limit));
                      }

                      foreach ($cari as $i) {
                        if(count($cari)>0){

                      ?> 
                      <div itemprop="text" class="entry-content">
                        <h2><?php echo $i->berita_judul;?></h2>
                        
                        <!-- <h5 class="text-right"></h5> -->
                        </br>
                        <div class="text-dark"><?php echo limit_words($i->berita_isi,30);?><br><a href="<?php echo base_url().'daftarberita/tampilanberita/'.$i->berita_id;?>"> Selengkapnya...</a><hr/>
                      
                        <?php }
                      }?>     
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        

  </div>
</div>
