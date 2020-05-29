<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengadaanobat_model extends CI_Model{
    public function getAllpengadaanobat(){
        return $this->db->get('tbl_pengadaan_obat')->result_array();
    }

    public function tambahdatapengadaanobat(){
        $data=[
            "id_pengadaan" => $this->input->post('id_pengadaan', true),
            "no_trans" => $this->input->post('no_trans', true),
            "kode_supplier" => $this->input->post('kode_supplier', true),
            "kode_obat" => $this->input->post('kode_obat', true),
            "nama_obat" => $this->input->post('nama_obat', true),
            "jenis_obat" => $this->input->post('jenis_obat', true),
            "harga_beli" => $this->input->post('harga_beli', true),
            "jumlah" => $this->input->post('jumlah', true),
            "satuan" => $this->input->post('satuan', true),
            "keterangan" => $this->input->post('keterangan', true),
            "total" => $this->input->post('total', true),
            "tgl_transaksi" => $this->input->post('tgl_transaksi', true),
        ];
        $this->db->insert('tbl_pengadaan_obat', $data);
    }

    public function hapusdatapengadaanobat($id_pengadaan){
        $this->db->where('id_pengadaan', $id_pengadaan);
        $this->db->delete('tbl_pengadaan_obat');
    }

    public function getpengadaanobatByID($id_pengadaan){
        return $this->db->get_where('tbl_pengadaan_obat',['id_pengadaan'=> $id_pengadaan])->row_array();
    }
    public function ubahdatapengadaanobat(){
        $data=[
            "id_pengadaan" => $this->input->post('id_pengadaan', true),
            "no_trans" => $this->input->post('no_trans', true),
            "kode_supplier" => $this->input->post('kode_supplier', true),
            "kode_obat" => $this->input->post('kode_obat', true),
            "nama_obat" => $this->input->post('nama_obat', true),
            "jenis_obat" => $this->input->post('jenis_obat', true),
            "harga_beli" => $this->input->post('harga_beli', true),
            "jumlah" => $this->input->post('jumlah', true),
            "satuan" => $this->input->post('satuan', true),
            "keterangan" => $this->input->post('keterangan', true),
            "total" => $this->input->post('total', true),
            "tgl_transaksi" => $this->input->post('tgl_transaksi', true),
        ];
        $this->db->where('id_pengadaan', $this->input->post('id_pengadaan'));
        $this->db->update('tbl_pengadaan_obat', $data);
    }
    public function cariDatapengadaanobat(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_pengadaan',$keyword);
        $this->db->or_like('nama_obat',$keyword);
        return $this->db->get('tbl_pengadaan_obat')->result_array();
    }
}
?>