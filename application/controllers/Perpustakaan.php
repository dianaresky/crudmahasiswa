<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpustakaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Perpustakaan_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Perpustakaan ";
        $data['perpustakaan'] = $this->Perpustakaan_model->get();
        $this->load->view("layout/header");
        $this->load->view("perpustakaan/vw_perpustakaan", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Peminjaman";
        $this->load->view("layout/header");
        $this->load->view("perpustakaan/vw_tambah_perpustakaan", $data);
        $this->load->view("layout/footer");
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Peminjaman";
        $data['perpustakaan'] = $this->Perpustakaan_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("perpustakaan/vw_detail_perpustakaan", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id)
    {
        $this->Perpustakaan_model->delete($id);
        redirect('Perpustakaan');
    }
}