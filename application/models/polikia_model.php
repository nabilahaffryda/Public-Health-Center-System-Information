<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class polikia_model extends CI_Model{
    public function getAllpolikia(){
        return $this->db->get('tbl_kesehatan_ibu_anak')->result_array();
    }

    public function tambahdatapolikia(){
        $data=[
            "id_kia" => $this->input->post('id_kia', true),
            "no_rekamedis" => $this->input->post('no_rekamedis', true),
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "no_bpjs" => $this->input->post('no_bpjs', true),
            "status_pasien" => $this->input->post('status_pasien', true),
            "kode_operasi" => $this->input->post('kode_operasi', true),
            "nama_operasi" => $this->input->post('nama_operasi', true),
            "biaya" => $this->input->post('biaya', true),
            "ditangani_oleh" => $this->input->post('ditangani_oleh', true),
            "dibayar" => $this->input->post('dibayar', true),
            "kembalian" => $this->input->post('kembalian', true),
            "keterangan" => $this->input->post('keterangan', true),
            "tgl_tindakan" => $this->input->post('tgl_tindakan', true),
        ];
        $this->db->insert('tbl_kesehatan_ibu_anak', $data);
    }

    public function hapusdatapolikia($id_kia){
        $this->db->where('id_kia', $id_kia);
        $this->db->delete('tbl_kesehatan_ibu_anak');
    }

    public function getpolikiaByID($id_kia){
        return $this->db->get_where('tbl_kesehatan_ibu_anak',['id_kia'=> $id_kia])->row_array();
    }
    public function ubahdatapolikia(){
        $data=[
            "id_kia" => $this->input->post('id_kia', true),
            "no_rekamedis" => $this->input->post('no_rekamedis', true),
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "no_bpjs" => $this->input->post('no_bpjs', true),
            "status_pasien" => $this->input->post('status_pasien', true),
            "kode_operasi" => $this->input->post('kode_operasi', true),
            "nama_operasi" => $this->input->post('nama_operasi', true),
            "biaya" => $this->input->post('biaya', true),
            "ditangani_oleh" => $this->input->post('ditangani_oleh', true),
            "dibayar" => $this->input->post('dibayar', true),
            "kembalian" => $this->input->post('kembalian', true),
            "keterangan" => $this->input->post('keterangan', true),
            "tgl_tindakan" => $this->input->post('tgl_tindakan', true),
        ];
        $this->db->where('id_kia', $this->input->post('id_kia'));
        $this->db->update('tbl_kesehatan_ibu_anak', $data);
    }
    public function cariDatapolikia(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_kia',$keyword);
        $this->db->or_like('nama_polikia',$keyword);
        return $this->db->get('tbl_kesehatan_ibu_anak')->result_array();
    }
}
?>