<?php 
class Call extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_call');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		
		$this->load->view('front/v_home');
	}

	function call_you(){
        //$this->_rules();
		$call_name=htmlspecialchars($this->input->post('call_name',TRUE),ENT_QUOTES);
		$phone_number=htmlspecialchars($this->input->post('phone_number',TRUE),ENT_QUOTES);
		
		$this->m_call->call_you($call_name,$phone_number);
		echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah menghubungi kami.</div>");
		redirect('beranda');
	}
}