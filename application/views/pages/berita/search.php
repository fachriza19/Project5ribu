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

              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <?php
                      function limit_words($string, $word_limit){
                        $words = explode(" ",$string);
                        return implode(" ",array_splice($words,0,$word_limit));
                      }              
                      foreach ($cari as $i) {
                  //echo $i->berita_judul;
                        
                      }
                      if(count($cari)>0){
                        ?>  
                        <a href="<?php echo base_url('daftarberita/tampilanberita/'.$i->berita_id)?>"><?= $i->berita_judul; ?></a></br></br>
                        <div class="text-dark"><?php echo limit_words($i->berita_isi,30);?><br><a href="<?php echo base_url().'daftarberita/tampilanberita/'.$i->berita_id;?>"> Selengkapnya...</a></div>
                      </div>

                      <?php }else{
                        echo "Berita tidak ditemukan";
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