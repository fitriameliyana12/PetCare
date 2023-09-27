<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MenuClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/tugasbesar/menu";
    }

    public function index()
    {
        $data['menu'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Menu";
        $this->load->view('header', $data, FALSE);
        $this->load->view('menu/index', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post()
    {
        $data['title'] = "Tambah Data Menu";
        $this->load->view('header', $data, FALSE);
        $this->load->view('menu/post', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post_process()
    {
        $data = array(
            'nama'          => $this->input->post('nama'),
            'kategori'         => $this->input->post('kategori'),
            'deskripsi'         => $this->input->post('deskripsi'),
            'harga'         => $this->input->post('harga'),
            'stock'         => $this->input->post('stock'),
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Menu Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Menu Gagal Ditambahkan');
        }
        redirect('menuclient');
    }

    public function put()
    {
        $params = array('id_menu' =>  $this->uri->segment(3));
        $data['menu'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Menu";
        $this->load->view('header', $data, FALSE);
        $this->load->view('menu/put', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function put_process()
    {
        $data = array(
            'id_menu'          => $this->input->post('id_menu'),
            'nama'          => $this->input->post('nama'),
            'kategori'         => $this->input->post('kategori'),
            'deskripsi'         => $this->input->post('deskripsi'),
            'harga'         => $this->input->post('harga'),
            'stock'         => $this->input->post('stock'),
        );
         
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data Menu Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data Menu Gagal');
        }
        redirect('menuclient');
    }

    public function delete()
    {
        $params = array('id_menu' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
        }
        redirect('menuclient');
    }
}
