<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('pasien_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List pasien';
        $data['tbl_pasien']=$this->pasien_model->getAllpasien();
        if($this->input->post('keyword')){
            $data['tbl_pasien']=$this->pasien_model->cariDatapasien();
        }
        $this->load->view('template/header', $data);
        $this->load->view('pasien/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Pasien';
        $data['jenis_kelamin']=['L', 'P'];
        $this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'required');
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('no_bpjs', 'No BPJS', 'required');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('status_pasien', 'Status Pasien', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pasien/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->pasien_model->tambahdatapasien();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('pasien','refresh');
        }
    }

    public function hapus($no_rekamedis){
        $this->pasien_model->hapusdatapasien($no_rekamedis);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('pasien','refresh');
    }

    public function edit($no_rekamedis){
        $data['title']='Form Edit Data Pasien';
        $data['tbl_pasien']=$this->pasien_model->getpasienByID($no_rekamedis);
        $data['jenis_kelamin']=['L', 'P'];
        $this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'required');
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('no_bpjs', 'No BPJS', 'required');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('status_pasien', 'Status Pasien', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pasien/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->pasien_model->ubahdatapasien();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('pasien','refresh');
        }
    }
}
?>