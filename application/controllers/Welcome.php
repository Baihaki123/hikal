<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_hikal', 'hikal');
	}

	public function index()
	{
		$data = [
			"page" => "home",
			"hibrida_besar"		=> $this->hikal->hibrida_besar(),
			"hibrida_kecil"		=> $this->hikal->hibrida_kecil(),
			"lokal_besar"		=> $this->hikal->lokal_besar(),
			"lokal_kecil"		=> $this->hikal->lokal_kecil(),
		];
		$this->load->view('dashboard', $data);
	}

	public function grafik_hibrida()
	{
		$this->load->model('M_hikal', 'hibrida');
		$data_tabel = $this->hibrida->get_rekap_hibrida();
		echo json_encode($data_tabel);
	}

	public function grafik_lokal()
	{
		$this->load->model('M_hikal', 'lokal');
		$data_tabel = $this->lokal->get_rekap_lokal();
		echo json_encode($data_tabel);
	}

	function rekap()
	{
		$this->load->model('M_hikal', 'rekap_data');
		$data['page'] = 'backend/grafik_rekap';
		$data['option_tanggal'] = $this->rekap_data->option_tanggal();
		$data['option_bulan'] = $this->rekap_data->option_bulan();
		$data['option_tahun'] = $this->rekap_data->option_tahun();
		$this->load->view('backend/dashboard', $data, FALSE);
	}
}
