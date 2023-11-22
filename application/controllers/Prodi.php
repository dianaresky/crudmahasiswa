<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->load->model('Prodi_model');
	}
    function index()
	{
        $data['judul']="Halaman Prodi";
        $data['prodi'] =$this->Prodi_model->get();
        $this->load->view("layout/header");
        $this ->load->view("Prodi/vw_prodi",$data);
    }
    function tambah()
	{
        $data['judul']="Halaman Tambah Prodi";
        $this->load->view("layout/header");
        $this ->load->view("Prodi/vw_tambah_prodi",$data);
    }
    public function hapus($id)
    {
       $this->Prodi_model->delete($id);
       redirect('Prodi');
    }

    function upload(){
        $data=[
            'nama'=> $this->input->post('nama'),
            'ruangan'=> $this->input->post('ruangan'),
            'jurusan'=> $this->input->post('jurusan'),
            'akreditasi'=> $this->input->post('akreditasi'),
            'nama_kaprodi'=> $this->input->post('nama_kaprodi'),
            'tahun_berdiri'=> $this->input->post('tahun_berdiri'),
            'output_lulusan'=> $this->input->post('output_lulusan'),
            
           
        ];
        $this->Prodi_model->insert($data);
        redirect('Prodi');
    }
    public function edit($id)
    {
        $data['judul']="Halaman edit prodi";
        $data['prodi']= $this->Prodi_model->getById($id);
        $this->load->view("layout/header",$data);
        $this ->load->view("prodi/vw_ubah_prodi",$data);
    }
    function update(){
        $data=[
            'nama'=> $this->input->post('nama'),
            'ruangan'=> $this->input->post('ruangan'),
            'jurusan'=> $this->input->post('jurusan'),
            'akreditasi'=> $this->input->post('akreditasi'),
            'nama_kaprodi'=> $this->input->post('nama_kaprodi'),
            'tahun_berdiri'=> $this->input->post('tahun_berdiri'),
            'output_lulusan'=> $this->input->post('output_lulusan'),
            
           
        ];
        $id=$this->input->post('id');
        $this->Prodi_model->update(['id'=>$id],$data);
        redirect('Prodi');
    }

}
