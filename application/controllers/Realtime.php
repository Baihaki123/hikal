<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Realtime extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_hikal', 'hikal');
    }

    public function index()
    {
        $data['page'] = 'realtime';
        $this->load->view('dashboard', $data);
    }

    function ambilData()
    {
        $data = $this->hikal->getData();
        echo json_encode($data);
    }
}
