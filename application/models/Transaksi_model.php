<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

	}

	public function jumlahTransaksi()
	{
		$transaksi=$this->db->get('transaksi');
		$total= $transaksi->num_rows();
		return $total;		
	}

	public function tampilTransaksi($id_transaksi)
	{

		$this->db->where('id_transaksi', $id_transaksi);
		$query=$this->db->get('transaksi');
		return $query->result();		
	}

	public function updateTransaksi($id_transaksi){

		$data = array(
			'jumlah' => $this->input->post('jumlah'),
			'tanggal' => $this->input->post('tgl'),
			);
		$this->db->where('id_transaksi',$id_transaksi);
		$this->db->update('transaksi', $data);
	}

	public function deleteTransaksi($id_transaksi){
		$this->db->where('id_transaksi',$id_transaksi);
		$this->db->delete('transaksi');	
	}


	public function tampilBiayaKamar($id_pasien)
	{
		$this->db->where('fk_pasien', $id_pasien);
		$query= $this->db->get('transaksi');
		//$this->db->join('*', 'user.username = pegawai.username', 'inner');
		return $query->result();	
	}

	public function nota($id_pasien)
	{
		 $this->db->select('*');
		 $this->db->from('transaksi');
		 $this->db->join('pasien','pasien.username=transaksi.fk_pasien');
		 $query = $this->db->get();
		 return $query->result();
	}

	public function transaksiNonTunai($id){
		$total=$this->input->post('total');
		$jumlah=$this->input->post('jumlah');
		$sisa=$total-$jumlah;
		$data = array(
			'fk_pasien' => $this->input->post('id_pasien'),
			'jumlah' => $sisa,
			);
		$this->db->where('fk_pasien',$id);
		$this->db->update('transaksi', $data);
	}

	public function refreshTransaksi($id_pasien)
	{
		
		$sekarang= date_create();
		$tgl= $this->input->post('tgl');
		$tgl_rawat=date_create($tgl);
		$jmlh =date_diff($tgl_rawat, $sekarang);
		$total = (50000*($jmlh->days));
		$data = array(
			'jumlah' => $total,
			'tanggal' => $this->input->post('tgl'),
			'fk_pasien' => $this->input->post('nama_pasien'),
			);
		$this->db->insert('transaksi', $data);
		
	}

	public function hapusTransaksi($id_pasien)
	{
		$this->db->where('fk_pasien', $id_pasien);
		$this->db->join('pasien', 'transaksi.fk_pasien = pasien.username', 'inner');
		$this->db->delete('transaksi');
	}

	public function tagihan()
	{

		$this->db->select('*');
		$query=$this->db->get('transaksi');
		return $query->result();		
	}


	public function updatePerHari()
	{	
			
	}

	// public function paymentPasien($id)
	// {
	// 	$tagihan=$this->input->post('jumlah');
	// 	$jumlah=$
	// 	$total = ($tagihan-jumlahTransaksi());

	// 	$object = array(		
	// 		'jumlah' => $total,
	// 	);
	// 	$this->db->where('id_pasien', $id);
	// 	$this->db->update('transaksi', $object);

	// }


}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */