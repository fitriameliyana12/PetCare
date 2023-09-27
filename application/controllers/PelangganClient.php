<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PelangganClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/tugasbesar/pelanggan";
    }

    public function index()
    {
        $data['pelanggan'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Pelanggan";
        $this->load->view('header', $data, FALSE);
        $this->load->view('pelanggan/index', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post()
    {
        $data['title'] = "Tambah Data Pelanggan";
        $this->load->view('header', $data, FALSE);
        $this->load->view('pelanggan/post', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post_process()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'nomor_telepon'         => $this->input->post('nomor_telepon'),
            'alamat'         => $this->input->post('alamat'),
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Pelanggan Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Pelanggan Gagal Ditambahkan');
        }
        redirect('pelangganclient');
    }

    public function put()
    {
        $params = array('id_pelanggan' =>  $this->uri->segment(3));
        $data['pelanggan'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Pelanggan";
        $this->load->view('header', $data, FALSE);
        $this->load->view('pelanggan/put', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function put_process()
    {
        $data = array(
            'id_pelanggan'          => $this->input->post('id_pelanggan'),
            'nama'          => $this->input->post('nama'),
            'nomor_telepon'         => $this->input->post('nomor_telepon'),
            'alamat'         => $this->input->post('alamat'),
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
        );
         
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data Pelanggan Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data Pelanggan Gagal');
        }
        redirect('pelangganclient');
    }

    public function delete()
    {
        $params = array('id_pelanggan' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Pelanggan Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Pelanggan Gagal');
        }
        redirect('pelangganclient');
    }
}
