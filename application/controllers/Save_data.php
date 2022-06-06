<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Save_data extends CI_Controller
{
    public function data_telor()
    {
        $data = [
            'jenis' => $this->input->get('jenis'),
            'berat' => $this->input->get('berat'),
            'ukuran' => $this->input->get('ukuran')
        ];
        $this->db->insert('tb_monitoring', $data);
        echo "Data Telor berhasil terkirim";
    }
}
