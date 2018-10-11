<?php
  defined ('BASEPATH') OR exit();

  class M_sarpras extends CI_Model{

      // function ambildata($table){
      //   return $this->db->get($table);
      // }

      function ambildata(){
        $this->db->select('*');
        $this->db->from('data');
        // $this->db->order_by('id','desc');

        return $this->db->get();
      }
      function ambildatatel(){
        $this->db->select('*');
        $this->db->from('maptelkompel');
        return $this->db->get();
      }
      function ambildatakapal(){
        $this->db->select('*');
        $this->db->from('mapkapal');
        return $this->db->get();
      }
      function wheredata($id){
        $this->db->select('*');
        $this->db->from('data');
        $this->db->where($id);

        return $this->db->get();
      }

      function tambahdata($namasbnp,$nomordsi,$LS,$BT,$latitude,$longtitude,$jenis,$wb,$wc,$kc,$pc,$tb,$elevasi,$jt,$sp,$bb,$btp,$se,$rr,$status,$tahun){
        $hsl=$this->db->query("INSERT INTO data (namasbnp,nomordsi,LS,BT,latitude,longtitude,jenis,warna_bangunan,warna_cahaya,karakteristik_cahaya,periode_cahaya,tinggi_bangunan,elevasi,jarak_tampak,sistem_pelampungan,bahan_bangunan,bentuk_tanda_puncak,sumber_energi,radar_reflektor,status,thn_pemb) VALUES ('$namasbnp','$nomordsi','$LS','$BT','$latitude','$longtitude','$jenis','$wb','$wc','$kc','$pc','$tb','$elevasi','$jt','$sp','$bb','$btp','$se','$rr','$status','$tahun') ");
        // ('$nama','$kelompok','$latitude','$longtitude','$lokasi','$luas','$nomor','$penanggung_jawab','$jml_sdm','$wktjagaopl','$perangkat','$lampu','$solar_cell','$battery')
        return $hsl;
      }

      function v_editdata($data_id){
        $this->db->select('*');
        $this->db->from('data');
        $this->db->where('id',$data_id);
        $where=$this->db->get();
        return $where->row();
      }

      function ambilId($table,$where){
      return  $this->db->get_where($table,$where);
      }
      function edit_modal($table,$data,$where)
      {
        return $this->db->update($table,$data,$where);
      }


      function getdata_id($codeid){
      $hsl=$this->db->query("SELECT * FROM data Where id='$codeid'");
      return $hsl;
      }
      function modal_edit($dataid,$namasbnp,$nomordsi,$LS,$BT,$latitude,$longtitude,$jenis,$wb,$wc,$kc,$pc,$tb,$elevasi,$jt,$sp,$bb,$btp,$se,$rr,$status,$tahun){
        $hsl=$this->db->query("UPDATE data SET namasbnp='$namasbnp',nomordsi='$nomordsi',LS='$LS',BT='$BT',latitude='$latitude',longtitude='$longtitude',jenis='$jenis',warna_bangunan='$wb',warna_cahaya='$wc',karakteristik_cahaya='$kc',periode_cahaya='$pc',tinggi_bangunan='$tb',elevasi='$elevasi',jarak_tampak='$jt',sistem_pelampungan='$sp',bahan_bangunan='$bb',bentuk_tanda_puncak='$btp',sumber_energi='$se',radar_reflektor='$rr',status='$status',thn_pemb='$tahun' WHERE id='$dataid'");
        return $hsl;
      }
      function hapusdata($blabla){
        $this->db->where('id', $blabla);
        return $this->db->delete('data');
      }

      function getdatatelkompel(){
        $this->db->select('*');
        $this->db->from('maptelkompel');
        // $this->db->order_by('id','desc');

        return $this->db->get();
      }
      function getdatakapal(){
        $this->db->select('*');
        $this->db->from('mapkapal');
        // $this->db->order_by('id','desc');

        return $this->db->get();
      }



  } //end CI_Model

 ?>
