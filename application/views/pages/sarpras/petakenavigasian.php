<div class="page-wrapper">
  <div class="container-fluid">



    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Peta Kenavigasian</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Peta Kenavigasian</li>
        </ol>
      </div>
    </div>





    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body p-b-0">
            <h4 class="card-title text-center">Maps</h4>
            <h6 class="card-subtitle text-center">===============</h6> </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs customtab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#sbnp" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">SBNP</span></a> </li>
              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#telkompel" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">TELKOMPEL</span></a> </li>
              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#kn" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">KAPAL NEGARA</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <!-- ===================== Tab panes SBNP ======================== -->
            <div class="tab-content">
              <div class="tab-pane active" id="sbnp" role="tabpanel">
                <div class="p-20">

                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">

                          <h3 class="card-title text-center">SBNP</h3>
                          <div id="map" style="width:100%;height:380px;"></div>

                          <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>   API V3 -->
                          <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key="></script>  <!-- API V2 -->

                          <!-- AARTsJoe7L_kJ1kK-_nCE_l4PN3rHDHNNg&amp  API KEY-->




                          <script type="text/javascript">
                          function initialize() {

                            var mapOptions = {
                              zoom: 6,  //zoom 17
                              center: new google.maps.LatLng(-6.1194908, 106.8624483),
                              // disableDefaultUI: true
                            };

                            var mapElement = document.getElementById('map');

                            var map = new google.maps.Map(mapElement, mapOptions);

                            var officeLocations = [
                              <?php
                              $data = file_get_contents(site_url('sarpras/getdata'));
                              $no=1;
                              if(json_decode($data,true)){
                                $obj = json_decode($data);
                                foreach($obj->results as $item){
                                  ?>
                                  [<?php echo $item->id ?>,'<?php echo $item->namasbnp ?>','<?php echo $item->jenis ?>',<?php echo $item->latitude ?>,<?php echo $item->longtitude ?>,'<?php echo $item->nomordsi ?>'],
                                  <?php
                                }
                              }
                              ?>
                            ];
                            setMarkers(map, officeLocations);
                          }

                          function setMarkers(map, locations)
                          {
                            // var globalPin = '<?php //echo base_url('assets/images/marker.png') ?>';

                            for (var i = 0; i < locations.length; i++) {

                              var office = locations[i];
                              var myLatLng = new google.maps.LatLng(office[3], office[4]);
                              var infowindow = new google.maps.InfoWindow({content: contentString});

                              var contentString =
                              '<div id="content">'+
                              '<div id="siteNotice">'+
                              '</div>'+
                              '<h3 id="firstHeading" align="center">'+ office[1] + '</h3>'+
                              '<h6 id="firstHeading"> Jenis : '+ office[2] + '</h6>'+
                              '<h6 id="firstHeading"> Koordinat : '+ office[3] + ' , '+ office[4] + '</h6>'+
                              '<h6 id="firstHeading"> Nomor DSI : '+ office[5] + ' </h6>'+
                              '<div id="bodyContent" align="center">'+
                              '<a target="_blank" href=<?php echo base_url('sarpras/detailpeta/') ?>'+office[0]+'>Info Detail</a>'+
                              '</div>'+
                              '</div>';

                              var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                title: office[1],
                                // icon:'<?php //echo base_url('assets/images/marker.png') ?>'
                              });

                              google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
                            }
                          }

                          function getInfoCallback(map, content) {
                            var infowindow = new google.maps.InfoWindow({content: content});
                            return function() {
                              infowindow.setContent(content);
                              infowindow.open(map, this);
                            };
                          }

                          initialize();
                          </script>


                        </div>
                      </div>
                    </div>
                  </div>  <!-- END ROW MAP SBNP -->


                  <div class="row">
                    <div class="col-lg-12">
                      <h2 class="card-title text-center">Data</h2>



                      <table id="table3" class=" table table-bordered table-responsive nowrap table-hover" style="width: 100%;">
                        <thead>
                          <tr>
                            <th class="all text-dark" style="width: 5%;">ID</th>
                            <th class="all text-dark" style="width: 40%;">NAMA SBNP</th>
                            <th class="all text-dark" style="width: 25%;">NOMOR DSI</th>
                            <th class="all text-dark" style="width: 20%;">JENIS</th>
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
                          foreach ($dataaa as $r){ ?>
                            <tr>
                              <td><?= $r->id; ?></td>
                              <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/detailpeta/'.$r->id) ?>"><?=  $r->namasbnp; ?></a></td>
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



                </div>
              </div>
              <div class="tab-pane  p-20" id="telkompel" role="tabpanel">

                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">

                        <h3 class="card-title text-center">TELKOMPEL</h3>
                        <div id="maptelkompel" style="width:100%;height:380px;"></div>

                        <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>   API V3 -->
                        <!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key="></script>  <!-- API V2 -->

                        <!-- AARTsJoe7L_kJ1kK-_nCE_l4PN3rHDHNNg&amp  API KEY-->




                        <script type="text/javascript">
                        function initialize() {

                          var mapOptions = {
                            zoom: 6,  //zoom 17
                            center: new google.maps.LatLng(-6.1194908, 106.8624483),
                            // disableDefaultUI: true
                          };

                          var mapElement = document.getElementById('maptelkompel');

                          var map = new google.maps.Map(mapElement, mapOptions);

                          var officeLocations = [
                            <?php
                            $data = file_get_contents(site_url('sarpras/getdatamaptelkompel'));
                            $no=1;
                            if(json_decode($data,true)){
                              $obj = json_decode($data);
                              foreach($obj->results as $item){
                                ?>
                                [<?php echo $item->id ?>,'<?php echo $item->nama ?>','<?php echo $item->jenis ?>',<?php echo $item->latitude ?>,<?php echo $item->longtitude ?>],
                                <?php
                              }
                            }
                            ?>
                          ];
                          setMarkers(map, officeLocations);
                        }

                        function setMarkers(map, locations)
                        {
                          // var globalPin = '<?php //echo base_url('assets/images/marker.png') ?>';

                          for (var i = 0; i < locations.length; i++) {

                            var office = locations[i];
                            var myLatLng = new google.maps.LatLng(office[3], office[4]);
                            var infowindow = new google.maps.InfoWindow({content: contentString});

                            var contentString =
                            '<div id="content" class="text-center">'+
                            '<div id="siteNotice">'+
                            '</div>'+
                            '<h3 id="firstHeading" align="center">'+ office[1] + '</h3>'+
                            '<h6 id="firstHeading"> Jenis : '+ office[2] + '</h6>'+
                            '<h6 id="firstHeading"> Koordinat : '+ office[3] + ' , '+ office[4] + '</h6>'+
                            // '<h6 id="firstHeading"> Nomor DSI : '+ office[5] + ' </h6>'+
                            '<div id="bodyContent" align="center">'+
                            // '<a href=<?php //echo base_url('sarpras/detailpeta/') ?>'+office[0]+'>Info Detail</a>'+
                            '</div>'+
                            '</div>';

                            var marker = new google.maps.Marker({
                              position: myLatLng,
                              map: map,
                              title: office[1],
                              // icon:'<?php //echo base_url('assets/images/marker.png') ?>'
                            });

                            google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
                          }
                        }

                        function getInfoCallback(map, content) {
                          var infowindow = new google.maps.InfoWindow({content: content});
                          return function() {
                            infowindow.setContent(content);
                            infowindow.open(map, this);
                          };
                        }

                        initialize();
                        </script>


                      </div>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-lg-12">
                    <h2 class="card-title text-center">Data</h2>



                    <table id="tablemaptelkompel" class="table table-bordered nowrap table-hover" style="width: 100%;">
                      <thead>
                        <tr>
                          <th class="text-dark" style="width: 5%;">ID</th>
                          <th class="text-dark" style="width: 30%;">NAMA</th>
                          <th class="text-dark" style="width: 25%;">JENIS</th>
                          <th class="text-dark" style="width: 20%;">Latitude</th>
                          <th class="text-dark" style="width: 20%;">Longtitude : </th>
                        </tr>
                      </thead>

                      <tbody id="target">




                          <tr>
                            <td>1</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/SROPTanjungPriok') ?>">Stasiun Radio Pantai Kelas I Jakarta</a></td>
                            <td>SROP</td>
                            <td>-6.119123</td>
                            <td>106.862808</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/SROPCirebon') ?>">Stasiun Radio Pantai Kelas III/A /Ship Reporting System(SRS) Cirebon</a></td>
                            <td>SROP/SRS</td>
                            <td>-6.716666666666667</td>
                            <td>108.57222222222222</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/SROPCigading') ?>">Stasiun Radio Pantai Kelas III/A Cigading</a></td>
                            <td>SROP</td>
                            <td>-6.500277777777778</td>
                            <td>105.95055555555555</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/SROPPanjang') ?>">Stasiun Radio Pantai Kelas III/A Panjang</a></td>
                            <td>SROP</td>
                            <td>-5.455</td>
                            <td>105.30944444444444</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/SROPBengkulu') ?>">Stasiun Radio Pantai Kelas III/A / Ship Reporting System(SRS) Bengkulu</a></td>
                            <td>SROP</td>
                            <td>-3.8998442</td>
                            <td>102.3070114</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/VtsTanjungPriok') ?>">Vessel Traffic Service (VTS) Pohon Asem Tanjung Priok</a></td>
                            <td>VTS</td>
                            <td>-6.09658611111</td>
                            <td>106.882138889</td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/VtsMerak') ?>">Vessel Traffic Service (VTS) Merak, Selat Sunda</a></td>
                            <td>VTS</td>
                            <td>-5.93354722222</td>
                            <td>105.999658333</td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/VtsPanjang') ?>">Vessel Traffic Service (VTS) Panjang</a></td>
                            <td>VTS</td>
                            <td>-5.455</td>
                            <td>105.30944444444444</td>
                          </tr>


                      </tbody>
                    </table>


                  </div>
                </div> <!-- END DIV CLASS ROW -->



              </div>
              <div class="tab-pane p-20" id="kn" role="tabpanel">

                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">

                        <h3 class="card-title text-center">KAPAL</h3>
                        <div id="kapalnegara" style="width:100%;height:380px;"></div>

                        <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>   API V3 -->
                        <!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key="></script>  <!-- API V2 -->

                        <!-- AARTsJoe7L_kJ1kK-_nCE_l4PN3rHDHNNg&amp  API KEY-->




                        <script type="text/javascript">
                        function initialize() {

                          var mapOptions = {
                            zoom: 6,  //zoom 17
                            center: new google.maps.LatLng(-6.1194908, 106.8624483),
                            // disableDefaultUI: true
                          };

                          var mapElement = document.getElementById('kapalnegara');

                          var map = new google.maps.Map(mapElement, mapOptions);

                          var officeLocations = [
                            <?php
                            $data = file_get_contents(site_url('sarpras/getdatamapkapal'));
                            $no=1;
                            if(json_decode($data,true)){
                              $obj = json_decode($data);
                              foreach($obj->results as $item){
                                ?>
                                [<?php echo $item->id ?>,'<?php echo $item->nama ?>','<?php echo $item->jenis ?>',<?php echo $item->latitude ?>,<?php echo $item->longtitude ?>],
                                <?php
                              }
                            }
                            ?>
                          ];
                          setMarkers(map, officeLocations);
                        }

                        function setMarkers(map, locations)
                        {
                          // var globalPin = '<?php //echo base_url('assets/images/marker.png') ?>';

                          for (var i = 0; i < locations.length; i++) {

                            var office = locations[i];
                            var myLatLng = new google.maps.LatLng(office[3], office[4]);
                            var infowindow = new google.maps.InfoWindow({content: contentString});

                            var contentString =
                            '<div id="content">'+
                            '<div id="siteNotice">'+
                            '</div>'+
                            '<h3 id="firstHeading" align="center">'+ office[1] + '</h3>'+
                            // '<h6 id="firstHeading"> Jenis : '+ office[2] + '</h6>'+
                            // '<h6 id="firstHeading"> Koordinat : '+ office[3] + ' , '+ office[4] + '</h6>'+
                            // '<h6 id="firstHeading"> Nomor DSI : '+ office[5] + ' </h6>'+
                            '<div id="bodyContent" align="center">'+
                            // '<a href=<?php //echo base_url('sarpras/detailpeta/') ?>'+office[0]+'>Info Detail</a>'+
                            '</div>'+
                            '</div>';

                            var marker = new google.maps.Marker({
                              position: myLatLng,
                              map: map,
                              title: office[1],
                              // icon:'<?php //echo base_url('assets/images/marker.png') ?>'
                            });

                            google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
                          }
                        }

                        function getInfoCallback(map, content) {
                          var infowindow = new google.maps.InfoWindow({content: content});
                          return function() {
                            infowindow.setContent(content);
                            infowindow.open(map, this);
                          };
                        }

                        initialize();
                        </script>


                      </div>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-lg-12">
                    <h2 class="card-title text-center">Data</h2>



                    <table id="tablemapkapal" class="table table-bordered nowrap table-hover" style="width: 100%;">
                      <thead>
                        <tr>
                          <th class="text-dark" style="width: 3%;">ID</th>
                          <th class="text-dark" style="width: 32%;">NAMA</th>
                          <th class="text-dark" style="width: 25%;">JENIS</th>
                          <th class="text-dark" style="width: 20%;">Latitude</th>
                          <th class="text-dark" style="width: 20%;">Longtitude : </th>
                        </tr>
                      </thead>

                      <tbody id="target">




                          <tr>
                            <td>1</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/kapal') ?>">KN. EDAM</a></td>
                            <td>Kapal Induk Perambuan</td>
                            <td>-6.118846</td>
                            <td>106.864825</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/KNKARAKATA') ?>">KN. KARAKATA</a></td>
                            <td>Kapal Induk Perambuan</td>
                            <td>-6.119017</td>
                            <td>106.864824</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/KNENGGANO') ?>">KN. ENGGANO</a></td>
                            <td>KAPAL PATROLI</td>
                            <td>-6.118794</td>
                            <td>106.864820</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/KNMIAPLACIDUS') ?>">KN. MIAPLACIDUS</a></td>
                            <td>Kapal Bantu Perambuan</td>
                            <td>-6.119037</td>
                            <td>106.864820</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td><a data-toggle="tooltip" data-placement="top" title="Klik untuk melihat lebih detail" target="_blank" href="<?php echo base_url('sarpras/KNMOKMER') ?>">KN. MOKMER</a></td>
                            <td>Kapal Bantu Perambuan</td>
                            <td>-6.119058</td>
                            <td>106.864820</td>
                          </tr>


                      </tbody>
                    </table>


                  </div>
                </div> <!-- END DIV CLASS ROW -->


              </div>
            </div> <!-- END TAB CONTENT -->

          </div>
        </div>
      </div>




    </div>
  </div>
