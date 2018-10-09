<?php 
 
class m_helpdesk extends CI_Model{
	function simpan_helpdesk($nama,$instansi,$email,$inti,$kordinat,$keterangan){
		$hsl=$this->db->query("INSERT INTO helpdesk (laporan_nama,laporan_instansi,laporan_email,laporan_inti,laporan_koordinat,laporan_keterangan) VALUES ('$nama','$instansi','$email','$inti','$kordinat','$keterangan')");
		return $hsl;
	}
	function show_laporan(){

            $hsl=$this->db->query("SELECT * FROM helpdesk ORDER BY laporan_id DESC");
			return $hsl;
      }  
     public function hapuslaporan($laporan_id)
      {
            $this->db->where('laporan_id', $laporan_id);
            return $this->db->delete('helpdesk');
      }
}