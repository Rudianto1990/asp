<?php
class Services extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('m_services');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		
		$x['service']=$this->m_services->get_all_services();
		$x['pely']=$this->m_services->get_services_id($service_id);
		$this->load->view('front/v_home',$x);

		// echo '<pre>';
		// var_dump($x);die();
		// echo '</pre>';
	}



public function read_service($service_id) {

		$x['pely']=$this->m_services->get_services_id($service_id);
		$this->load->view('front/v_service_detail',$x);
    //    echo '<pre>';
	// 	var_dump($x);die();
	// 	echo '</pre>';
		
    }
}
