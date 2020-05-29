<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model{
    public function getAllSupplier(){
        return $this->db->get('tbl_supplier')->result_array();
    }

    public function tambahdatasupplier(){
        $data=[
            "kode_supplier" => $this->input->post('kode_supplier', true),
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telpon" => $this->input->post('no_telpon', true)
        ];
        $this->db->insert('tbl_supplier', $data);
    }

    public function hapusdatasupplier($kode_supplier){
        $this->db->where('kode_supplier', $kode_supplier);
        $this->db->delete('tbl_supplier');
    }

    public function getsupplierByID($kode_supplier){
        return $this->db->get_where('tbl_supplier',['kode_supplier'=> $kode_supplier])->row_array();
    }
    public function ubahdatasupplier(){
        $data=[
            "kode_supplier" => $this->input->post('kode_supplier', true),
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telpon" => $this->input->post('no_telpon', true)
        ];
        $this->db->where('kode_supplier', $this->input->post('kode_supplier'));
        $this->db->update('tbl_supplier', $data);
    }
    public function cariDataSupplier(){
        $keyword=$this->input->post('keyword');
        $this->db->like('kode_supplier',$keyword);
        $this->db->or_like('nama_supplier',$keyword);
        return $this->db->get('tbl_supplier')->result_array();
    }
}
?>