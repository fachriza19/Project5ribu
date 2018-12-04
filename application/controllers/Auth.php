<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    if (isset($_GET['logout']) == 'signout') {
      $this->session->sess_destroy();
      redirect();
    }

    if ($this->session->has_userdata('username')) {
      redirect ('home');
    }

  }

  function Index(){
    $this->load->view('pages/auth');
  }

 //  function Logout(){
 //  $this->session->sess_destroy();
 //  redirect(base_url('Auth'));
 // }

  function proses_login(){
    $user=$this->input->post('username');
    $pass=$this->input->post('password');
   // $query = $this->db->get('users');
     $where = array(
            'username' => $user,
            'password' => md5($pass)
            );
    $ceklogin= $this->M_login->login("users",$where);
    // die(print_r($ceklogin));
    if($ceklogin){
      foreach($ceklogin as $row);
      $datasession = array(
        'username' => $row->username,
        'role'=> $row->role,
        'nama'=> $row->nama,
        'email'=> $row->email,
        'logged_in' => TRUE,

      );
      $this->session->set_userdata($datasession);
      redirect('Home');
    }else{
      $data['pesan']="Username / Password tidak sesuai.";
      $this->load->view('pages/auth',$data);
    }
  }


}


?>
