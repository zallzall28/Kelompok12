<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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

	}

	public function biayaKamar()
	{		
		//echo $id_pasien;
		$this->load->model('Transaksi_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		//$id=$this->input->post('id_pasien');
		$id_pasien=$this->input->post('id_pasien');

		$data['total']=$this->Transaksi_model->tampilBiayaKamar($id_pasien);
			if(!$data['total']){
				echo "<script>alert('pasien tidak valid')</script>";
				redirect('pegawai/halamanPegawai','refresh');
			}else{
				//$this->Transaksi_model->refreshTransaksi($id_pasien);
				$this->load->view('pegawai/pembayaran',$data);
		}
	}

	public function bayarKamar()
	{		
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('jumlah', 'Masukkan Jumlah Nominal', 'trim|required');
	
		$this->load->model('Transaksi_model');
		$this->load->model('Kamar_model');
		//$uang=$this->input->post('jumlah');
		$id=$this->input->post('id_pasien');
		$this->Transaksi_model->transaksiNonTunai($id);
	
		if ($this->form_validation->run() == FALSE) {
			echo "Pembayaran gagal";
		} else {
			$nama_pasien=$this->input->post('nama_pasien');
			$data['jml']=$this->input->post('jumlah');
			//$data['total']=$this->Transaksi_model->tampilBiayaKamar($id_pasien);
			$data['total']=$this->Transaksi_model->nota($nama_pasien);

			$total=$this->input->post('total');
			$jumlah=$this->input->post('jumlah');

			if($jumlah>=$total){
				$this->Transaksi_model->hapusTransaksi($nama_pasien);
				$this->Kamar_model->ubahStatusPasien(); 
				$this->Kamar_model->ubahStatusKamar();
				$this->load->view('pegawai/nota_pembayaran',$data);
			}else{
				$this->load->view('pegawai/nota_pembayaran',$data);
			}
		}
	}

	public function cetakNota(){

		$this->load->library('pdf');
		$this->load->model('Transaksi_model');
			$id_pasien=$this->input->post('id_pasien');
			$data['jml']=$this->input->post('jumlah');
			$data['total']=$this->Transaksi_model->tampilBiayaKamar($id_pasien);
			$this->load->view('pegawai/nota_pembayaran',$data);
	}

	public function updateTransaksi($id_transaksi){
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('id', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nama', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Nomor Hp', 'trim|required');

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

		$data['transaksi']=$this->Transaksi_model->tampilTransaksi($id_transaksi);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pegawai/update_transaksi', $data);
		}else{
			$this->Transaksi_model->updateTransaksi($id_transaksi);
			echo "<script>alert('Edit Transaksi Telah Berhasil')</script>";
			redirect('pegawai/viewTransaksi','refresh');
		}
	}

	public function hapusTransaksi($id_transaksi)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$session_data= $this->session->userdata('logged_in');
		$data['username']=$session_data['username'];
		$data['level']=$session_data['level'];
		$this->load->model('Transaksi_model');
		$username=$session_data['username'];
		

		$this->Transaksi_model->deleteTransaksi($id_transaksi);
		echo "<script>alert('Data Transaksi Berhasil Dihapus')</script>";
		redirect('pegawai/viewTransaksi','refresh');

	}



	
	// public function payment($id)
	// {
	// 	$this->load->helper('url','form');
	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules('jumlah', 'Masukkan Jumlah Nominal', 'trim|required');
	// 	$this->load->model('Transaksi_model');

	// 	$data['pasien']=$this->Transaksi_model->paymentPasien($id);

	// 		if ($this->form_validation->run() == FALSE) {
	// 			echo "pembayaran gagal";
	// 		} else {
	// 			echo "pembayaran telah berhasil";
	// 		}
	// }

		
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */