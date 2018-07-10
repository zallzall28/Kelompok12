<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {


public function loginUser($username,$password)
	{
		$this->db->select('id_user,username,password,level');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}

	}

public function registerUser(){

		$password = $this->input->post('password');
		$encrypt=md5($password);
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $encrypt,
			'level' => $this->input->post('level'),
			);
		$this->db->insert('user', $data);
	}

public function daftarPasien(){

		$data = array(
			'username' => $this->input->post('username'),
			'nama_pasien' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'foto' => $this->upload->data('file_name'),
			);
		$this->db->insert('pasien', $data);
	}	



}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */