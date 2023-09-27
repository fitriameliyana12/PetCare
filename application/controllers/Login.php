<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('curl');
		$this->load->model('login_model');
	}

	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('header', $data, FALSE);
		$this->load->view('login/index', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
	}

	public function log_process()
	{
		$user = $this->input->post('user');
		$password = $this->input->post('password');
		$check = $this->login_model->login($user, $password);
		// if ($check) {
		// 	foreach ($check as $rows) {
		// 		$this->session->set_userdata('id', $rows->id);
		// 		$this->session->set_userdata('username', $rows->username);
		// 		$this->session->set_userdata('level', 'user');
		// 		redirect('PetcareClient2');
		// 	}
		// } elseif ($user == 'admin' && $password == 'admin') {
		// 	$this->session->set_userdata('username', 'admin');
		// 	$this->session->set_userdata('level', 'admin');
		// 	redirect('PetcareClient');
		// } else {
		// 	$this->session->set_flashdata('result', 'Login gagal');
		// 	redirect('login');
		// }
		if($check){
			foreach($check as $rows){
				if($rows->level == "user"){
				$this->session->set_userdata('level', 'user');
		 		redirect('PetcareClient2');
				}elseif($rows->level == "admin"){
				$this->session->set_userdata('level', 'admin');
				redirect('AdminClient');
				}
			}
		}else{
			$this->session->set_flashdata('result', 'Login gagal');
			redirect('login');
			
		}
	}

	public function reg()
	{
		$data['title'] = 'Registrasi';
		$this->load->view('header', $data, FALSE);
		$this->load->view('login/registrasi', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
	}

	public function reg_process()
	{
		$this->API = "http://localhost/tugasbesar/user";
		$data = array(
			'nama'          => $this->input->post('nama'),
			'nomor_telepon'         => $this->input->post('nomor_telepon'),
			// 'alamat'         => $this->input->post('alamat'),
			'username'         => $this->input->post('username'),
			'password'         => $this->input->post('password'),
		);

		$update =  $this->curl->simple_post($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
		if ($update) {
			$this->session->set_flashdata('result', 'Registrasi Berhasil');
		} else {
			$this->session->set_flashdata('result', 'Registrasi Gagal');
		}
		redirect('login');
	}

	public function out()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file Home.php */
