<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class loginUser extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $transactions = $this->db->get('user')->result();
        } else {
            $this->db->where('id', $id);
            $transactions = $this->db->get('user')->result();
        }
        $this->response($transactions, 200);
    }

    function index_post()
    {
        $data = array(
            'username'          => $this->post('username'),
            'password'         => $this->post('password'),
            'level'         => $this->post('level'),
        );
        $insert = $this->db->insert('user', $data);
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
            'username'          => $this->put('username'),
            'password'         => $this->put('password'),
            'level'         => $this->put('level'),
        );
        $this->db->where('id', $id);
        $update = $this->db->update('user', $data);
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
        $delete = $this->db->delete('user');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
