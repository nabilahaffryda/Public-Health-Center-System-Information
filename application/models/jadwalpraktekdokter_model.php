<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class jadwalpraktekdokter_model extends CI_Model{
    public function getAlljadwalpraktekdokter(){
        return $this->db->get('tbl_jadwal_praktek_dokter')->result_array();
    }

    public function tambahdatajadwalpraktekdokter(){
        $data=[
            "id_jadwal" => $this->input->post('id_jadwal', true),
            "kode_dokter" => $this->input->post('kode_dokter', true),
            "hari" => $this->input->post('hari', true),
            "jam_mulai" => $this->input->post('jam_mulai', true),
            "jam_selesai" => $this->input->post('jam_selesai', true),
            "id_poli" => $this->input->post('id_poli', true),
        ];
        $this->db->insert('tbl_jadwal_praktek_dokter', $data);
    }

    public function hapusdatajadwalpraktekdokter($id_jadwal){
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->delete('tbl_jadwal_praktek_dokter');
    }

    public function getjadwalpraktekdokterByID($id_jadwal){
        return $this->db->get_where('tbl_jadwal_praktek_dokter',['id_jadwal'=> $id_jadwal])->row_array();
    }
    public function ubahdatajadwalpraktekdokter(){
        $data=[
           "id_jadwal" => $this->input->post('id_jadwal', true),
            "kode_dokter" => $this->input->post('kode_dokter', true),
            "hari" => $this->input->post('hari', true),
            "jam_mulai" => $this->input->post('jam_mulai', true),
            "jam_selesai" => $this->input->post('jam_selesai', true),
            "id_poli" => $this->input->post('id_poli', true),
        ];
        $this->db->where('id_jadwal', $this->input->post('id_jadwal'));
        $this->db->update('tbl_jadwal_praktek_dokter', $data);
    }
    public function cariDatajadwalpraktekdokter(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_jadwal',$keyword);
        $this->db->or_like('kode_dokter',$keyword);
        return $this->db->get('tbl_jadwal_praktek_dokter')->result_array();
    }
}
?>