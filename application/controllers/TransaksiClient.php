<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TransaksiClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/tugasbesar/transaksi";
    }

    public function index()
    {
        $data['transaksi'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Transaksi";
        $this->load->view('header', $data, FALSE);
        $this->load->view('transaksi/index', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post()
    {
        $this->API2 = "http://localhost/tugasbesar/menu";
        $data['menu'] = json_decode($this->curl->simple_get($this->API2));
        $this->API3 = "http://localhost/tugasbesar/pelanggan";
        $data['pelanggan'] = json_decode($this->curl->simple_get($this->API3));
        $data['title'] = "Tambah Data Transaksi";
        $this->load->view('header', $data, FALSE);
        $this->load->view('transaksi/post', $data, FALSE);
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
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Transaksi Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Transaksi Gagal Ditambahkan');
        }
        redirect('transaksiclient');
    }

    public function put()
    {
        $params = array('id_transaksi' =>  $this->uri->segment(3));
        $this->API2 = "http://localhost/tugasbesar/menu";
        $data['menu'] = json_decode($this->curl->simple_get($this->API2));
        $this->API3 = "http://localhost/tugasbesar/pelanggan";
        $data['pelanggan'] = json_decode($this->curl->simple_get($this->API3));
        $data['transaksi'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Transaksi";
        $this->load->view('header', $data, FALSE);
        $this->load->view('transaksi/put', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function put_process()
    {
        $data = array(
            'id_transaksi'          => $this->input->post('id_transaksi'),
            'id_menu'          => $this->input->post('id_menu2'),
            'id_pelanggan'         => $this->input->post('id_pelanggan2'),
            'jumlah'         => $this->input->post('jumlah'),
            'total'         => $this->input->post('total'),
            'alamat'         => $this->input->post('alamat'),
            'tanggal'       => $this->input->post('tanggal'),
        );
         
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data Transaksi Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data Transaksi Gagal');
        }
        redirect('transaksiclient');
    }

    public function delete()
    {
        $params = array('id_transaksi' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Transaksi Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Transaksi Gagal');
        }
        redirect('transaksiclient');
    }
}
