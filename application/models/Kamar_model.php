<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

	public function kamarKosong()
	{
		$this->db->where('ketersediaan', 'tersedia');
		$query= $this->db->get('kamar');
		return $query;
	}

	public function updateKamar($id_kamar){
		$data = array(
			'nama_kamar' => $this->input->post('nama'),
			'ketersediaan' => $this->input->post('ketersediaan'),
			'harga' => $this->input->post('harga'),
			'nama_pasien' => $this->input->post('nama_pasien'),
			'tanggal' => $this->input->post('tgl'),
			'foto' => $this->upload->data('file_name'),
			);
		$this->db->where('id_kamar',$id_kamar);
		$this->db->update('kamar', $data);
	}

	public function dataKamar(){

		$query=$this->db->query('select * from kamar');
		return $query->result();
	}

	public function kamar(){

		$query=$this->db->query('select * from kamar');
		return $query->result();
	}

	public function hapusKamar($id_kamar){
		$this->db->where('id_kamar',$id_kamar);
		$this->db->delete('kamar');	
	}

	public function daftarPasien()
	{
		$this->db->where('fk_kamar', NULL);
		$query= $this->db->get('pasien');
		return $query;
	}

	public function addKamarPasien(){
		$kamar=$this->input->post('kamar_kosong');
		$data = array(
			'nama_pasien' => $this->input->post('nama_pasien'),
			'ketersediaan' => 'tidak tersedia',
			'tanggal' => $this->input->post('tgl'),

			);
		$this->db->where('nama_kamar',$kamar);
		$this->db->update('kamar', $data);
	}

	public function hargaKamar($nama_kamar)
	{
		$this->db->select('harga');
		$this->db->where('nama_kamar', $nama_kamar);
		$query= $this->db->get('kamar');;
		return $query->row_array();
	}


	public function buatTransaksi($harga)
	{

		$sekarang= date_create();
		$tgl= $this->input->post('tgl');
		// $harga= $this->input->post('harga');
		$tgl_rawat=date_create($tgl);
		$jmlh =date_diff($tgl_rawat, $sekarang);
		$total = ($harga*($jmlh->days));
		$data = array(
			'jumlah' => $total,
			'tanggal' => $this->input->post('tgl'),
			'fk_pasien' => $this->input->post('nama_pasien'),
			);
		$this->db->insert('transaksi', $data);
		
	}

	public function ubahStatusPasien(){
		$nama_pasien=$this->input->post('nama_pasien');
		$data = array(
			'fk_kamar' => $this->input->post('kamar_kosong'),
			);
		$this->db->where('nama_pasien',$nama_pasien);
		$this->db->update('pasien', $data);
	}
	
	public function ubahStatusKamar(){
		$nama_pasien=$this->input->post('nama_pasien');
		$data = array(
			'ketersediaan' => 'tersedia',
			'nama_pasien' => NULL,
			);
		$this->db->where('nama_pasien',$nama_pasien);
		$this->db->update('kamar', $data);
	}


	public function tambahKamar()
	{
		$data = array(
			'id_kamar' => $this->input->post('id'),
			'nama_kamar' => $this->input->post('nama'),
			'ketersediaan' => 'tersedia',
			'harga' => $this->input->post('harga'),
			'foto' => $this->upload->data('file_name'),
			);
		$this->db->insert('kamar', $data);
		
	}

	public function getDataPasien($username)
	{
		$this->db->where('username', $username);
		$this->db->where('fk_kamar', NULL);
		$query= $this->db->get('pasien');
		return $query;
	}

	public function dataKamarById($id_kamar){
		$this->db->where('id_kamar', $id_kamar);
		$query=$this->db->get('kamar');
		return $query->result();
	}
}

/* End of file Kamar_model.php */
/* Location: ./application/models/Kamar_model.php */