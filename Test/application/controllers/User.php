<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');

		if($this->session->userdata('status') != 'login'){
			redirect('admin');
		}
	}
	public function index()
	{
		$this->load->view('v_dashboard');	
		
	}

	public function show()
	{
		$data['user']= $this->model_login->tampil();
		$this->load->view('v_user',$data);

	}

	public function create()
	{
		$save = array(
			'nama' 	   => $this->input->post('nama') ,
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$this->model_login->add($save);	
		redirect('user/show');
	}

	public function delete($id_user)
	{
		$this->db->where('id_user',$id_user);
		$this->db->delete('tb_user');
		redirect('user/show');
	}

	public function edit_user()
	{
		$id_user = $this->input->get('id_user');
		$data = $this->model_login->get_user_id($id_user);

		foreach ($data as $data) {
			echo '<div id="id_user">'.$data->id_user.'</div>';
			echo '<div id="nama">'.$data->nama.'</div>';
			echo '<div id="username">'.$data->username.'</div>';
		}
	}

	public function simpan_edit_user()
	{
		$id_user = $this->input->post('id_user');
		$save = array(
 			'nama' 	   => $this->input->post('nama') ,
			'username' => $this->input->post('username'),
		);

		$this->model_login->save_edit($save,$id_user);	
		redirect('user/show');
	}
	
}