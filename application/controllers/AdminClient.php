<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('header', $data, FALSE);
        $this->load->view('admin/index', $data, FALSE);
        $this->load->view('footer', $data, FALSE);
    }

}
