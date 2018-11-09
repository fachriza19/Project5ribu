<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class Telkompel extends CI_Controller {
          public function __construct()
          {
            parent::__construct();
            $this->load->model('m_telkompel');
            $this->load->library('upload');

          }
          function Index()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/laporantelkompel');
            $this->load->view('templates/footer');
          }

          function kelolatelkompel()
          {
            $x['data']=$this->m_telkompel->show_laporan();
            $this->load->view('Templates/header');
            $this->load->view('pages/sarpras/kelolatelkompel',$x);
            $this->load->view('Templates/footer');
          }

          function simpanlaporan()
          {
            $instansi = $this->input->post('instansi');
            // $hari1 = $this->input->post('hari1');
            // $hari2 = $this->input->post('hari2');
            $tgl1 = $this->input->post('tgl1');
            $day1 = date('D', strtotime($tgl1));
            $harilist = array(
              'Sun' => 'Minggu',
              'Mon' => 'Senin',
              'Tue' => 'Selasa',
              'Wed' => 'Rabu',
              'Thu' => 'Kamis',
              'Fri' => 'Jumat',
              'Sat' => 'Sabtu'
            );
            
            $hari1 = $harilist[$day1];
            $tgl2 = $this->input->post('tgl2');
            $day2 = date('D', strtotime($tgl2));
            $hari2 = $harilist[$day2];
            $jam1 = $this->input->post('jam1');
            $jam2 = $this->input->post('jam2');
            $kplmasuk = $this->input->post('kmasuk');
            $kplkeluar = $this->input->post('kkeluar');
            $kpllintas = $this->input->post('klintas');
            $kpllabuh = $this->input->post('klabuh');
            $kplsandar = $this->input->post('ksandar');
            $cuaca = $this->input->post('cuaca');
            $arah = $this->input->post('araha');
            $kecepatan = $this->input->post('kecepatana');
            $jrkpandang = $this->input->post('jrkpandang');
            $tinggigel = $this->input->post('tgigel');
            $suhumax = $this->input->post('suhumax');
            $suhumin = $this->input->post('suhumin');
            $pasangmax = $this->input->post('pasangmax');
            $alur = $this->input->post('alurpel');
            $sbnp = $this->input->post('sbnp');
            $peralatan = $this->input->post('peralatan');
            $notavts = $this->input->post('notavts');
            $mastervts = $this->input->post('mastercblvts');
            $notatr = $this->input->post('notatr');
            $mastertr = $this->input->post('mastercbltr');
            $lain = $this->input->post('lain');
            $petugas1 = $this->input->post('petugas1');
            $petugas2 = $this->input->post('petugas2');

            $this->m_telkompel->simpan_telkompel($instansi,$hari1,$hari2,$tgl1,$tgl2,$jam1,$jam2,$kplmasuk,$kplkeluar,$kpllintas,$kpllabuh,$kplsandar,$cuaca,$arah,$kecepatan,$jrkpandang,$tinggigel,$suhumax,$suhumin,$pasangmax,$alur,$sbnp,$peralatan,$notavts,$mastervts,$notatr,$mastertr,$lain,$petugas1,$petugas2);
            $this->session->set_flashdata('success', 'true');
            redirect('Telkompel');
          }

          function printlaporan($idlap)
          {
            $laporan['data'] = $this->m_telkompel->getdatalap_id($idlap);
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/printtelkompel',$laporan);
            $this->load->view('templates/footer');
          }
          
          
           

        }


?>
