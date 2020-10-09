<?php
class Timku extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_timku');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_timku->get_all_timku();
		$this->load->view('admin/v_timku',$x);
	}
	
	function simpan_timku(){
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
	                        $config['quality']= '60%';
	                        $config['width']= 200;
	                        $config['height']= 200;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$name_team=strip_tags($this->input->post('xname_team'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$descripsi_team=strip_tags($this->input->post('xdescripsi_team'));
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_timku->simpan_timku($name_team,$jabatan,$descripsi_team,$gambar,$user_nama);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/timku');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/timku');
	                }
	                 
	            }else{
					redirect('admin/timku');
				}
				
	}
	
	function update_timku(){
				
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
	                        $config['quality']= '60%';
	                        $config['width']= 200;
	                        $config['height']= 200;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $team_id=$this->input->post('kode');
	                        $name_team=strip_tags($this->input->post('xname_team'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$descripsi_team=strip_tags($this->input->post('xdescripsi_team'));
							$images=$this->input->post('gambar');
							$path='./assets/images/'.$images;
							unlink($path);
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_timku->update_timku($team_id,$name_team,$jabatan,$descripsi_team,$gambar,$user_nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/timku');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/timku');
	                }
	                
	            }else{
							$team_id=$this->input->post('kode');
	                        $name_team=strip_tags($this->input->post('xname_team'));
							$jabatan=strip_tags($this->input->post('xjabatan'));
							$descripsi_team=strip_tags($this->input->post('xdescripsi_team'));
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_timku->update_gambar_tanpa_img($team_id,$name_team,$jabatan,$descripsi_team,$user_nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/timku');
	            } 

	}

	function hapus_timku(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_timku->hapus_timku($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/timku');
	}

}