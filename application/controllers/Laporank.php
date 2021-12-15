<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporank_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Laporan Keluar";
        $data['laporank'] = $this->Laporank_model->get();
        $this->load->view("layout/header");
        $this->load->view("user/vw_laporank", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Pengajuan Surat Keluar";
        $this->load->view("layout/header");
        $this->load->view("tambah/vw_tambah_laporank", $data);
        $this->load->view("layout/footer");
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail";
        $data['laporank'] = $this->Laporank_model->getByid($id);
        $this->load->view("layout/header");
        $this->load->view("detail/vw_detail_laporank", $data);
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
            'keterangan' => $this->input->post('keterangan'),
        ];
        $this->Laporank_model->insert($data);
        redirect('Laporank');
    }
    function hapus($id)
    {
        $this->Laporank_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Laporank Berhasil Dihapus!</div>');
        redirect('Laporank');
    }
}
