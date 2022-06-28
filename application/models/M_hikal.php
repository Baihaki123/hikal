<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_hikal extends CI_Model
{

    // =========== AJAX REAL TIME ===========
    function getData()
    {
        $this->db->select('jenis, berat, ukuran, waktu');
        $this->db->from('tb_monitoring');
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    // ========= Jumlah HIBRIDA BESAR =========
    public function hibrida_besar()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="hibrida"');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    // ========= DATA Rekap HIBRIDA BESAR =========
    public function data_hibrida_besar()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="hibrida"');
        $query = $this->db->get()->result();
        return $query;
    }

    // ========= OPTION TANGGAL HIBRIDA BESAR =========
    function option_tanggal_hibrida_besar()
    {
        $this->db->select('DATE_FORMAT(waktu, "%d") AS tanggal');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="hibrida"');
        $this->db->order_by('DAY(waktu)');
        $this->db->group_by('DAY(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION BULAN HIBRIDA BESAR =========
    function option_bulan_hibrida_besar()
    {
        $this->db->select('MONTH(waktu) AS bulan');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="hibrida"');
        $this->db->order_by('MONTH(waktu)');
        $this->db->group_by('MONTH(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION TAHUN HIBRIDA BESAR =========
    function option_tahun_hibrida_besar()
    {
        $this->db->select('YEAR(waktu) AS tahun');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="hibrida"');
        $this->db->order_by('YEAR(waktu)');
        $this->db->group_by('YEAR(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION FILTER HIBRIDA BESAR =========
    function get_cari_tanggal_hibrida_besar($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="hibrida"');
        $this->db->like('DATE_FORMAT(waktu, "%d")', $tanggal);
        $this->db->like('MONTH(waktu)', $bulan);
        $this->db->like('YEAR(waktu)', $tahun);
        return $this->db->get()->result();
    }

    // ========= Jumlah HIBRIDA KECIL =========
    public function hibrida_kecil()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="hibrida"');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    // ========= DATA Rekap HIBRIDA KECIL =========
    public function data_hibrida_kecil()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="hibrida"');
        $query = $this->db->get()->result();
        return $query;
    }

    // ========= OPTION TANGGAL HIBRIDA KECIL =========
    function option_tanggal_hibrida_kecil()
    {
        $this->db->select('DATE_FORMAT(waktu, "%d") AS tanggal');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="hibrida"');
        $this->db->order_by('DAY(waktu)');
        $this->db->group_by('DAY(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION BULAN HIBRIDA KECIL =========
    function option_bulan_hibrida_kecil()
    {
        $this->db->select('MONTH(waktu) AS bulan');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="hibrida"');
        $this->db->order_by('MONTH(waktu)');
        $this->db->group_by('MONTH(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION TAHUN HIBRIDA KECIL =========
    function option_tahun_hibrida_kecil()
    {
        $this->db->select('YEAR(waktu) AS tahun');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="hibrida"');
        $this->db->order_by('YEAR(waktu)');
        $this->db->group_by('YEAR(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION FILTER HIBRIDA KECIL =========
    function get_cari_tanggal_hibrida_kecil($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="hibrida"');
        $this->db->like('DATE_FORMAT(waktu, "%d")', $tanggal);
        $this->db->like('MONTH(waktu)', $bulan);
        $this->db->like('YEAR(waktu)', $tahun);
        return $this->db->get()->result();
    }

    // ========= Jumlah LOKAL BESAR =========
    public function lokal_besar()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="lokal"');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    // ========= DATA Rekap LOKAL BESAR =========
    public function data_lokal_besar()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="lokal"');
        $query = $this->db->get()->result();
        return $query;
    }

    // ========= OPTION TANGGAL LOKAL BESAR =========
    function option_tanggal_lokal_besar()
    {
        $this->db->select('DATE_FORMAT(waktu, "%d") AS tanggal');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="lokal"');
        $this->db->order_by('DAY(waktu)');
        $this->db->group_by('DAY(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION BULAN LOKAL BESAR =========
    function option_bulan_lokal_besar()
    {
        $this->db->select('MONTH(waktu) AS bulan');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="lokal"');
        $this->db->order_by('MONTH(waktu)');
        $this->db->group_by('MONTH(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION TAHUN LOKAL BESAR =========
    function option_tahun_lokal_besar()
    {
        $this->db->select('YEAR(waktu) AS tahun');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="lokal"');
        $this->db->order_by('YEAR(waktu)');
        $this->db->group_by('YEAR(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION FILTER LOKAL BESAR =========
    function get_cari_tanggal_lokal_besar($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="besar" and jenis="lokal"');
        $this->db->like('DATE_FORMAT(waktu, "%d")', $tanggal);
        $this->db->like('MONTH(waktu)', $bulan);
        $this->db->like('YEAR(waktu)', $tahun);
        return $this->db->get()->result();
    }

    // ========= Jumlah LOKAL KECIL =========
    public function lokal_kecil()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="lokal"');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    // ========= DATA Rekap LOKAL KECIL =========
    public function data_lokal_kecil()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="lokal"');
        $query = $this->db->get()->result();
        return $query;
    }

    // ========= OPTION TANGGAL LOKAL KECIL =========
    function option_tanggal_lokal_kecil()
    {
        $this->db->select('DATE_FORMAT(waktu, "%d") AS tanggal');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="lokal"');
        $this->db->order_by('DATE(waktu)');
        $this->db->group_by('DATE(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION BULAN LOKAL KECIL =========
    function option_bulan_lokal_kecil()
    {
        $this->db->select('MONTH(waktu) AS bulan');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="lokal"');
        $this->db->order_by('MONTH(waktu)');
        $this->db->group_by('MONTH(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION TAHUN LOKAL KECIL =========
    function option_tahun_lokal_kecil()
    {
        $this->db->select('YEAR(waktu) AS tahun');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="lokal"');
        $this->db->order_by('YEAR(waktu)');
        $this->db->group_by('YEAR(waktu)');
        return $this->db->get()->result();
    }

    // ========= OPTION FILTER LOKAL KECIL =========
    function get_cari_tanggal_lokal_kecil($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->where('ukuran="kecil" and jenis="lokal"');
        $this->db->like('DATE_FORMAT(waktu, "%d")', $tanggal);
        $this->db->like('MONTH(waktu)', $bulan);
        $this->db->like('YEAR(waktu)', $tahun);
        return $this->db->get()->result();
    }


    // ========= Grafik Hibrida =======================
    function get_rekap_hibrida()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->limit(5);
        $this->db->where('jenis="hibrida"');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    function get_rekap_hibrida_kecil()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->limit(5);
        $this->db->where('jenis="hibrida"');
        // $this->db->where('ukuran="kecil"');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    // ========= Grafik Lokal =======================
    function get_rekap_lokal()
    {
        $this->db->select('*');
        $this->db->from('tb_monitoring');
        $this->db->limit(5);
        $this->db->where('jenis="lokal"');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }
}
