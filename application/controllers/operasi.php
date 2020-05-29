<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class operasi extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('operasi_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List operasi';
        $data['tbl_operasi']=$this->operasi_model->getAlloperasi();
        if($this->input->post('keyword')){
            $data['tbl_operasi']=$this->operasi_model->cariDataoperasi();
        }
        $this->load->view('template/header', $data);
        $this->load->view('operasi/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data operasi';
        $data['ditangani_oleh']=['dokter', 'petugas','dokter dan petugas'];
        $this->form_validation->set_rules('kode_operasi', 'Kode Operasi', 'required');
        $this->form_validation->set_rules('nama_operasi', 'Nama Operasi', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('operasi/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->operasi_model->tambahdataoperasi();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('operasi','refresh');
        }
    }

    public function hapus($kode_operasi){
        $this->operasi_model->hapusdataoperasi($kode_operasi);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('operasi','refresh');
    }

    public function edit($kode_operasi){
        $data['title']='Form Edit Data operasi';
        $data['tbl_operasi']=$this->operasi_model->getoperasiByID($kode_operasi);
        $data['ditangani_oleh']=['dokter', 'petugas','dokter dan petugas'];
        $this->form_validation->set_rules('kode_operasi', 'Kode Operasi', 'required');
        $this->form_validation->set_rules('nama_operasi', 'Nama Operasi', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('operasi/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->operasi_model->ubahdataoperasi();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('operasi','refresh');
        }
    }
}
?>