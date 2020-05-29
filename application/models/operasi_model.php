<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class operasi_model extends CI_Model{
    public function getAlloperasi(){
        return $this->db->get('tbl_operasi')->result_array();
    }

    public function tambahdataoperasi(){
        $data=[
            "kode_operasi" => $this->input->post('kode_operasi', true),
            "nama_operasi" => $this->input->post('nama_operasi', true),
            "biaya" => $this->input->post('biaya', true),
            "ditangani_oleh" => $this->input->post('ditangani_oleh', true),
        ];
        $this->db->insert('tbl_operasi', $data);
    }

    public function hapusdataoperasi($kode_operasi){
        $this->db->where('kode_operasi', $kode_operasi);
        $this->db->delete('tbl_operasi');
    }

    public function getoperasiByID($kode_operasi){
        return $this->db->get_where('tbl_operasi',['kode_operasi'=> $kode_operasi])->row_array();
    }
    public function ubahdataoperasi(){
        $data=[
            "kode_operasi" => $this->input->post('kode_operasi', true),
            "nama_operasi" => $this->input->post('nama_operasi', true),
            "biaya" => $this->input->post('biaya', true),
            "ditangani_oleh" => $this->input->post('ditangani_oleh', true),
        ];
        $this->db->where('kode_operasi', $this->input->post('kode_operasi'));
        $this->db->update('tbl_operasi', $data);
    }
    public function cariDataoperasi(){
        $keyword=$this->input->post('keyword');
        $this->db->like('kode_operasi',$keyword);
        $this->db->or_like('nama_operasi',$keyword);
        return $this->db->get('tbl_operasi')->result_array();
    }
}
?>