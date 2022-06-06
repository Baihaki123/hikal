<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_hikal', 'hikal');
    }

    public function big()
    {
        $data = [
            "page"              => "lokal/data_lokal_besar",
            "lokal_besar"       => $this->hikal->data_lokal_besar(),
            "option_tanggal"    => $this->hikal->option_tanggal_lokal_besar(),
            "option_bulan"      => $this->hikal->option_bulan_lokal_besar(),
            "option_tahun"      => $this->hikal->option_tahun_lokal_besar(),
        ];
        $this->load->view('dashboard', $data);
    }

    public function small()
    {
        $data = [
            "page"              => "lokal/data_lokal_kecil",
            "lokal_kecil"       => $this->hikal->data_lokal_kecil(),
            "option_tanggal"    => $this->hikal->option_tanggal_lokal_kecil(),
            "option_bulan"      => $this->hikal->option_bulan_lokal_kecil(),
            "option_tahun"      => $this->hikal->option_tahun_lokal_kecil(),
        ];
        $this->load->view('dashboard', $data);
    }

    public function cetak_pdf_besar()
    {
        $this->load->model('M_hikal', 'rekap_data');
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['lokal_besar'] = $this->rekap_data->get_cari_tanggal_lokal_besar($tanggal, $bulan, $tahun);
        $this->load->library('pdfgenerator');
        $file_pdf = 'rekap lokal besar';
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->load->view('lokal/rekap_lokal_besar', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper_size, $orientation);
        $this->pdfgenerator->stream('rekap_lokal_besar.pdf', array('Attachment' => 0));
    }

    public function cetak_pdf_kecil()
    {
        $this->load->model('M_hikal', 'rekap_data');
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['lokal_kecil'] = $this->rekap_data->get_cari_tanggal_lokal_kecil($tanggal, $bulan, $tahun);
        $this->load->library('pdfgenerator');
        $file_pdf = 'rekap lokal kecil';
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->load->view('lokal/rekap_lokal_kecil', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper_size, $orientation);
        $this->pdfgenerator->stream('rekap_lokal_kecil.pdf', array('Attachment' => 0));
    }
}
