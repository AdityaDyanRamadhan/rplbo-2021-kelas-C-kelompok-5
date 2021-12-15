<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporanm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporanm_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Laporan Masuk";
        $data['laporanm'] = $this->Laporanm_model->get();
        $this->load->view("layout/header");
        $this->load->view("user/vw_laporanm", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Pengajuan Surat Masuk";
        $this->load->view("layout/header");
        $this->load->view("tambah/vw_tambah_laporanm", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail";
        $data['laporanm'] = $this->Laporanm_model->getByid($id);
        $this->load->view("layout/header");
        $this->load->view("detail/vw_detail_laporanm", $data);
        $this->load->view("layout/footer");
    }

    function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'status' => $this->input->post('status'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'mengajukan' => $this->input->post('mengajukan'),
        ];
        $this->Laporanm_model->insert($data);
        redirect('Laporanm');
    }
    function hapus($id)
    {
        $this->Laporanm_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Laporanm Berhasil Dihapus!</div>');
        redirect('Laporanm');
    }
}
