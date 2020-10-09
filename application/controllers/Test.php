<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function index(){
		//$x['post']=$this->m_tulisan->get_post_home();
		$this->load->view('front/v_blog');

		// echo '<pre>';
		// var_dump($x);die();
		// echo '</pre>';
	}
}