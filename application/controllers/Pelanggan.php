<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pelanggan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_pelanggan');
        if ($id == '') {
            $transactions = $this->db->get('pelanggan')->result();
        } else {
            $this->db->where('id_pelanggan', $id);
            $transactions = $this->db->get('pelanggan')->result();
        }
        $this->response($transactions, 200);
    }

    function index_post()
    {
        $data = array(
            'nama'          => $this->post('nama'),
            'nomor_telepon'         => $this->post('nomor_telepon'),
            'alamat'         => $this->post('alamat'),
            'username'         => $this->post('username'),
            'password'         => $this->post('password'),
        );
        $insert = $this->db->insert('pelanggan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_pelanggan');
        $data = array(
            'nama'          => $this->put('nama'),
            'nomor_telepon'         => $this->put('nomor_telepon'),
            'alamat'         => $this->put('alamat'),
            'username'         => $this->put('username'),
            'password'         => $this->put('password'),
        );
        $this->db->where('id_pelanggan', $id);
        $update = $this->db->update('pelanggan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id_pelanggan');
        $this->db->where('id_pelanggan', $id);
        $delete = $this->db->delete('pelanggan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
