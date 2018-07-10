<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Function_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function tampilUser($username)
	{
		 $this->db->select('*');
		 $this->db->from('user');
		 $this->db->join('pegawai','user.username=pegawai.username');
		 $this->db->where('user.username', $username);
		 $query = $this->db->get();
		 return $query->row_array();
	}
	
	public function tampilPasien($username)
	{
		 $this->db->select('*');
		 $this->db->from('user');
		 $this->db->join('pasien','user.username=pasien.username');
		 $this->db->where('user.username', $username);
		 $query = $this->db->get();
		 return $query->row_array();
	}

	public function kamar(){

		//$query=$this->db->query('select * from pegawai');
		$this->db->select('*');
		$this->db->from('kamar');
		$query = $this->db->get();
		return $query->result();
	}


	public function tampilDataDetailsPasien()
	{
		$query= $this->db->query('select * from pasien');
		return $query->result_array();
	}

	public function detailsPasien()
	{
		 $this->db->select('*');
		 $this->db->from('user');
		 $this->db->join('pasien','user.username=pasien.username');
		 $this->db->where('id_pasien', $this->uri->segment(3));
		 $query = $this->db->get();
		 return $query->row_array();
	}

	public function detailsPasien1()
	{
		 $this->db->select('*');
		 $this->db->from('transaksi');
		 $this->db->join('pasien','transaksi.fk_pasien=pasien.username');
		 $this->db->where('id_pasien', $this->uri->segment(3));
		 $query = $this->db->get();
		 return $query->row_array();
	}

	public function insertDataPegawai()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'nama_pegawai' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'foto' => $this->upload->data('file_name'),
			);
		$this->db->insert('pegawai', $data);
		
	}

	
	public function insertDataPasien()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'nama_pasien' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no'),
			'alamat' => $this->input->post('alamat'),
			//'fk_kamar'=> $this->input->post('fk_kamar'),
			'foto' => $this->upload->data('file_name'),
			);
		$this->db->insert('pasien', $data);
		
	}

	public function createUser()
	{
		$password=$this->input->post('password');
		$encrypt=md5($password);
		$data = array(
			'username' => $this->input->post('username'),
			'level' => $this->input->post('akses'),
			'password' => $encrypt,
			);
		$this->db->insert('user', $data);
		
	}

	public function updatePasien($id){
		$data = array(
			'nama_pasien' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no'),
			'foto' => $this->upload->data('file_name'),
			);
		$this->db->where('id_pasien',$id);
		$this->db->update('pasien', $data);
	}

	public function seleksiPasien($id)
	{
		$this->db->where('id_pasien', $id);
		$query= $this->db->get('pasien');
		return $query->result();
	}

	public function hapusPasien($id){
		$this->db->where('username',$id);
		$this->db->delete('user');	
	}

	public function tampilDataKamar(){
		$query=$this->db->get('kamar');
		 if($query->num_rows()>0){
            return $query->result();
        }
	}

	public function dataKamar(){
		$query=$this->db->query('select * from kamar');
		return $query->result();
	}

	public function jumlahKamar(){
		$kamar=$this->db->get('kamar');
		$jumlah=$kamar->num_rows();
		return $jumlah;
	}

	public function tampilDataTransaksi(){
		$query=$this->db->get('transaksi');
		return $query->result();
	}



	public function totalPasien(){
		$query= $this->db->query('select * from pasien');
		$total= $query->num_rows();
		return $total;
	}

	public function tambahKamar()
    {
        $data= $this->input->post();
        $this->db->insert('kamar', $data);
    }

    public function updateKamar($id)
    {
        $this->db->where('id_kamar', $id);
        $data= $this->input->post();
        $this->db->update('kamar',$data);
    }

    public function deleteKamar($id)
    {
        $this->db->where('id_kamar', $id);
        $this->db->delete('kamar');
    }

    public function tampilPasienRawatInap()
	{
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('kamar','pasien.nama_pasien=kamar.nama_pasien');
		$query = $this->db->get();
		return $query->result();
	}

	public function kamarRawat(){
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->join('kamar','pasien.nama_pasien=kamar.nama_pasien');
		$query = $this->db->get();
		return $query->result();

	}

	public function kamarTersedia(){
		$this->db->select('*');
		$this->db->from('kamar');
		$this->db->where('nama_pasien', ' ');
		$query = $this->db->get();
		return $query->result();
	
	}


}

/* End of file Function_model.php */
/* Location: ./application/models/Function_model.php */