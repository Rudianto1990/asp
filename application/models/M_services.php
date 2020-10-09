<?php
class M_services extends CI_Model{

	function get_all_services(){
		$hsl=$this->db->query("SELECT tbl_services.*,DATE_FORMAT(service_tanggal,'%d %M %Y') AS tanggal FROM tbl_services ORDER BY service_id DESC");
		return $hsl;
	} 
	
	function simpan_services($judul,$isi,$user_nama,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_services (service_judul,service_deskripsi,service_author,service_image) VALUES ('$judul','$isi','$user_nama','$gambar')");
		return $hsl;
	}

	function get_services_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_services WHERE service_id='$kode'");
		return $hsl;
	}

	function update_services($service_id,$judul,$isi,$user_nama,$gambar){
		$hsl=$this->db->query("UPDATE tbl_services SET service_judul='$judul',service_deskripsi='$isi',services_author='$user_nama',services_image='$gambar' WHERE service_id='$service_id'");
		return $hsl;
	}

	function update_services_tanpa_img($service_id,$judul,$isi,$user_nama){
		$hsl=$this->db->query("UPDATE tbl_services SET service_judul='$judul',service_deskripsi='$isi',service_author='$user_nama' WHERE service_id='$service_id'");
		return $hsl;
	}

	function hapus_services($kode){
		$hsl=$this->db->query("DELETE FROM tbl_services WHERE service_id='$kode'");
		return $hsl;
	}


	//Frontend
	function get_services_id($service_id){
		$hsl=$this->db->query("SELECT tbl_services.*,DATE_FORMAT(service_tanggal,'%d %M %Y') AS tanggal FROM tbl_services where service_id ='$service_id' ORDER BY service_id ");
		return $hsl;
	}

	function get_services_per_page($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_services.*,DATE_FORMAT(service_tanggal,'%d %M %Y') AS tanggal FROM tbl_services ORDER BY service_id DESC LIMIT $offset,$limit");
		return $hsl;
	}
}