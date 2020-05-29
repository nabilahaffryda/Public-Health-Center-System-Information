<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class paramedis_model extends CI_Model{
    public function getAllparamedis(){
        return $this->db->get('tbl_paramedis')->result_array();
    }

    public function tambahdataparamedis(){
        $data=[
            "kode_paramedis" => $this->input->post('kode_paramedis', true),
            "nama_paramedis" => $this->input->post('nama_paramedis', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "no_izin_paramedis" => $this->input->post('no_izin_paramedis', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat_tinggal" => $this->input->post('alamat_tinggal', true),
            "id_poli" => $this->input->post('id_poli', true),
        ];
        $this->db->insert('tbl_paramedis', $data);
    }

    public function hapusdataparamedis($kode_paramedis){
        $this->db->where('kode_paramedis', $kode_paramedis);
        $this->db->delete('tbl_paramedis');
    }

    public function getparamedisByID($kode_paramedis){
        return $this->db->get_where('tbl_paramedis',['kode_paramedis'=> $kode_paramedis])->row_array();
    }
    public function ubahdataparamedis(){
        $data=[
            "kode_paramedis" => $this->input->post('kode_paramedis', true),
            "nama_paramedis" => $this->input->post('nama_paramedis', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "no_izin_paramedis" => $this->input->post('no_izin_paramedis', true),
            "tempat_lahir" => $this->input->post('tempat_lahir', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "alamat_tinggal" => $this->input->post('alamat_tinggal', true),
            "id_poli" => $this->input->post('id_poli', true),
        ];
        $this->db->where('kode_paramedis', $this->input->post('kode_paramedis'));
        $this->db->update('tbl_paramedis', $data);
    }
    public function cariDataparamedis(){
        $keyword=$this->input->post('keyword');
        $this->db->like('kode_paramedis',$keyword);
        $this->db->or_like('nama_paramedis',$keyword);
        return $this->db->get('tbl_paramedis')->result_array();
    }
}
?>