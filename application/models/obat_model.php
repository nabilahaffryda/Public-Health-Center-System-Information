<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class obat_model extends CI_Model{
    public function getAllobat(){
        return $this->db->get('tbl_obat')->result_array();
    }

    public function tambahdataobat(){
        $data=[
            "kode_obat" => $this->input->post('kode_obat', true),
            "nama_obat" => $this->input->post('nama_obat', true),
            "jenis_obat" => $this->input->post('jenis_obat', true),
            "dosis_aturan_obat" => $this->input->post('dosis_aturan_obat', true),
            "satuan" => $this->input->post('satuan', true),
        ];
        $this->db->insert('tbl_obat', $data);
    }

    public function hapusdataobat($kode_obat){
        $this->db->where('kode_obat', $kode_obat);
        $this->db->delete('tbl_obat');
    }

    public function getobatByID($kode_obat){
        return $this->db->get_where('tbl_obat',['kode_obat'=> $kode_obat])->row_array();
    }
    public function ubahdataobat(){
        $data=[
            "kode_obat" => $this->input->post('kode_obat', true),
            "nama_obat" => $this->input->post('nama_obat', true),
            "jenis_obat" => $this->input->post('jenis_obat', true),
            "dosis_aturan_obat" => $this->input->post('dosis_aturan_obat', true),
            "satuan" => $this->input->post('satuan', true),
        ];
        $this->db->where('kode_obat', $this->input->post('kode_obat'));
        $this->db->update('tbl_obat', $data);
    }
    public function cariDataobat(){
        $keyword=$this->input->post('keyword');
        $this->db->like('kode_obat',$keyword);
        $this->db->or_like('nama_obat',$keyword);
        return $this->db->get('tbl_obat')->result_array();
    }
}
?>