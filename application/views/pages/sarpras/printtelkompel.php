<!-- <style>
td{
    font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
    font-size: 14px;
    font-style: normal;
    
}
</style> -->
<div class="page-wrapper">
  <div class="container-fluid">



    <!-- <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Telkompel</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Telkompel</li>
        </ol>
      </div>
    </div> -->
  


    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body printableArea">
          <?php
            foreach ($data as $t) :
                $kotalist=array('STASIUN RADIO PANTAI CIREBON' => 'Cirebon','VESSEL TRAFFIC SERVICE MERAK' => 'Merak');
                $kepalalist=array('STASIUN RADIO PANTAI CIREBON' => 'ADAH MUNADI','VESSEL TRAFFIC SERVICE MERAK' => 'KEPALA VTS Merak');
                $pangkatlist=array('STASIUN RADIO PANTAI CIREBON' => 'Penata Tk.I ( III/d )','VESSEL TRAFFIC SERVICE MERAK' => 'Pangkat');
                $niplist=array('STASIUN RADIO PANTAI CIREBON' => '19630102 198403 1 001','VESSEL TRAFFIC SERVICE MERAK' => 'NIP');
                $kota=$kotalist[$t['nama_instansi']];
                $kepala=$kepalalist[$t['nama_instansi']];
                $pangkat=$pangkatlist[$t['nama_instansi']];
                $nip=$niplist[$t['nama_instansi']];                
                $tgla=date_indo($t['tanggal_mulai']);
                $tglb=date_indo($t['tanggal_akhir']);
            ?>
            <center><font face="Times New Roman" style="font-weight:bold;"><?php echo "LAPORAN HARIAN ".$t['nama_instansi']; ?></center>
            <center><font face="Times New Roman" style="font-weight:bold;">DISTRIK NAVIGASI KELAS I TANJUNG PRIOK</center><br>
            <table border="3" width="100%" >
                <tr>
                    <td>
                        <table width="95%" padding="0">
                            <tr>
                                <td width="35%" style="font-size:10;">&nbsp;Hari/Tanggal</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td style="font-size:10;"><?php echo $t['hari_mulai']; ?>, <?php echo $tgla;?> s/d <?php echo $t['hari_akhir'];?>, <?php echo $tglb?></td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&nbsp;Waktu</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td style="font-size:10;"><?php echo $t['jam_awal'];?> s/d <?php echo $t['jam_akhir'];?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;I. Lalu lintas Kapal</font>
                        <table width="95%">
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Kapal Masuk</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['kapal_masuk']; ?></td>
                                <td style="font-size:10;">Kapal</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Kapal Keluar</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['kapal_keluar']; ?></td>
                                <td style="font-size:10;">Kapal</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Kapal Melintas</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['kapal_melintas']; ?></td>
                                <td style="font-size:10;">Kapal</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Kapal Labuh</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['kapal_labuh']; ?></td>
                                <td style="font-size:10;">Kapal</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Kapal Sandar</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['kapal_sandar']; ?></td>
                                <td style="font-size:10;">Kapal</td>
                            </tr>
                        </table><br>

                        <font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;II. Prakiraan Cuaca Wilayah Pelabuhan dari BMKG</font>
                        <table  width="95%">
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Cuaca</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="15%" style="font-size:10;"><?php echo $t['cuaca']; ?></td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Arah Angin</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td style="font-size:10;"><?php echo $t['arah_angin']; ?></td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Kecepatan Angin</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['kecepatan_angin']; ?></td>
                                <td style="font-size:10;">Knots</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Jarak Pandang</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['jarak_pandang']; ?></td>
                                <td style="font-size:10;">Km</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Tinggi Gelombang</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['tinggi_gelombang']; ?></td>
                                <td style="font-size:10;">Meter</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Suhu Udara Maximum</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['suhu_udaramax']; ?></td>
                                <td style="font-size:10;">°C</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Suhu Udara Minimum</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['suhu_udaramin']; ?></td>
                                <td style="font-size:10;">°C</td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Pasang Surut Maximum</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['pasang_surutmax']; ?></td>
                                <td style="font-size:10;">Meter</td>
                            </tr>
                        </table><br>
                    
                        <table  width="95%">
                            <tr>
                                <td width="35%" style="font-size:10;"><font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;III. Kondisi Alur Pelayaran</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td style="font-size:10;"><?php echo $t['kond_alur_pelayaran']; ?></td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Kondisi SBNP</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td style="font-size:10;"><?php echo $t['kond_sbnp']; ?></td>
                            </tr>
                            <tr>
                                <td width="35%" style="font-size:10;">&emsp;&nbsp;> Kondisi Peralatan</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td style="font-size:10;"><?php echo $t['kond_peralatan']; ?></td>
                            </tr>
                        </table><br>

                    <font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;IV. Jasa PNBP VTS/Telegram Radio</font>
                        <table  width="95%">
                            <tr><td width="18.65%" style="font-size:10;">&emsp;&nbsp;> VTS</td></tr>
                            <tr>
                                <td width="18.65%" style="font-size:10;">&emsp;&nbsp;Nota Tagih</td>
                                <td width="1.65%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['nota_tagihvts']; ?></td>
                                <td width="10%" style="font-size:10;">Master Cable</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;">Rp. <?php echo $t['master_cablevts']; ?></td>
                            </tr>
                            <tr><td width="18.65%" style="font-size:10;">&emsp;&nbsp;> Telegram Radio</td></tr>
                            <tr>
                                <td width="18.65%" style="font-size:10;">&emsp;&nbsp;Nota Tagih</td>
                                <td width="1.65%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;"><?php echo $t['nota_tagihtr']; ?></td>
                                <td width="10%" style="font-size:10;">Master Cable</td>
                                <td width="3%" align="center" style="font-size:10;">:</td>
                                <td width="10%" style="font-size:10;">Rp. <?php echo $t['master_cabletr']; ?></td>
                            </tr>
                        </table><br>

                        <table  width="95%">
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;V. Lain - lain</font></td>
                                <td width="3%" align="center">:</td>
                                <td style="font-size:10;"><?php echo $t['lain']; ?></td>
                            </tr>
                        </table><br>   

                     <table  width="95%">
                        <tr>
                            <td width="35%"><font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;VI. Petugas Jaga</font></td>
                            <td width="3%" align="center" style="font-size:10;">:</td>
                            <td style="font-size:10;"><?php echo $t['petugas1']; ?></td>
                        </tr>
                        <tr>
                            <td width="35%" style="font-size:10;"></td>
                            <td width="3%" align="center" style="font-size:10;">:</td>
                            <td style="font-size:10;"><?php echo $t['petugas2']; ?></td>
                        </tr>
                    </table><br>   
                    <table width="95%">
                        <tr>
                            <td><font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;VII. Demikian dilaporkan atas perhatiannya diucapkan terima kasih</font><br></td>
                        </tr>
                    </table><br>
                    <table width="95%" class="text-right">
                        <tr>
                            <td width="55%" style="font-size:10;"></td>
                            <td style="font-size:10;"><?php echo $kota ?>, <?php echo $tglb ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="font-size:10;">KEPALA <?php echo $t['nama_instansi'] ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="font-size:10;">DISTRIK NAVIGASI KELAS I TANJUNG PRIOK</td>
                        </tr>
                    </table><br><br><br>
                    <table width="95%" class="text-center">
                        <tr>
                            <td width="62%"></td>
                            <td><center><font face="Times New Roman" size="2" color="black" style="font-weight:bold; text-decoration:underline;"><?php echo $kepala ?></font></center></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="font-size:10;"><center><?php echo $pangkat ?></center></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="font-size:10;"><center><?php echo $nip ?></center></td>
                        </tr>
                    </table>
                    </td>
                </tr>
            </table>
          </div>
          <?php endforeach;?>
            <!-- <div class="text-right margin-right">
                <button id="print" class="btn btn-default btn-outline" type="button"> 
                    <span><i class="fa fa-print"></i> Print</span> 
                </button> 
            </div> -->
        </div>
      </div>
    </div>



  </div>
</div>

</div>
