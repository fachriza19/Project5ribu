<?php 
 
class m_telkompel extends CI_Model{
	function simpan_telkompel($instansi,$hari1,$hari2,$tgl1,$tgl2,$jam1,$jam2,$kplmasuk,$kplkeluar,$kpllintas,$kpllabuh,$kplsandar,$cuaca,$arah,$kecepatan,$jrkpandang,$tinggigel,$suhumax,$suhumin,$pasangmax,$alur,$sbnp,$peralatan,$nota,$master,$lain,$petugas1,$petugas2){
		$hsl=$this->db->query("INSERT INTO laporan_telkompel (nama_instansi,hari_mulai,hari_akhir,tanggal_mulai,tanggal_akhir,jam_awal,jam_akhir,kapal_masuk,kapal_keluar,kapal_melintas,kapal_labuh,kapal_sandar,cuaca,arah_angin,kecepatan_angin,jarak_pandang,tinggi_gelombang,suhu_udaramax,suhu_udaramin,pasang_surutmax,kond_alur_pelayaran,kond_sbnp,kond_peralatan,nota_tagih,master_cable,lain,petugas1,petugas2) VALUES ('$instansi','$hari1','$hari2','$tgl1','$tgl2','$jam1','$jam2','$kplmasuk','$kplkeluar','$kpllintas','$kpllabuh','$kplsandar','$cuaca','$arah','$kecepatan','$jrkpandang','$tinggigel','$suhumax','$suhumin','$pasangmax','$alur','$sbnp','$peralatan','$nota','$master','$lain','$petugas1','$petugas2')");
		return $hsl;
	}  
	// function show_laporan(){

    //         $hsl=$this->db->query("SELECT * FROM helpdesk ORDER BY laporan_id DESC");
	// 		return $hsl;
    //   }  
    //  public function hapuslaporan($laporan_id)
    //   {
    //         $this->db->where('laporan_id', $laporan_id);
    //         return $this->db->delete('helpdesk');
    //   }
}
?>