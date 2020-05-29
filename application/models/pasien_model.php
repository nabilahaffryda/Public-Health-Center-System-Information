<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pasien_model extends CI_Model{
    public function getAllpasien(){
        return $this->db->get('tbl_pasien')->result_array();
    }

    public function tambahdatapasien(){
        $data=[
            "no_rekamedis" => $this->input->post('no_rekamedis', true),
            "no_ktp" => $this->input->post('no_ktp', true),
            "no_bpjs" => $this->input->post('no_bpjs', true),
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "status_pasien" => $this->input->post('status_pasien', true),
        ];
        $this->db->insert('tbl_pasien', $data);
    }

    public function hapusdatapasien($no_rekamedis){
        $this->db->where('no_rekamedis', $no_rekamedis);
        $this->db->delete('tbl_pasien');
    }

    public function getpasienByID($no_rekamedis){
        return $this->db->get_where('tbl_pasien',['no_rekamedis'=> $no_rekamedis])->row_array();
    }
    public function ubahdatapasien(){
        $data=[
            "no_rekamedis" => $this->input->post('no_rekamedis', true),
            "no_ktp" => $this->input->post('no_ktp', true),
            "no_bpjs" => $this->input->post('no_bpjs', true),
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "status_pasien" => $this->input->post('status_pasien', true),
        ];
        $this->db->where('no_rekamedis', $this->input->post('no_rekamedis'));
        $this->db->update('tbl_pasien', $data);
    }
    public function cariDatapasien(){
        $keyword=$this->input->post('keyword');
        $this->db->like('no_rekamedis',$keyword);
        $this->db->or_like('nama_pasien',$keyword);
        return $this->db->get('tbl_pasien')->result_array();
    }
}
?>