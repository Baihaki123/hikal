<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Save extends CI_Controller
{
    public function kirim()
    {
        $jenis = $this->input->get('jenis');
        $berat = $this->input->get('berat');
        $ukuran = $this->input->get('ukuran');

        $data = [
            'jenis' => $jenis,
            'berat' => $berat,
            'ukuran' => $ukuran
        ];

        if ($jenis == "") {
            echo "Jenis tidak boleh kosong";
        } elseif ($berat == "") {
            echo "Berat tidak boleh kosong";
        } elseif ($ukuran == "") {
            echo "Ukuran tidak boleh kosong";
        } else {
            echo "Data berhasil dikirim";
            $this->db->insert('tb_monitoring', $data);
        }
    }
}
