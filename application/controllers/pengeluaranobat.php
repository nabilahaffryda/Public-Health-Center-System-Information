<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengeluaranobat extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('pengeluaranobat_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List pengeluaranobat';
        $data['tbl_pengeluaran_obat']=$this->pengeluaranobat_model->getAllpengeluaranobat();
        if($this->input->post('keyword')){
            $data['tbl_pengeluaran_obat']=$this->pengeluaranobat_model->cariDatapengeluaranobat();
        }
        $this->load->view('template/header', $data);
        $this->load->view('pengeluaranobat/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Pengeluaran Obat';
        $this->form_validation->set_rules('id_pengeluaran', 'ID Pengeluaran', 'required');
        $this->form_validation->set_rules('no_terima_obat', 'No Terima Obat', 'required');
        $this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'required');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('kode_obat', 'Kode Obat', 'required');
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required');
        $this->form_validation->set_rules('dosis_aturan_obat', 'Dosis Aturan Obat', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('tgl_serah_obat', 'Tanggal Serah Obat', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pengeluaranobat/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->pengeluaranobat_model->tambahdatapengeluaranobat();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('pengeluaranobat','refresh');
        }
    }

    public function hapus($id_pengeluaran){
        $this->pengeluaranobat_model->hapusdatapengeluaranobat($id_pengeluaran);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('pengeluaranobat','refresh');
    }

    public function edit($id_pengeluaran){
        $data['title']='Form Edit Data Pengeluaran Obat';
        $data['tbl_pengeluaran_obat']=$this->pengeluaranobat_model->getpengeluaranobatByID($id_pengeluaran);
        $this->form_validation->set_rules('id_pengeluaran', 'ID Pengeluaran', 'required');
        $this->form_validation->set_rules('no_terima_obat', 'No Terima Obat', 'required');
        $this->form_validation->set_rules('no_rekamedis', 'No Rekam Medis', 'required');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('kode_obat', 'Kode Obat', 'required');
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required');
        $this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required');
        $this->form_validation->set_rules('dosis_aturan_obat', 'Dosis Aturan Obat', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');
        $this->form_validation->set_rules('tgl_serah_obat', 'Tanggal Serah Obat', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('pengeluaranobat/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->pengeluaranobat_model->ubahdatapengeluaranobat();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('pengeluaranobat','refresh');
        }
    }
}
?>