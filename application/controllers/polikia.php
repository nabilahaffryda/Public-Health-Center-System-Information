<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class polikia extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('polikia_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List polikia';
        $data['tbl_kesehatan_ibu_anak']=$this->polikia_model->getAllpolikia();
        if($this->input->post('keyword')){
            $data['tbl_kesehatan_ibu_anak']=$this->polikia_model->cariDatapolikia();
        }
        $this->load->view('template/header', $data);
        $this->load->view('polikia/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data polikia';
        $data['ditangani_oleh']=['dokter', 'petugas','dokter dan petugas'];
        $this->form_validation->set_rules('id_kia', 'ID KIA', 'required');
        $this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'required');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('no_bpjs', 'No BPJS', 'required');
        $this->form_validation->set_rules('status_pasien', 'Status Pasien', 'required');
        $this->form_validation->set_rules('kode_operasi', 'Kode Operasi', 'required');
        $this->form_validation->set_rules('nama_operasi', 'Nama Operasi', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required');
        $this->form_validation->set_rules('dibayar', 'Dibayar', 'required');
        $this->form_validation->set_rules('kembalian', 'Kembalian', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('tgl_tindakan', 'Tanggal Tindakan', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('polikia/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->polikia_model->tambahdatapolikia();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('polikia','refresh');
        }
    }

    public function hapus($no_rekamedis){
        $this->polikia_model->hapusdatapolikia($no_rekamedis);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('polikia','refresh');
    }

    public function edit($no_rekamedis){
        $data['title']='Form Edit Data polikia';
        $data['tbl_kesehatan_ibu_anak']=$this->polikia_model->getpolikiaByID($no_rekamedis);
        $data['ditangani_oleh']=['dokter', 'petugas','dokter dan petugas'];
        $this->form_validation->set_rules('id_kia', 'ID KIA', 'required');
        $this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'required');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('no_bpjs', 'No BPJS', 'required');
        $this->form_validation->set_rules('status_pasien', 'Status Pasien', 'required');
        $this->form_validation->set_rules('kode_operasi', 'Kode Operasi', 'required');
        $this->form_validation->set_rules('nama_operasi', 'Nama Operasi', 'required');
        $this->form_validation->set_rules('biaya', 'Biaya', 'required');
        $this->form_validation->set_rules('dibayar', 'Dibayar', 'required');
        $this->form_validation->set_rules('kembalian', 'Kembalian', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('tgl_tindakan', 'Tanggal Tindakan', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('polikia/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->polikia_model->ubahdatapolikia();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('polikia','refresh');
        }
    }
}
?>