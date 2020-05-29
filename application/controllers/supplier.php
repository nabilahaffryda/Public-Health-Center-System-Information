<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class supplier extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Supplier_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List Supplier';
        $data['tbl_supplier']=$this->Supplier_model->getAllSupplier();
        if($this->input->post('keyword')){
            $data['tbl_supplier']=$this->Supplier_model->cariDataSupplier();
        }
        $this->load->view('template/header', $data);
        $this->load->view('supplier/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Supplier';
        $this->form_validation->set_rules('kode_supplier', 'Kode Supplier', 'required');
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telpon', 'No Telfon', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('supplier/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Supplier_model->tambahdatasupplier();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('supplier','refresh');
        }
    }

    public function hapus($kode_supplier){
        $this->Supplier_model->hapusdatasupplier($kode_supplier);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('supplier','refresh');
    }

    public function edit($kode_supplier){
        $data['title']='Form Edit Data Supplier';
        $data['tbl_supplier']=$this->Supplier_model->getsupplierByID($kode_supplier);
        $this->form_validation->set_rules('kode_supplier', 'Kode Supplier', 'required');
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telpon', 'No Telfon', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('supplier/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Supplier_model->ubahdatasupplier();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('supplier','refresh');
        }
    }
}
?>