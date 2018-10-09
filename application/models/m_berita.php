<?php
class M_berita extends CI_Model{

	function simpan_berita($jdl,$berita,$gambar){
		$hsl=$this->db->query("INSERT INTO berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
		return $hsl;
	}

	function get_berita_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM berita WHERE berita_id='$kode'");
		return $hsl;
	}

	function get_all_berita(){
		$hsl=$this->db->query("SELECT * FROM berita ORDER BY berita_id DESC");
		return $hsl;
	}
	public function cari()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from berita where berita_judul like '%$cari%' ");
		return $data->result();
	}
 
}