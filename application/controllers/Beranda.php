<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_services');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['post']=$this->m_tulisan->get_post_home();
		$x['service']=$this->m_services->get_all_services();
		$this->load->view('front/v_home',$x);

		// echo '<pre>';
		// var_dump($x);die();
		// echo '</pre>';
	}
}