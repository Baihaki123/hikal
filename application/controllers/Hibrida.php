<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hibrida extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_hikal', 'hikal');
    }

    public function besar()
    {
        $data = [
            "page"              => "hibrida/data_hibrida_besar",
            "hibrida_besar"     => $this->hikal->data_hibrida_besar(),
            "option_tanggal"    => $this->hikal->option_tanggal_hibrida_besar(),
            "option_bulan"      => $this->hikal->option_bulan_hibrida_besar(),
            "option_tahun"      => $this->hikal->option_tahun_hibrida_besar(),
            "tanggal" => !empty($this->input->post('tanggal')) ? $this->input->post('tanggal') : null,
            "bulan" => !empty($this->input->post('bulan')) ? $this->input->post('bulan') : null,
            "tahun" => !empty($this->input->post('tahun')) ? $this->input->post('tahun') : null
        ];
        $this->load->view('dashboard', $data);
    }

    public function kecil()
    {
        $data = [
            "page"              => "hibrida/data_hibrida_kecil",
            "hibrida_kecil"     => $this->hikal->data_hibrida_kecil(),
            "option_tanggal"    => $this->hikal->option_tanggal_hibrida_kecil(),
            "option_bulan"      => $this->hikal->option_bulan_hibrida_kecil(),
            "option_tahun"      => $this->hikal->option_tahun_hibrida_kecil(),
            "tanggal" => !empty($this->input->post('tanggal')) ? $this->input->post('tanggal') : null,
            "bulan" => !empty($this->input->post('bulan')) ? $this->input->post('bulan') : null,
            "tahun" => !empty($this->input->post('tahun')) ? $this->input->post('tahun') : null
        ];
        $this->load->view('dashboard', $data);
    }

    public function cari_pdf_besar()
    {
        $this->load->model('M_hikal', 'rekap_data');

        $data = [
            "page"              => "hibrida/data_hibrida_besar",
            "tanggal" => $this->input->post('tanggal'),
            "bulan" => $this->input->post('bulan'),
            "tahun" => $this->input->post('tahun'),
            "hibrida_besar" => $this->rekap_data->get_cari_tanggal_hibrida_besar($this->input->post('tanggal'), $this->input->post('bulan'), $this->input->post('tahun'))
        ];
        $this->load->view('dashboard', $data);
    }

    public function cetak_pdf_besar()
    {
        $this->load->model('M_hikal', 'rekap_data');
        $tanggal = $this->input->post('tanggal');
        // echo $tanggal;
        // die;
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['hibrida_besar'] = $this->rekap_data->get_cari_tanggal_hibrida_besar($tanggal, $bulan, $tahun);
        $this->load->library('pdfgenerator');
        $file_pdf = 'rekap hibrida besar';
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->load->view('hibrida/rekap_hibrida_besar', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper_size, $orientation);
        // $this->pdfgenerator->stream('rekap_hibrida_besar.pdf', array('Attachment' => 1));
    }

    public function cari_pdf_kecil()
    {
        $this->load->model('M_hikal', 'rekap_data');

        $data = [
            "page"              => "hibrida/data_hibrida_kecil",
            "tanggal" => $this->input->post('tanggal'),
            "bulan" => $this->input->post('bulan'),
            "tahun" => $this->input->post('tahun'),
            "hibrida_kecil" => $this->rekap_data->get_cari_tanggal_hibrida_kecil($this->input->post('tanggal'), $this->input->post('bulan'), $this->input->post('tahun'))
        ];
        $this->load->view('dashboard', $data);
    }

    public function cetak_pdf_kecil()
    {
        $this->load->model('M_hikal', 'rekap_data');
        $tanggal = $this->input->post('tanggal');
        // echo $tanggal;
        // die;
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['hibrida_kecil'] = $this->rekap_data->get_cari_tanggal_hibrida_kecil($tanggal, $bulan, $tahun);
        $this->load->library('pdfgenerator');
        $file_pdf = 'rekap hibrida kecil';
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->load->view('hibrida/rekap_hibrida_kecil', $data, true);
        $this->pdfgenerator->generate($html, $file_pdf, $paper_size, $orientation);
        // $this->pdfgenerator->stream('rekap_hibrida_besar.pdf', array('Attachment' => 1));
    }

    // public function cetak_pdf_kecil()
    // {
    //     $this->load->model('M_hikal', 'rekap_data');
    //     $tanggal = $this->input->post('tanggal');
    //     $bulan = $this->input->post('bulan');
    //     $tahun = $this->input->post('tahun');
    //     $data['hibrida_kecil'] = $this->rekap_data->get_cari_tanggal_hibrida_kecil($tanggal, $bulan, $tahun);
    //     $this->load->library('pdfgenerator');
    //     $file_pdf = 'rekap hibrida kecil';
    //     $paper_size = 'A4'; // ukuran kertas
    //     $orientation = 'landscape'; //tipe format kertas potrait atau landscape
    //     $html = $this->load->view('hibrida/rekap_hibrida_kecil', $data, true);
    //     $this->pdfgenerator->generate($html, $file_pdf, $paper_size, $orientation);
    //     $this->pdfgenerator->stream('rekap_hibrida_kecil.pdf', array('Attachment' => 0));
    // }
}
