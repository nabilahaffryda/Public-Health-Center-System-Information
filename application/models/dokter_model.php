<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dokter_model extends CI_Model{
    public function getAlldokter(){
        return $this->db->get('tbl_dokter')->result_array();
    }

    public function tambahdatadokter(){
        $data=[
            "kode_dokter" => $this->input->post('kode_dokter', true),
            "nama_dokter" => $this->input->post('nama_dokter', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "nomor_induk_dokter" => $this->input->post('nomor_induk_dokter', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat_tinggal" => $this->input->post('alamat_tinggal', true),
            "id_poli" => $this->input->post('id_poli', true),
        ];
        $this->db->insert('tbl_dokter', $data);
    }

    public function hapusdatadokter($kode_dokter){
        $this->db->where('kode_dokter', $kode_dokter);
        $this->db->delete('tbl_dokter');
    }

    public function getdokterByID($kode_dokter){
        return $this->db->get_where('tbl_dokter',['kode_dokter'=> $kode_dokter])->row_array();
    }
    public function ubahdatadokter(){
        $data=[
            "kode_dokter" => $this->input->post('kode_dokter', true),
            "nama_dokter" => $this->input->post('nama_dokter', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "nomor_induk_dokter" => $this->input->post('nomor_induk_dokter', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat_tinggal" => $this->input->post('alamat_tinggal', true),
            "id_poli" => $this->input->post('id_poli', true),
        ];
        $this->db->where('kode_dokter', $this->input->post('kode_dokter'));
        $this->db->update('tbl_dokter', $data);
    }
    public function cariDatadokter(){
        $keyword=$this->input->post('keyword');
        $this->db->like('kode_dokter',$keyword);
        $this->db->or_like('nama_dokter',$keyword);
        return $this->db->get('tbl_dokter')->result_array();
    }
}
?>