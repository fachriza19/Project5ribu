<?php
class M_berita extends CI_Model{

	function simpan_berita($jdl,$berita,$gambar,$date){
		$hsl=$this->db->query("INSERT INTO berita (berita_judul,berita_isi,berita_image,berita_tanggal) VALUES ('$jdl','$berita','$gambar','$date')");
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
	function get_all_berita_SB(){
		$hsl=$this->db->query("SELECT * FROM berita ORDER BY berita_id DESC limit 5");
		return $hsl;
	}
	public function cari()
	{
		$cari = $this->input->GET('cari', TRUE);
		$cari = $this->db->query("SELECT * from berita where berita_judul like '%$cari%' ");
		return $cari->result();
	}

	public function record_count() {
        return $this->db->count_all("berita");
    }

    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("berita");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}
