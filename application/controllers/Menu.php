<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Pet extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_menu');
        if ($id == '') {
            $transactions = $this->db->get('menu')->result();
        } else {
            $this->db->where('id_menu', $id);
            $transactions = $this->db->get('menu')->result();
        }
        $this->response($transactions, 200);
    }

    function index_post()
    {
        $data = array(
            'nama'          => $this->post('nama'),
            'kategori'         => $this->post('kategori'),
            'deskripsi'         => $this->post('deskripsi'),
            'harga'         => $this->post('harga'),
            'stock'         => $this->post('stock'),
        );
        $insert = $this->db->insert('menu', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_menu');
        $data = array(
            'nama'          => $this->put('nama'),
            'kategori'         => $this->put('kategori'),
            'deskripsi'         => $this->put('deskripsi'),
            'harga'         => $this->put('harga'),
            'stock'         => $this->put('stock'),
        );
        $this->db->where('id_menu', $id);
        $update = $this->db->update('menu', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id_menu');
        $this->db->where('id_menu', $id);
        $delete = $this->db->delete('menu');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
