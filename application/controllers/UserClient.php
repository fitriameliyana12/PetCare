<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/tugasbesar/transaksi";
        $this->API2 = "http://localhost/tugasbesar/menu";
        $this->API3 = "http://localhost/tugasbesar/pelanggan";
    }

    public function index()
    {
        $params = array('id_pelanggan' =>  $this->session->userdata('id_pelanggan'));
        $data['transaksi'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['pelanggan'] = json_decode($this->curl->simple_get($this->API3, $params));
        $data['title'] = "Dashboard";
        $this->load->view('header', $data, FALSE);
        $this->load->view('user/index', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function menu(){
        $data['menu'] = json_decode($this->curl->simple_get($this->API2));
        $data['title'] = 'menu';
		$this->load->view('header', $data, FALSE);
		$this->load->view('user/menu', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
    }

    public function order(){
        $data['menu'] = json_decode($this->curl->simple_get($this->API2));
        $data['title'] = 'order';
		$this->load->view('header', $data, FALSE);
		$this->load->view('user/order', $data, FALSE);
		$this->load->view('footer', $data, FALSE);
    }

    public function post_process()
    {
        $data = array(
            'id_menu'          => $this->input->post('id_menu2'),
            'id_pelanggan'         => $this->input->post('id_pelanggan2'),
            'jumlah'         => $this->input->post('jumlah'),
            'total'         => $this->input->post('total'),
            'alamat'         => $this->input->post('alamat'),
            'tanggal'       => $this->input->post('tanggal'),
        );

        $update =  $this->curl->simple_post($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Order Menu Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Order Menu Gagal');
        }
        redirect('userclient');
    }

}
