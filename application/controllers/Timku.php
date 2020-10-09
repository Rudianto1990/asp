<?php
class Timku extends CI_Controller{
	function __construct(){
		parent::__construct();
	
		$this->load->model('m_timku');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		$x['timku']=$this->m_timku->get_all_timku();
		
        $this->load->view('front/v_about',$x);
        echo '<pre>';
        var_dump($x);die();
        echo '</pre>';
	}
}
