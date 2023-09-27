<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginUserClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/tugasbesar/loginUser";
    }

    public function index()
    {
        $data['menu'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Data User";
        $this->load->view('header', $data, FALSE);
        $this->load->view('user/adminPassword', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post()
    {
        $data['title'] = "Tambah Data User";
        $this->load->view('header', $data, FALSE);
        $this->load->view('user/postRegis', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function post_process()
    {
        $data = array(
            'username'          => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'level'         => $this->input->post('level'),
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Gagal Ditambahkan');
        }
        redirect('login');
    }

    public function put()
    {
        $params = array('id' =>  $this->uri->segment(3));
        $data['menu'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data User";
        $this->load->view('header', $data, FALSE);
        $this->load->view('user/updatePassword', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

    public function put_process()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'username'          => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'level'         => $this->input->post('level'),
        );
         
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data Gagal');
        }
        redirect('loginuserclient');
    }

    public function delete()
    {
        $params = array('id' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Gagal');
        }
        redirect('loginuserclient');
    }
}
