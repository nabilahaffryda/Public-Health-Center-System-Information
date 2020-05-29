<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class paramedis extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('paramedis_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List paramedis';
        $data['tbl_paramedis']=$this->paramedis_model->getAllparamedis();
        if($this->input->post('keyword')){
            $data['tbl_paramedis']=$this->paramedis_model->cariDataparamedis();
        }
        $this->load->view('template/header', $data);
        $this->load->view('paramedis/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Paramedis';
        $this->form_validation->set_rules('kode_paramedis', 'Kode Paramedis', 'required');
        $this->form_validation->set_rules('nama_paramedis', 'Nama Paramedis', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_izin_paramedis', 'No Izin Paramedis', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_tinggal', 'Alamat Tinggal', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('paramedis/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->paramedis_model->tambahdataparamedis();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('paramedis','refresh');
        }
    }

    public function hapus($kode_paramedis){
        $this->paramedis_model->hapusdataparamedis($kode_paramedis);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('paramedis','refresh');
    }

    public function edit($kode_paramedis){
        $data['title']='Form Edit Data Paramedis';
        $data['tbl_paramedis']=$this->paramedis_model->getparamedisByID($kode_paramedis);
        $this->form_validation->set_rules('kode_paramedis', 'Kode Paramedis', 'required');
        $this->form_validation->set_rules('nama_paramedis', 'Nama Paramedis', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_izin_paramedis', 'No Izin Paramedis', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat_tinggal', 'Alamat Tinggal', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('paramedis/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->paramedis_model->ubahdataparamedis();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('paramedis','refresh');
        }
    }
}
?>