<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesanKamar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		
	}

	//untuk user 
	public function addKamar()
	{
		$this->load->model('Kamar_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kamar_kosong', 'Kamar', 'trim|required');
		$this->form_validation->set_rules('id_pasien', 'Pasien', 'trim|required');


		$data['kamar']=$this->Kamar_model->kamarKosong();

		//$this->load->view('pegawai/daftar_kamar',$data);
		if(!$data['kamar']){
			echo "<script>alert('Seluruh Kamar Telah Terpakai')</script>";
			redirect('pegawai/halamanPegawai','refresh');
		}else {
			if ($this->form_validation->run() == true) {
				echo "<script>alert('pendaftaran kamar gagal')</script>";
				redirect('pegawai/halamanPegawai','refresh');
			}else{
				$nama_kamar=$this->input->post('kamar_kosong');
				$this->Kamar_model->addKamarPasien();
				$this->Kamar_model->ubahStatusPasien();
				$rows=$this->Kamar_model->hargaKamar($nama_kamar);
				$harga =  $rows['harga'];
				
				$this->Kamar_model->buatTransaksi($harga);

				echo "<script>alert('pendaftaran kamar telah berhasil')</script>";
				redirect('pegawai/halamanPegawai','refresh');
			}
		}	
	}

	public function addKamarPasien()
	{
		$this->load->model('Kamar_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kamar_kosong', 'Kamar', 'trim|required');
		$this->form_validation->set_rules('nama_pasien', 'Pasien', 'trim|required');


		$data['kamar']=$this->Kamar_model->kamarKosong();

		//$this->load->view('pegawai/daftar_kamar',$data);
		if(!$data['kamar']){
			echo "<script>alert('Seluruh Kamar Telah Terpakai')</script>";
			redirect('pasien/kamar','refresh');
		}else {
			if ($this->form_validation->run() === false) {
				echo "<script>alert('pendaftaran kamar gagal')</script>";
				redirect('pasien/kamar','refresh');
			}else{
				$nama_kamar=$this->input->post('kamar_kosong');
				$this->Kamar_model->addKamarPasien();
				$this->Kamar_model->ubahStatusPasien();
				$rows=$this->Kamar_model->hargaKamar($nama_kamar);
				$harga =  $rows['harga'];
				$this->Kamar_model->buatTransaksi($harga);
				echo "<script>alert('pendaftaran kamar telah berhasil')</script>";
				redirect('pasien/kamar','refresh');
			}
		}	
	}

}

/* End of file PesanKamar.php */
/* Location: ./application/controllers/PesanKamar.php */