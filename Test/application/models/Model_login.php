<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	

	//fungsi cek, mengambil username dan password pd tabel
	public function cek($table, $query)
	{
		return $this->db->get_where($table,$query) ;
		
	}

	public function tampil()
	{
		$tampil = $this->db->get('tb_user');

		if ($tampil->num_rows() >0)
		{
			foreach ($tampil->result() as $data) {
				$user[]=$data;
			}
			return $user;

		}
	}

	public function add($save)
	{
		$this->db->insert('tb_user', $save);
	}

	public function get_user_id($id_user)
	{
		$this->db->from('tb_user');
		$this->db->where('id_user',$id_user);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function save_edit($save,$id_user)
	{
		$this->db->where('id_user',$id_user);
		$this->db->update('tb_user',$save);
	}

}