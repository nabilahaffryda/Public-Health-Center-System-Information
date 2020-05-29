<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('dokter_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List dokter';
        $data['tbl_dokter']=$this->dokter_model->getAlldokter();
        if($this->input->post('keyword')){
            $data['tbl_dokter']=$this->dokter_model->cariDatadokter();
        }
        $this->load->view('template/header', $data);
        $this->load->view('dokter/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data dokter';
        $this->form_validation->set_rules('kode_dokter', 'Kode dokter', 'required');
        $this->form_validation->set_rules('nama_dokter', 'Nama dokter', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('nomor_induk_dokter', 'No Induk Dokter', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_tinggal', 'Alamat Tinggal', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dokter/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->dokter_model->tambahdatadokter();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('dokter','refresh');
        }
    }

    public function hapus($kode_dokter){
        $this->dokter_model->hapusdatadokter($kode_dokter);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('dokter','refresh');
    }

    public function edit($kode_dokter){
        $data['title']='Form Edit Data dokter';
        $data['tbl_dokter']=$this->dokter_model->getdokterByID($kode_dokter);
        $this->form_validation->set_rules('kode_dokter', 'Kode dokter', 'required');
        $this->form_validation->set_rules('nama_dokter', 'Nama dokter', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('nomor_induk_dokter', 'No Induk Dokter', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_tinggal', 'Alamat Tinggal', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('dokter/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->dokter_model->ubahdatadokter();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('dokter','refresh');
        }
    }
}
?>