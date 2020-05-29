<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengadaanobat extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('pengadaanobat_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List pengadaanobat';
        $data['tbl_pengadaan_obat']=$this->pengadaanobat_model->getAllpengadaanobat();
        if($this->input->post('keyword')){
            $data['tbl_pengadaan_obat']=$this->pengadaanobat_model->cariDatapengadaanobat();
        }
        $this->load->view('template/header', $data);
        $this->load->view('pengadaanobat/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Pengadaan Obat';
        $this->form_validation->set_rules('id_pengadaan', 'ID Pengadaan', 'required');
        $this->form_validation->set_rules('no_trans', 'No Transaksi', 'required');
        $this->form_validation->set_rules('kode_supplier', 'Kode Supplier', 'required');
        $this->form_validation->set_rules('kode_obat', 'Kode Obat', 'required');
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required');
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('total', 'Total', 'required');
        $this->form_validation->set_rules('tgl_transaksi', 'Tanggal Transaksi', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pengadaanobat/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->pengadaanobat_model->tambahdatapengadaanobat();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('pengadaanobat','refresh');
        }
    }

    public function hapus($id_pengadaan){
        $this->pengadaanobat_model->hapusdatapengadaanobat($id_pengadaan);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('pengadaanobat','refresh');
    }

    public function edit($id_pengadaan){
        $data['title']='Form Edit Data Pengadaan Obat';
        $data['tbl_pengadaan_obat']=$this->pengadaanobat_model->getpengadaanobatByID($id_pengadaan);
        $this->form_validation->set_rules('id_pengadaan', 'ID Pengadaan', 'required');
        $this->form_validation->set_rules('no_trans', 'No Transaksi', 'required');
        $this->form_validation->set_rules('kode_supplier', 'Kode Supplier', 'required');
        $this->form_validation->set_rules('kode_obat', 'Kode Obat', 'required');
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required');
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('total', 'Total', 'required');
        $this->form_validation->set_rules('tgl_transaksi', 'Tanggal Transaksi', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pengadaanobat/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->pengadaanobat_model->ubahdatapengadaanobat();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('pengadaanobat','refresh');
        }
    }
}
?>