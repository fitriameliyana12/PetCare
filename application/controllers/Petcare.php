<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Petcare extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $transactions = $this->db->get('petcare')->result();
        } else {
            $this->db->where('id', $id);
            $transactions = $this->db->get('petcare')->result();
        }
        $this->response($transactions, 200);
    }

    function index_post()
    {
        $data = array(
            'nama_pemilik'          => $this->post('nama_pemilik'),
            'nama_hewan'         => $this->post('nama_hewan'),
            'jenis_hewan'         => $this->post('jenis_hewan'),
            'alamat'         => $this->post('alamat'),
            'telepon'         => $this->post('telepon'),
            'harga'         => $this->post('harga'),
            'jumlah_hari'         => $this->post('jumlah_hari'),
            'bayar'         => $this->post('bayar'),
        );
        $insert = $this->db->insert('petcare', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id');
        $data = array(
            'nama_pemilik'          => $this->put('nama_pemilik'),
            'nama_hewan'         => $this->put('nama_hewan'),
            'jenis_hewan'         => $this->put('jenis_hewan'),
            'alamat'         => $this->put('alamat'),
            'telepon'         => $this->put('telepon'),
            'harga'         => $this->put('harga'),
            'jumlah_hari'         => $this->put('jumlah_hari'),
            'bayar'         => $this->put('bayar'),
        );
        $this->db->where('id', $id);
        $update = $this->db->update('petcare', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('petcare');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
