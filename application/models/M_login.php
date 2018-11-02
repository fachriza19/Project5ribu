<?php

if (! defined('BASEPATH') ) exit('No direct script access allowed');

        class M_login extends CI_Model {

          function login($user,$pass){

            $this->db->select('username,password,role,email,nama');
            $this->db->from('users');
            $this->db->where('username',$user);
            $this->db->where('password',$pass);
            $this->db->limit(1);

            $query = $this->db->get();

            if($query->num_rows()==1){
              return $query->result();
            }else{
              return false;
            }
          }

        
        }


?>
