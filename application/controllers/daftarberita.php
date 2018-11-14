<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class daftarberita extends CI_Controller {
          public function __construct()
          {
            parent::__construct();

        // load Pagination library
            $this->load->library('pagination');

        // load URL helper
            $this->load->helper('url');
          }


          function Index()
          { 
            $config = array();
            $config["base_url"] = base_url() . "daftarberita/Index";
            $config["total_rows"] = $this->m_berita->record_count();
            $config["per_page"] = 2;
            $config["uri_segment"] = 3;

            $this->pagination->initialize($config);

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $x["results"] = $this->m_berita->fetch_countries($config["per_page"], $page);
            $x["links"] = $this->pagination->create_links();
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

          function cari() {
            $data2['cari'] = $this->m_berita->cari();
            $this->load->view('Templates/header');
            $this->load->view('pages/berita/search', $data2);
            $this->load->view('Templates/footer');

            }

            

          
      }
