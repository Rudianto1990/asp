<?php 
class About extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_timku');
		$this->load->model('m_services');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		$x['timku']=$this->m_timku->get_all_timku();
		$x['service']=$this->m_services->get_all_services();
		$this->load->view('front/v_about',$x);
		
		// echo '<pre>';
        // var_dump($x);die();
        // echo '</pre>';
	}
}