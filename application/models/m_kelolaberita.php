<?php

class m_kelolaberita extends CI_Model{

      function show_berita(){

            $hsl=$this->db->query("SELECT * FROM berita ORDER BY berita_id ASC");
			return $hsl;
      }
      public function v_editberita($berita_id)
	{
		$this->db->select("*");
		$this->db->from("berita");
		$this->db->where("berita_id",$berita_id);
		$where=$this->db->get();
		return $where->row();
	}
	function edit_berita($berita_id,$berita_judul,$berita_isi,$berita_image){
		$hasil=$this->db->query("UPDATE berita SET berita_judul='$berita_judul',berita_isi='$berita_isi',berita_image='$berita_image' WHERE berita_id='$berita_id'");
		return $hasil;
	}

  function edit_beritagambar($modaleditgambarid,$editgambar){
    $hasil=$this->db->query("UPDATE berita SET berita_image='$editgambar' WHERE berita_id='$modaleditgambarid'");
    return $hasil;
  }

	public function hapusberita($berita_id)
      {
            $this->db->where('berita_id', $berita_id);
            return $this->db->delete('berita');
      }
}
