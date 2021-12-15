<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Arsipm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Halaman Arsip Surat Masuk";
        $this->load->view("layout/header");
        $this->load->view("user/vw_arsipm", $data);
        $this->load->view("layout/footer");
    }

    function detail()
    {
        $data['judul'] = "Halaman Detail Laporan";
        $this->load->view("layout/header");
        $this->load->view("detail/vw_detail_arsipm", $data);
        $this->load->view("layout/footer");
    }
}
