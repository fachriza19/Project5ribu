<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class daftarberita extends CI_Controller {
          public function __construct()
          {
            parent::__construct();
            $this->load->helper(array('url'));
            $this->load->model('m_berita');
          }
          function Index()
          { 
            $this->load->database();
            $jumlah_data = $this->m_berita->jumlah_data();
            $this->load->library('pagination');
            $config['base_url'] = base_url().'daftarberita/Index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 10;
            $from=$this->uri->segment(3);
            $this->pagination->initialize($config);
            $x['berita']=$this->m_berita->dataa($config['per_page'],$from);
          	$x['data']=$this->m_berita->get_all_berita();
            $x['dataSB']=$this->m_berita->get_all_berita_SB();
            $this->load->view('templates/header');
            $this->load->view('pages/berita/list',$x);
            $this->load->view('templates/footer');
          }

          function tampilanberita(){
            $kode=$this->uri->segment(3);
            $x['data']=$this->m_berita->get_berita_by_kode($kode);
            $this->load->view('templates/header');
            $this->load->view('pages/berita/tampilanberita',$x);
            $this->load->view('templates/footer');
          }

          
      }
