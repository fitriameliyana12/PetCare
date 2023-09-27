<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PetcareClient2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/tugasbesar/petcare";
    }

    public function index()
    {
        $data['menu'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Data Pengunjung Petcare";
        $this->load->view('header', $data, FALSE);
        $this->load->view('user/index', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    // public function post()
    // {
    //     $data['title'] = "Tambah Data Menu";
    //     $this->load->view('header', $data, FALSE);
    //     $this->load->view('menu/post', $data, FALSE);
    //     $this->load->view('footer', $data, FALSE);
    // }

    // public function post_process()
    // {
    //     $data = array(
    //         'nama_pemilik'          => $this->input->post('nama_pemilik'),
    //         'nama_hewan'         => $this->input->post('nama_hewan'),
    //         'jenis_hewan'         => $this->input->post('jenis_hewan'),
    //         'alamat'         => $this->input->post('alamat'),
    //         'telepon'         => $this->input->post('telepon'),
    //         'harga'         => $this->input->post('harga'),
    //         'jumlah_hari'         => $this->input->post('jumlah_hari'),
    //         'bayar'         => $this->input->post('bayar'),
    //     );
    //     $insert =  $this->curl->simple_post($this->API, $data);
    //     if ($insert) {
    //         $this->session->set_flashdata('result', 'Data Menu Berhasil Ditambahkan');
    //     } else {
    //         $this->session->set_flashdata('result', 'Data Menu Gagal Ditambahkan');
    //     }
    //     redirect('petcareClient');
    // }

    // public function put()
    // {
    //     $params = array('id' =>  $this->uri->segment(3));
    //     $data['menu'] = json_decode($this->curl->simple_get($this->API, $params));
    //     $data['title'] = "Edit Data Menu";
    //     $this->load->view('header', $data, FALSE);
    //     $this->load->view('menu/put', $data, FALSE);
    //     $this->load->view('footer', $data, FALSE);
    // }

    // public function put_process()
    // {
    //     $data = array(
    //         'id' => $this->input->post('id'),
    //         'nama_pemilik'          => $this->input->post('nama_pemilik'),
    //         'nama_hewan'         => $this->input->post('nama_hewan'),
    //         'jenis_hewan'         => $this->input->post('jenis_hewan'),
    //         'alamat'         => $this->input->post('alamat'),
    //         'telepon'         => $this->input->post('telepon'),
    //         'harga'         => $this->input->post('harga'),
    //         'jumlah_hari'         => $this->input->post('jumlah_hari'),
    //         'bayar'         => $this->input->post('bayar'),
    //     );
         
    //     $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
    //     if ($update) {
    //         $this->session->set_flashdata('result', 'Update Data Menu Berhasil');
    //     } else {
    //         $this->session->set_flashdata('result', 'Update Data Menu Gagal');
    //     }
    //     redirect('petcareClient');
    // }

    // public function delete()
    // {
    //     $params = array('id' =>  $this->uri->segment(3));
    //     $delete =  $this->curl->simple_delete($this->API, $params);
    //     if ($delete) {
    //         $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
    //     } else {
    //         $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
    //     }
    //     redirect('petcareClient');
    // }
}
