<?php
class Gallery extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_galeri');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_galeri->get_all_galeri();
		$this->load->view('front/v_gallery',$x);
	}


public function read_gallery($galeri_id) {
	/*$row = $this->m_galeri->get_galeri_by_id($galeri_id);
	if ($row) {
		$x= array(
			'galeri_id' => $row->galeri_id,
			'galeri_judul' => $row->galeri_judul,
			'galeri_tanggal' => $row->galeri_tanggal,
			'galeri_gambar' => $row->galeri_gambar,
			'galeri_album_id' => $row->galeri_album_id,
			'galeri_pengguna_id' => $row->galeri_pengguna_id,
			'galeri_author' => $row->galeri_author,
			
		);
		$x['galleryku'] = $this->db->get_where('tb_album', array('galeri_album_id' => $row->galeri_album_id))->row_array();
	
		$this->load->view('front/v_gallery_detail',$x);*/
		$x['gallery']=$this->m_galeri->get_galeri_by_id($galeri_id);
		$this->load->view('front/v_gallery_detail',$x);

		// echo '<pre>';
		// var_dump($x);die();
		// echo '</pre>';
	// } else {
	// 	$this->session->set_flashdata('message', 'Record Not Found');
	// 	redirect(site_url('transaksi'));
	//    }
    }
}
