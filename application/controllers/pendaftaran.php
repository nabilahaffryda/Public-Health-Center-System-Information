<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('pendaftaran_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List pendaftaran';
        $data['tbl_pendaftaran']=$this->pendaftaran_model->getAllpendaftaran();
        if($this->input->post('keyword')){
            $data['tbl_pendaftaran']=$this->pendaftaran_model->cariDatapendaftaran();
        }
        $this->load->view('template/header', $data);
        $this->load->view('pendaftaran/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Pendaftaran';
        $this->form_validation->set_rules('no_registrasi', 'No Registrasi', 'required');
        $this->form_validation->set_rules('no_rawat', 'No Rawat', 'required');
        $this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'required');
        $this->form_validation->set_rules('tanggal_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('kode_dokter', 'Kode Dokter', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        $this->form_validation->set_rules('nama_penanggung_jawab', 'Nama Penanggung Jawab', 'required');
        $this->form_validation->set_rules('hubungan_dengan_penanggung_jawab', 'Hubungan dengan Penanggung Jawab', 'required');
        $this->form_validation->set_rules('alamat_penanggung_jawab', 'Alamat Penanggung Jawab', 'required');
        $this->form_validation->set_rules('status_pasien', 'Status Pasien', 'required');
        $this->form_validation->set_rules('no_bpjs', 'No BPJS', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pendaftaran/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->pendaftaran_model->tambahdatapendaftaran();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('pendaftaran','refresh');
        }
    }

    public function hapus($no_registrasi){
        $this->pendaftaran_model->hapusdatapendaftaran($no_registrasi);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('pendaftaran','refresh');
    }

    public function edit($no_registrasi){
        $data['title']='Form Edit Data Pendaftaran';
        $data['tbl_pendaftaran']=$this->pendaftaran_model->getpendaftaranByID($no_registrasi);
        $this->form_validation->set_rules('no_registrasi', 'No Registrasi', 'required');
        $this->form_validation->set_rules('no_rawat', 'No Rawat', 'required');
        $this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'required');
        $this->form_validation->set_rules('tanggal_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('kode_dokter', 'Kode Dokter', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        $this->form_validation->set_rules('nama_penanggung_jawab', 'Nama Penanggung Jawab', 'required');
        $this->form_validation->set_rules('hubungan_dengan_penanggung_jawab', 'Hubungan dengan Penanggung Jawab', 'required');
        $this->form_validation->set_rules('alamat_penanggung_jawab', 'Alamat Penanggung Jawab', 'required');
        $this->form_validation->set_rules('status_pasien', 'Status Pasien', 'required');
        $this->form_validation->set_rules('no_bpjs', 'No BPJS', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pendaftaran/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->pendaftaran_model->ubahdatapendaftaran();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('pendaftaran','refresh');
        }
    }
}
?>