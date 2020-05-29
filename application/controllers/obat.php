<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class obat extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('obat_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List obat';
        $data['tbl_obat']=$this->obat_model->getAllobat();
        if($this->input->post('keyword')){
            $data['tbl_obat']=$this->obat_model->cariDataobat();
        }
        $this->load->view('template/header', $data);
        $this->load->view('obat/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data obat';
        $this->form_validation->set_rules('kode_obat', 'Kode Obat', 'required');
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required');
        $this->form_validation->set_rules('dosis_aturan_obat', 'Dosis Aturan Obat', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('obat/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->obat_model->tambahdataobat();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('obat','refresh');
        }
    }

    public function hapus($kode_obat){
        $this->obat_model->hapusdataobat($kode_obat);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('obat','refresh');
    }

    public function edit($kode_obat){
        $data['title']='Form Edit Data obat';
        $data['tbl_obat']=$this->obat_model->getobatByID($kode_obat);
        $this->form_validation->set_rules('kode_obat', 'Kode Obat', 'required');
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required');
        $this->form_validation->set_rules('dosis_aturan_obat', 'Dosis Aturan Obat', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('obat/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->obat_model->ubahdataobat();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('obat','refresh');
        }
    }
}
?>