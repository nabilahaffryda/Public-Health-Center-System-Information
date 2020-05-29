<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran_model extends CI_Model{
    public function getAllpendaftaran(){
        return $this->db->get('tbl_pendaftaran')->result_array();
    }

    public function tambahdatapendaftaran(){
        $data=[
            "no_registrasi" => $this->input->post('no_registrasi', true),
            "no_rawat" => $this->input->post('no_rawat', true),
            "no_rekamedis" => $this->input->post('no_rekamedis', true),
            "tanggal_daftar" => $this->input->post('tanggal_daftar', true),
            "kode_dokter" => $this->input->post('kode_dokter', true),
            "id_poli" => $this->input->post('id_poli', true),
            "nama_penanggung_jawab" => $this->input->post('nama_penanggung_jawab', true),
            "hubungan_dengan_penanggung_jawab" => $this->input->post('hubungan_dengan_penanggung_jawab', true),
            "alamat_penanggung_jawab" => $this->input->post('alamat_penanggung_jawab', true),
            "status_pasien" => $this->input->post('status_pasien', true),
            "no_bpjs" => $this->input->post('no_bpjs', true),
        ];
        $this->db->insert('tbl_pendaftaran', $data);
    }

    public function hapusdatapendaftaran($no_registrasi){
        $this->db->where('no_registrasi', $no_registrasi);
        $this->db->delete('tbl_pendaftaran');
    }

    public function getpendaftaranByID($no_registrasi){
        return $this->db->get_where('tbl_pendaftaran',['no_registrasi'=> $no_registrasi])->row_array();
    }
    public function ubahdatapendaftaran(){
        $data=[
           "no_registrasi" => $this->input->post('no_registrasi', true),
            "no_rawat" => $this->input->post('no_rawat', true),
            "no_rekamedis" => $this->input->post('no_rekamedis', true),
            "tanggal_daftar" => $this->input->post('tanggal_daftar', true),
            "kode_dokter" => $this->input->post('kode_dokter', true),
            "id_poli" => $this->input->post('id_poli', true),
            "nama_penanggung_jawab" => $this->input->post('nama_penanggung_jawab', true),
            "hubungan_dengan_penanggung_jawab" => $this->input->post('hubungan_dengan_penanggung_jawab', true),
            "alamat_penanggung_jawab" => $this->input->post('alamat_penanggung_jawab', true),
            "status_pasien" => $this->input->post('status_pasien', true),
            "no_bpjs" => $this->input->post('no_bpjs', true),
        ];
        $this->db->where('no_registrasi', $this->input->post('no_registrasi'));
        $this->db->update('tbl_pendaftaran', $data);
    }
    public function cariDatapendaftaran(){
        $keyword=$this->input->post('keyword');
        $this->db->like('no_registrasi',$keyword);
        $this->db->or_like('no_rawat',$keyword);
        return $this->db->get('tbl_pendaftaran')->result_array();
    }
}
?>