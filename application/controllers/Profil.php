<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class Profil extends CI_Controller {
          public function __construct()
          {
            parent::__construct();

          }
          function Index()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/profil/visimisi');
            $this->load->view('templates/footer');
          }
          function Wilker()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/profil/wilayahkerja');
            $this->load->view('templates/footer');
          }
          function Tupoksi()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/profil/tupoksi');
            $this->load->view('templates/footer');
          }
          function Struktur()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/profil/struktur');
            $this->load->view('templates/footer');
          }
          function Sejarah()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/profil/sejarah');
            $this->load->view('templates/footer');
          }



        }


?>
