<?php
class Services extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pengguna');
		$this->load->model('m_services');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_services->get_all_services();
		$this->load->view('admin/v_service',$x);
	}
	function add_service(){
		$this->load->view('admin/v_add_service');
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_services->get_services_by_kode($kode);
		$this->load->view('admin/v_edit_service',$x);
	}
	function simpan_services(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
	                        $config['width']= 1920;
	                        $config['height']= 1038;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi'); 
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_services->simpan_services($judul,$isi,$user_nama,$gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/services');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/services');
	                }
	                 
	            }else{
					redirect('admin/services');
				}
				
	}
	
	function update_services(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
	                        $config['width']= 1920;
	                        $config['height']= 1038;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $service_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi');
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_services->update_services($service_id,$judul,$isi,$user_nama,$gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/services');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/services');
	                }
	                
	            }else{
							$service_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi');
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_services->update_services_tanpa_img($service_id,$judul,$isi,$user_nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/services');
	            } 

	}

	function hapus_services(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_services->hapus_services($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/services');
	}

}