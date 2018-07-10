<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

public function __construct()
{
	parent::__construct();
	//Do your magic here
	if($this->session->userdata('logged_in')){
			$session_data= $this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
			$level=$data['level']=$session_data['level'];
			if($level!='admin'){
				redirect('pasien','refresh');
			}
		}else{
			redirect('','refresh');
		}
}


	public function index()
	{
		$this->load->view('home');
	}

	public function halamanPegawai()
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$this->load->model('Kamar_model');
		$username=$session_data['username'];
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$data['kamar']=$this->Kamar_model->kamarKosong()->result();
		$data['tersedia']=$this->Kamar_model->kamarKosong()->num_rows();
		$data['pasien']=$this->Kamar_model->daftarPasien()->result();
		$this->load->view('pegawai/home_pegawai',$data);
	}

	public function profile($username)
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$data['admin']=$this->Function_model->tampilUser($username);
		$this->load->view('pegawai/profile',$data);
	}



	public function halamanPasien($username)
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$username=$session_data['username'];
		
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();

		$data['biodata_pasien']=$this->Function_model->tampilDataDetailsPasien();
		$this->load->view('pegawai/home_pasien',$data);
	}

	public function detailsPasien($username)
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();

		$data['details_pasien']=$this->Function_model->detailsPasien();
		$data['transaksi_pasien']=$this->Function_model->detailsPasien1();

		$this->load->view('pegawai/data_pasien',$data);
	}

	public function dataKamar()
	{
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$username=$session_data['username'];
		
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$data['data_kamar']=$this->Function_model->dataKamar();
		$this->load->view('pegawai/home_kamar',$data);
	}

	public function jsKamar()
	{
		$this->load->model('Function_model');
		$result['dataKamar']=$this->Function_model->tampilDataKamar();
		header("Content-Type: application/json");
        echo json_encode($result);
	}







	public function kamarAktif()
	{

		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$username=$session_data['username'];
		
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$data['dataKamar']=$this->Function_model->dataKamar();
		$this->load->view('pegawai/kamar_aktif', $data);
	}

	public function viewTransaksi()
	{			
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$username=$session_data['username'];
		$data['user']=$this->Function_model->tampilUser($username);

		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$data['data_transaksi']=$this->Function_model->tampilDataTransaksi();		
		$this->load->view('pegawai/data_transaksi',$data);
	}

	public function dataTransaksi()
	{	
		$this->load->model('Function_model');
		$result['data_transaksi']=$this->Function_model->tampilDataTransaksi();
		header("Content-Type: application/json");
        echo json_encode($result);
	}

	public function createPasien()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$username=$session_data['username'];
		
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();

		
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no', 'Nomor Hp', 'trim|required');
		//$this->form_validation->set_rules('foto', 'Foto', 'trim|required');

		$this->load->model('Function_model');

			if ($this->form_validation->run() ==FALSE) {
				$this->load->view('pegawai/daftar_pasien',$data);
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
				}else{
					$this->Function_model->createUser();
					$this->Function_model->insertDataPasien();
					echo "<script>alert('Pendaftaran Pasie Telah Terhasil')</script>";
					redirect('pegawai/createPasien','refresh');
				}
			}	
	}

	public function updatePasien($id_pasien){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no', 'Nomor Hp', 'trim|required');

		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$this->load->model('Kamar_model');
		$username=$session_data['username'];
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		
		
		$data['user']=$this->Function_model->tampilUser($username);
		$data['pasien']=$this->Function_model->seleksiPasien($id_pasien);
		// print_r($data['pasien']);
		// die();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pegawai/update_pasien', $data);
		}else{
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '10000';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';

				$this->load->library('upload', $config);
				
				if(! $this->upload->do_upload('foto')){
					$error = array('error' =>$this->upload->display_errors());
					echo "<script>alert('Foto harus diisi')</script>";
					$this->load->view('pegawai/update_pasien', $data);
				}else{
					$this->Function_model->updatePasien($id_pasien);
					echo "<script>alert('Edit Pasien Berhasil')</script>";
					$this->load->view('pegawai/update_pasien', $data);
				}
		}
	}

	public function deletePasien($id_pasien)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$this->load->model('Kamar_model');
		$username=$session_data['username'];
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();

		$this->Function_model->hapusPasien($id_pasien);
		$data['biodata_pasien']=$this->Function_model->tampilDataDetailsPasien();
		$data['user']=$this->Function_model->tampilUser($username);

		$this->load->view('pegawai/home_pasien',$data);

	}


	public function updateKamar($id_kamar){
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Function_model');
		$this->load->model('Kamar_model');

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');

		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$this->load->model('Kamar_model');
		$username=$session_data['username'];
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		
		$data['user']=$this->Function_model->tampilUser($username);
		$data['kamar']=$this->Kamar_model->dataKamarById($id_kamar);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pegawai/update_kamar', $data);
		}else{
				$config['upload_path'] = './assets/uploads/kamar/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '10000';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';

				$this->load->library('upload', $config);
				
				if(! $this->upload->do_upload('foto')){
					$error = array('error' =>$this->upload->display_errors());
					echo "<script>alert('foto harus diisi')</script>";
					$this->load->view('pegawai/update_kamar', $data);
				}else{
					$this->Kamar_model->updateKamar($id_kamar);
					echo "<script>alert('pendaftaran kamar telah berhasil')</script>";
					redirect('pegawai/dataKamar','refresh');
				}
		}
	}


	public function tambahKamar()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$username=$session_data['username'];
		
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();

		$this->form_validation->set_rules('id', 'Id Kamar', 'trim|required');
		//$this->form_validation->set_rules('foto', 'Foto', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Kamar', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga Kamar', 'trim|required');

		$this->load->model('Kamar_model');

			if ($this->form_validation->run() ==FALSE) {
				$this->load->view('pegawai/tambah_kamar',$data);
			}else{
				$config['upload_path'] = './assets/uploads/kamar/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '10000';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';

				$this->load->library('upload', $config);
				
				if(! $this->upload->do_upload('foto')){
					echo $error = array('error' =>$this->upload->display_errors());
					$this->load->view('pegawai/tambah_kamar', $error);
				}else{
					$this->Kamar_model->tambahKamar();
					echo "<script>alert('Tambah Kamar Telah Terhasil')</script>";
					redirect('pegawai/dataKamar','refresh');
				}
			}	
	}

	public function deleteKamar($id_kamar)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Kamar_model');
		$this->Kamar_model->hapusKamar($id_kamar);
		redirect('pegawai/dataKamar','refresh');
	}

    public function hapusKamar()
    {
        $this->load->model('Function_model');
        $id = $this->input->post('id_kamar'); 
        $this->Pasien_model->deleteKamar($id);
    }
     public function editKamar()
    {
       $this->load->model('Function_model');
       $id=$this->input->post('id_kamar');
       $this->Pasien_model->updateKamar($id);
    }

    	public function tambahPegawai()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$username=$session_data['username'];
		
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();

		
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		//$this->form_validation->set_rules('foto', 'Foto', 'trim|required');

		$this->load->model('Function_model');

			if ($this->form_validation->run() ==FALSE) {
				$this->load->view('pegawai/daftar_pegawai',$data);
			}else{
				$config['upload_path'] = './assets/uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '10000';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';

				$this->load->library('upload', $config);
				
				if(! $this->upload->do_upload('foto')){
					$error = array('error' =>$this->upload->display_errors());
					$this->load->view('pegawai/daftar_pegawai', $error);
				}else{
					$this->Function_model->createUser();
					$this->Function_model->insertDataPegawai();
					echo "<script>alert('Pendaftaran Pegawai Telah Terhasil')</script>";
					redirect('pegawai/tambahPegawai','refresh');
				}
			}	
	}



    public function gridDinamis()
    {
    	$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Function_model');
		$this->load->model('Transaksi_model');
		$this->load->model('Kamar_model');
		$username=$session_data['username'];
		$data['user']=$this->Function_model->tampilUser($username);
		$data['jumlah']=$this->Function_model->totalPasien();
		$data['nKamar']=$this->Function_model->jumlahKamar();
		$data['nTransaksi']=$this->Transaksi_model->jumlahTransaksi();
		$data['dataKamar']=$this->Function_model->dataKamar();

        $this->load->view('pegawai/kamar_aktif',$data);
    }

    public function kamarJs()
    {
        $this->load->model('Function_model');
        $result = $this->Function_model->kamar(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }
	

    public function addKamar(){
        $this->load->model('Function_model');
        $this->Function_model->tambahKamar();
    }

	public function updateKamarJs()
    {
       $this->load->model('Function_model');
       $id=$this->input->post('id_kamar');
       $this->Function_model->updateKamar($id);
    }

	 public function deleteKamarJs()
    {
        $this->load->model('Function_model');
        $id = $this->input->post('id_kamar'); 
        $this->Function_model->deleteKamar($id);
    }

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */