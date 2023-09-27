<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Transaksi extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_transaksi');
        $id2 = $this->get('id_pelanggan');
        if ($id == '') {
            $transactions = $this->db->get('transaksi')->result();
        } else {
            $this->db->where('id_transaksi', $id);
            $transactions = $this->db->get('transaksi')->result();
        }
        if ($id2 != '') {
            $this->db->where('id_pelanggan', $id2);
            $transactions = $this->db->get('transaksi')->result();
        }
        $this->response($transactions, 200);
    }

    function index_post()
    {
        $data = array(
            'id_menu'          => $this->post('id_menu'),
            'id_pelanggan'         => $this->post('id_pelanggan'),
            'jumlah'         => $this->post('jumlah'),
            'total'         => $this->post('total'),
            'alamat'         => $this->post('alamat'),
            'tanggal'       => $this->post('tanggal'),
        );
        $insert = $this->db->insert('transaksi', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put()
    {
        $id = $this->put('id_transaksi');
        $data = array(
            'id_menu'          => $this->put('id_menu'),
            'id_pelanggan'         => $this->put('id_pelanggan'),
            'jumlah'         => $this->put('jumlah'),
            'total'         => $this->put('total'),
            'alamat'         => $this->put('alamat'),
            'tanggal'       => $this->put('tanggal'),
        );
        $this->db->where('id_transaksi', $id);
        $update = $this->db->update('transaksi', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete()
    {
        $id = $this->delete('id_transaksi');
        $this->db->where('id_transaksi', $id);
        $delete = $this->db->delete('transaksi');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
