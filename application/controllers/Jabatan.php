<?php 
/**
 * summary
 */
class Jabatan extends CI_Controller
{
	private $username = array();
    public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->username['uname'] = $data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller)) {
				if (! $this->acl->is_allowed($current_controller, $data['level'])) {
					redirect('welcome/false','refresh');
				}
			}
		} else {
			redirect('login','refresh');
		}
	}

    public function index() {
    	$this->load->model('jabatan_model');
    	$data['jabatan_list'] = $this->jabatan_model->getDataJabatanSemua();
    	$this->load->view('navbar', $this->username);
    	$this->load->view('jabatan', $data);
    }
}
?>