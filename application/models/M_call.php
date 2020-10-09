<?php
class M_call extends CI_Model{

	function call_you($call_name,$phone_number){
		$hsl=$this->db->query("INSERT INTO tbl_call(call_name, phone_number) VALUES ('$call_name','$phone_number')");
		return $hsl;
	}

	function get_all_call(){
		$hsl=$this->db->query("SELECT tbl_call.*,DATE_FORMAT(call_date,'%d %M %Y') AS tanggal FROM tbl_call ORDER BY call_id DESC");
		return $hsl;
	}

	function hapus_call($kode){
		$hsl=$this->db->query("DELETE FROM tbl_call WHERE call_id='$kode'");
		return $hsl;
	}

	// function update_status_call(){
	// 	$hsl=$this->db->query("UPDATE tbl_call SET inbox_status='0'");
	// 	return $hsl;
	// }
}