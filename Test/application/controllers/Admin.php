<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = array(
			'username' => $username,
			'password' => md5($password)
			 );

		$cekLogin = $this->model_login->cek("tb_user", $query)->num_rows();

		if ($cekLogin > 0) {
			$data_session = array(
				'nama'   => $username,
				'status' => 'login'
				 );

			$this->session->set_userdata($data_session);

			redirect('user');
		}else{
			echo "Maaf, Username atau password anda salah";
		}
	}

	public function logout()
	{
		//hapus session
		$this->session->sess_destroy();
		redirect('admin');
	}
}
