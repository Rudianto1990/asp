<?php
class M_timku extends CI_Model{

	function get_all_timku(){
		$hsl=$this->db->query("SELECT * FROM TBL_TEAM");
		return $hsl;
	}
	function simpan_timku($name_team,$jabatan,$descripsi_team,$gambar,$user_nama){
		$hsl=$this->db->query("insert into tbl_team(name_team, jabatan, descripsi_team, gambar, author) values ('$name_team','$jabatan','$descripsi_team','$gambar','$user_nama')");
		return $hsl;
	}
	function get_nama_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_team where team_id='$kode'");
		return $hsl;
	}
	function update_timku($team_id,$name_team,$jabatan,$descripsi_team,$gambar,$user_nama){
		$hsl=$this->db->query("update tbl_team set name_team='$name_team',jabatan='$jabatan',descripsi_team='$descripsi_team',gambar='$gambar', author='$user_nama' where team_id='$team_id'");
		return $hsl;
	}
	function update_gambar_tanpa_img($team_id,$name_team,$jabatan,$descripsi_team,$user_nama){
		$hsl=$this->db->query("update tbl_team set name_team='$name_team',jabatan='$jabatan',descripsi_team='$descripsi_team',author='$user_nama' where team_id='$team_id'");
		return $hsl;
	}
	function hapus_timku($kode){
		$hsl=$this->db->query("delete from tbl_team where team_id='$kode'");
		return $hsl;
	}
	

	//Front-End
	function get_timku(){
		$hsl=$this->db->query("SELECT * FROM TBL_TEAM");
		return $hsl;
	}

	function get_timku_by_id($idtim){
		$hsl=$this->db->query("SELECT * FROM tbl_team where team_id='$idtim'");
		return $hsl;
	}
	

}