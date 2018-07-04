<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{

		$this->load->view('register_view');

	}

	public function add(){

		$this->load->library('form_validation');
		$this->load->model('Register_model');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register_view');

		} else {
			$this->Register_model->addUser();
			redirect('login','refresh');

		}
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
?>