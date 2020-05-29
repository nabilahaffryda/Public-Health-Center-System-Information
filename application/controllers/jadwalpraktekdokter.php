<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class jadwalpraktekdokter extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('jadwalpraktekdokter_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['title']='List Jadwal Praktek Dokter';
        $data['tbl_jadwal_praktek_dokter']=$this->jadwalpraktekdokter_model->getAlljadwalpraktekdokter();
        if($this->input->post('keyword')){
            $data['tbl_jadwal_praktek_dokter']=$this->jadwalpraktekdokter_model->cariDatajadwalpraktekdokter();
        }
        $this->load->view('template/header', $data);
        $this->load->view('jadwalpraktekdokter/index');
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahkan Data Jadwal Praktek Dokter';
        $this->form_validation->set_rules('id_jadwal', 'ID Jadwal', 'required');
        $this->form_validation->set_rules('kode_dokter', 'Kode Dokter', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required');
        $this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('jadwalpraktekdokter/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->jadwalpraktekdokter_model->tambahdatajadwalpraktekdokter();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('jadwalpraktekdokter','refresh');
        }
    }

    public function hapus($id_jadwal){
        $this->jadwalpraktekdokter_model->hapusdatajadwalpraktekdokter($id_jadwal);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('jadwalpraktekdokter','refresh');
    }

    public function edit($id_jadwal){
        $data['title']='Form Edit Data Jadwal Praktek Dokter';
        $data['tbl_jadwal_praktek_dokter']=$this->jadwalpraktekdokter_model->getjadwalpraktekdokterByID($id_jadwal);
        $this->form_validation->set_rules('id_jadwal', 'ID Jadwal');
        $this->form_validation->set_rules('kode_dokter', 'Kode Dokter', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required');
        $this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'required');
        $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
        
        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('jadwalpraktekdokter/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->jadwalpraktekdokter_model->ubahdatajadwalpraktekdokter();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('jadwalpraktekdokter','refresh');
        }
    }
}
?>