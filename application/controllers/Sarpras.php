<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class Sarpras extends CI_Controller {
          public function __construct()
          {
            parent::__construct();


          }
          function Index()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/petakenavigasian');
            $this->load->view('templates/footer');
          }
          function Data()
          {
            $data['data'] = $this->m_sarpras->ambildata()->result();
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/data',$data);
            $this->load->view('templates/footer');
          }

          function Telkompel()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/Telkompel/telkompel');
            $this->load->view('templates/footer');
          }

          function VtsTanjungPriok()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/Telkompel/VtsTanjungPriok');
            $this->load->view('templates/footer');
          }
           function VtsMerak()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/Telkompel/VtsMerak');
            $this->load->view('templates/footer');
          }
           function VtsPanjang()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/Telkompel/VtsPanjang');
            $this->load->view('templates/footer');
          }
           function SROPTanjungPriok()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/Telkompel/SROPTanjungPriok');
            $this->load->view('templates/footer');
          }
           function SROPCirebon()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/Telkompel/SROPCirebon');
            $this->load->view('templates/footer');
          }
           function SROPBengkulu()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/Telkompel/SROPBengkulu');
            $this->load->view('templates/footer');
          }

          function Bengkel()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/bengkel');
            $this->load->view('templates/footer');
          }

          function ProfileKN()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/KN/Profile');
            $this->load->view('templates/footer');
          }

          function Kapal()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/KN/KNEdam');
            $this->load->view('templates/footer');
          }

          function KNKARAKATA()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/KN/KNKARAKATA');
            $this->load->view('templates/footer');
          }
          function KNENGGANO()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/KN/KNENGGANO');
            $this->load->view('templates/footer');
          }
          function KNMIAPLACIDUS()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/KN/KNMIAPLACIDUS');
            $this->load->view('templates/footer');
          }
          function KNMOKMER()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/KN/KNMOKMER');
            $this->load->view('templates/footer');
          }

          function Pengamatan()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/pengamatan');
            $this->load->view('templates/footer');
          }

          //admin page
          function Keldatasarpras()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/keldata');
            $this->load->view('templates/footer');
          }

          function detail()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/sarpras/detail');
            $this->load->view('templates/footer');
          }




          // function ambildata()
          // {
          //   $dataTempat = $this->m->ambildata('data')->result();
          //
          //   echo json_encode($dataTempat);
          // }







        } //ENC Ci_Controller


?>
