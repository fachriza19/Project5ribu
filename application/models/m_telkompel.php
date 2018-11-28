<?php 
 
class m_telkompel extends CI_Model{
	function simpan_telkompel($instansi,$kategori,$hari1,$hari2,$tgl1,$tgl2,$jam1,$jam2,$kplmasuk,$kplkeluar,$kpllintas,$kpllabuh,$kplsandar,$cuaca,$arah,$kecepatan,$jrkpandang,$tinggigel,$suhumax,$suhumin,$pasangmax,$alur,$sbnp,$peralatan,$notavts,$mastervts,$notatr,$mastertr,$lain,$petugas1,$petugas2){
		$hsl=$this->db->query("INSERT INTO laporan_telkompel (nama_instansi,kategori,hari_mulai,hari_akhir,tanggal_mulai,tanggal_akhir,jam_awal,jam_akhir,kapal_masuk,kapal_keluar,kapal_melintas,kapal_labuh,kapal_sandar,cuaca,arah_angin,kecepatan_angin,jarak_pandang,tinggi_gelombang,suhu_udaramax,suhu_udaramin,pasang_surutmax,kond_alur_pelayaran,kond_sbnp,kond_peralatan,nota_tagihvts,master_cablevts,nota_tagihtr,master_cabletr,lain,petugas1,petugas2) VALUES ('$instansi','$kategori','$hari1','$hari2','$tgl1','$tgl2','$jam1','$jam2','$kplmasuk','$kplkeluar','$kpllintas','$kpllabuh','$kplsandar','$cuaca','$arah','$kecepatan','$jrkpandang','$tinggigel','$suhumax','$suhumin','$pasangmax','$alur','$sbnp','$peralatan','$notavts','$mastervts','$notatr','$mastertr','$lain','$petugas1','$petugas2')");
		return $hsl;
	}  
	function show_laporan(){

    $hsl=$this->db->query("SELECT * FROM laporan_telkompel ORDER BY id_laporan DESC");
		return $hsl;
  }  
  
  function getdatalap_id($idlap){
    $hsl=$this->db->query("SELECT * FROM laporan_telkompel where id_laporan='$idlap'");
    return $hsl;
  }

  function getdata(){
  	$tgl=date('Y-m-d');
  	//$this->db->select("kategori,kapal_masuk,kapal_keluar,kapal_melintas,kapal_labuh,kapal_sandar");
  	$this->db->select("kategori,kapal_masuk,kapal_keluar,kapal_melintas,kapal_labuh,kapal_sandar");
  	$this->db->FROM("laporan_telkompel");
  	//$this->db->where("tanggal_akhir = '$tgl'");
  	return $this->db->get();
  	
  }
}
?>