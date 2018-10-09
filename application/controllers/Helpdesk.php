<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class Helpdesk extends CI_Controller {
          public function __construct()
          {
            parent::__construct();
            $this->load->model('m_helpdesk');
            $this->load->library('upload');

          }
          function Index()
          {
            $this->load->view('templates/header');
            $this->load->view('pages/helpdesk');
            $this->load->view('templates/footer');
          }

          function simpan()
          {
                  $nama = $this->input->post('nama');
                  $instansi = $this->input->post('instansi');
                  $email = $this->input->post('email');
                  $inti = $this->input->post('gridRadios');
                  $kordinat = $this->input->post('koordinat');
                  $keterangan = $this->input->post('keterangan');

                  $this->m_helpdesk->simpan_helpdesk($nama,$instansi,$email,$inti,$kordinat,$keterangan);
                  redirect('Helpdesk/index');
          }

        }


?>
