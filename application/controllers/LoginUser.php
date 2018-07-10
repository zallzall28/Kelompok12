<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginUser extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home');
		} else {
			redirect('pegawai/halamanPegawai','refresh');
		}
		
	}

	public function cekDb($password)
	{
		$this->load->model('Model_user');
		$username=$this->input->post('username');
		$result = $this->Model_user->loginUser($username, $password);
		if ($result) {
			$sess_array=array();
			foreach ($result as $key) {
				$sess_array = array('id' => $key->id_user, 'username'=>$key->username,'level'=>$key->level);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb',"Login Gagal! Username dan password salah!");
			echo "<script>alert('Login Gagal , Username dan Password Salah')</script>";
			redirect('','refresh');

			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('','refresh');
	}

	public function insertUser()
	{
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->model('Model_user');
		
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		}else{
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '10000';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';

				$this->load->library('upload', $config);
				
				if(! $this->upload->do_upload('foto')){
					$error = array('error' =>$this->upload->display_errors());
					$this->load->view('pegawai/daftar_pasien', $error);
				}else {
					$this->Model_user->registerUser();
					$this->Model_user->daftarPasien();
					$this->load->view('register_sukses');	
				}
			}

	}

	public function register()
	{
		$this->load->view('register');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */