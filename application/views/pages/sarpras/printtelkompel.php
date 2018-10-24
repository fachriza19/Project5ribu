<!-- <style>
td{
    font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
    font-size: 14px;
    font-style: normal;
    
}
</style> -->
<div class="page-wrapper">
  <div class="container-fluid">



    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Telkompel</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Telkompel</li>
        </ol>
      </div>
    </div>
  


    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body printableArea">
          <?php
            foreach ($data->result_array() as $t) :
                $id=$t['id_laporan'];
                $ins=$t['nama_instansi'];
                $kotalist=array('STASIUN RADIO PANTAI CIREBON' => 'Cirebon','VESSEL TRAFFIC SERVICE MERAK' => 'Merak');
                $kepalalist=array('STASIUN RADIO PANTAI CIREBON' => 'ADAH MUNADI','VESSEL TRAFFIC SERVICE MERAK' => 'KEPALA VTS Merak');
                $pangkatlist=array('STASIUN RADIO PANTAI CIREBON' => 'Penata Tk.I ( III/d )','VESSEL TRAFFIC SERVICE MERAK' => 'Pangkat');
                $niplist=array('STASIUN RADIO PANTAI CIREBON' => '19630102 198403 1 001','VESSEL TRAFFIC SERVICE MERAK' => 'NIP');
                $kota=$kotalist[$ins];
                $kepala=$kepalalist[$ins];
                $pangkat=$pangkatlist[$ins];
                $nip=$niplist[$ins];
                $hari1=$t['hari_mulai'];
                $hari2=$t['hari_akhir'];
                //$tgl1=date_create($t['tanggal_mulai']);
                //$tgla=date_format($tgl1,"d F Y");
                $tgl1=$t['tanggal_mulai'];
                $tgla=date_indo($tgl1);
                //$tgl2=date_create($t['tanggal_akhir']);
                //$tglb=date_format($tgl2,"d F Y");
                $tgl2=$t['tanggal_akhir'];
                $tglb=date_indo($tgl2);
                $jam1=$t['jam_awal'];
                $jam2=$t['jam_akhir'];
                $kplmsk=$t['kapal_masuk'];
                $kplklr=$t['kapal_keluar'];
                $kpllnt=$t['kapal_melintas'];
                $kpllbh=$t['kapal_labuh'];
                $kplsdr=$t['kapal_sandar'];
                $cuaca=$t['cuaca'];
                $araha=$t['arah_angin'];
                $kcpta=$t['kecepatan_angin'];
                $jrkp=$t['jarak_pandang'];
                $tggel=$t['tinggi_gelombang'];
                $suhumax=$t['suhu_udaramax'];
                $suhumin=$t['suhu_udaramin'];
                $psg=$t['pasang_surutmax'];
                $alurp=$t['kond_alur_pelayaran'];
                $sbnp=$t['kond_sbnp'];
                $alat=$t['kond_peralatan'];
                $nota=$t['nota_tagih'];
                $cable=$t['master_cable'];
                $lain=$t['lain'];
                $ptg1=$t['petugas1'];
                $ptg2=$t['petugas2']
            ?>
            <h4 class="card-title text-center text-black"><font face="Times New Roman"><?php echo "LAPORAN HARIAN ",$ins ?></font></h4>
            <h4 class="card-title text-center"><font face="Times New Roman">DISTRIK NAVIGASI KELAS I TANJUNG PRIOK</font></h4>
            <font face="Times New Roman"></font>
            <table border="3" width="100%" >
                <tr>
                    <td>
                        <table width="95%" padding="0">
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&nbsp;Hari/Tanggal</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $hari1 ?>, <?php echo $tgla;?> s/d <?php echo $hari2?>, <?php echo $tglb?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&nbsp;Waktu</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $jam1;?> s/d <?php echo $jam2?></font></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;I. Lalu lintas Kapal</font>
                        <table width="95%">
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Kapal Masuk</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td width="10%"><font face="Times New Roman" size="2" color="black"><?php echo $kplmsk ?></font></td>
                                <td><font face="Times New Roman" size="2" color="black">Kapal</font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Kapal Keluar</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td width="10%"><font face="Times New Roman" size="2" color="black"><?php echo $kplklr ?></font></td>
                                <td><font face="Times New Roman" size="2" color="black">Kapal</font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Kapal Melintas</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td width="10%"><font face="Times New Roman" size="2" color="black"><?php echo $kpllnt ?></font></td>
                                <td><font face="Times New Roman" size="2" color="black">Kapal</font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Kapal Labuh</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td width="10%"><font face="Times New Roman" size="2" color="black"><?php echo $kpllbh ?></font></td>
                                <td><font face="Times New Roman" size="2" color="black">Kapal</font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Kapal Sandar</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td width="10%"><font face="Times New Roman" size="2" color="black"><?php echo $kplsdr ?></font></td>
                                <td><font face="Times New Roman" size="2" color="black">Kapal</font></td>
                            </tr>
                        </table><br>

                        <font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;II. Prakiraan Cuaca Wilayah Pelabuhan dari BMKG</font>
                        <table  width="95%">
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Cuaca</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $cuaca ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Arah Angin</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $araha ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Kecepatan Angin</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $kcpta ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Jarak Pandang</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $jrkp ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Tinggi Gelombang</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $tggel ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Suhu Udara Maximum</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $suhumax ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Suhu Udara Minimum</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $suhumin ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Pasang Surut Maximum</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $psg ?></font></td>
                            </tr>
                        </table><br>
                    
                        <table  width="95%">
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;III. Kondisi Alur Pelayaran</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $alurp ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Kondisi SBNP</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $sbnp ?></font></td>
                            </tr>
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Kondisi Peralatan</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $alat ?></font></td>
                            </tr>
                        </table><br>

                    <font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;IV. Jasa PNBP VTS/Telegram Radio</font>
                        <table  width="95%">
                            <tr>
                                <td width="18.65%"><font face="Times New Roman" size="2" color="black">&emsp;&nbsp;> Nota Tagih</font></td>
                                <td width="1.65%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td width="10%"><font face="Times New Roman" size="2" color="black"><?php echo $nota ?></font></td>
                                <td width="10%"><font face="Times New Roman" size="2" color="black">Master Cable</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td width="10%"><font face="Times New Roman" size="2" color="black">Rp. <?php echo $cable ?></font></td>
                            </tr>
                        </table><br>

                        <table  width="95%">
                            <tr>
                                <td width="35%"><font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;V. Lain - lain</font></td>
                                <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                                <td><font face="Times New Roman" size="2" color="black"><?php echo $lain ?></font></td>
                            </tr>
                        </table><br>   

                     <table  width="95%">
                        <tr>
                            <td width="35%"><font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;VI. Petugas Jaga</font></td>
                            <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                            <td><font face="Times New Roman" size="2" color="black"><?php echo $ptg1 ?></font></td>
                        </tr>
                        <tr>
                            <td width="35%"></td>
                            <td width="3%" align="center"><font face="Times New Roman" size="2" color="black">:</font></td>
                            <td><font face="Times New Roman" size="2" color="black"><?php echo $ptg2 ?></font></td>
                        </tr>
                    </table><br>   
                    <table width="95%">
                        <tr>
                            <td><font face="Times New Roman" size="2" color="black" style="font-weight:bold;">&nbsp;VII. Demikian dilaporkan atas perhatiannya diucapkan terima kasih</font><br></td>
                        </tr>
                    </table><br>
                    <table width="95%" class="text-right">
                        <tr>
                            <td width="45%"></td>
                            <td><font face="Times New Roman" size="2" color="black"><?php echo $kota ?>, <?php echo $tglb ?></font></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><font face="Times New Roman" size="2" color="black">KEPALA <?php echo $ins ?></font></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><font face="Times New Roman" size="2" color="black">DISTRIK NAVIGASI KELAS I TANJUNG PRIOK</font></td>
                        </tr>
                    </table><br><br><br>
                    <table width="95%" class="text-center">
                        <tr>
                            <td width="62%"></td>
                            <td><font face="Times New Roman" size="2" color="black" style="font-weight:bold; text-decoration:underline;"><?php echo $kepala ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><font face="Times New Roman" size="2" color="black"><?php echo $pangkat ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><font face="Times New Roman" size="2" color="black"><?php echo $nip ?></td>
                        </tr>
                    </table>
                    </td>
                </tr>
            </table>
          </div>
          <?php endforeach;?>
            <div class="text-right margin-right">
                <button id="print" class="btn btn-default btn-outline" type="button"> 
                    <span><i class="fa fa-print"></i> Print</span> 
                </button> 
            </div>
        </div>
      </div>
    </div>



  </div>
</div>

</div>
