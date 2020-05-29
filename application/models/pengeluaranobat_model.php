<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pengeluaranobat_model extends CI_Model{
    public function getAllpengeluaranobat(){
        return $this->db->get('tbl_pengeluaran_obat')->result_array();
    }

    public function tambahdatapengeluaranobat(){
        $data=[
            "id_pengeluaran" => $this->input->post('id_pengeluaran', true),
            "no_terima_obat" => $this->input->post('no_terima_obat', true),
            "no_rekamedis" => $this->input->post('no_rekamedis', true),
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "kode_obat" => $this->input->post('kode_obat', true),
            "nama_obat" => $this->input->post('nama_obat', true),
            "jenis_obat" => $this->input->post('jenis_obat', true),
            "dosis_aturan_obat" => $this->input->post('dosis_aturan_obat', true),
            "jumlah" => $this->input->post('jumlah', true),
            "satuan" => $this->input->post('satuan', true),
            "tgl_serah_obat" => $this->input->post('tgl_serah_obat', true),
        ];
        $this->db->insert('tbl_pengeluaran_obat', $data);
    }

    public function hapusdatapengeluaranobat($id_pengeluaran){
        $this->db->where('id_pengeluaran', $id_pengeluaran);
        $this->db->delete('tbl_pengeluaran_obat');
    }

    public function getpengeluaranobatByID($id_pengeluaran){
        return $this->db->get_where('tbl_pengeluaran_obat',['id_pengeluaran'=> $id_pengeluaran])->row_array();
    }
    public function ubahdatapengeluaranobat(){
        $data=[
            "id_pengeluaran" => $this->input->post('id_pengeluaran', true),
            "no_terima_obat" => $this->input->post('no_terima_obat', true),
            "no_rekamedis" => $this->input->post('no_rekamedis', true),
            "nama_pasien" => $this->input->post('nama_pasien', true),
            "kode_obat" => $this->input->post('kode_obat', true),
            "nama_obat" => $this->input->post('nama_obat', true),
            "jenis_obat" => $this->input->post('jenis_obat', true),
            "dosis_aturan_obat" => $this->input->post('dosis_aturan_obat', true),
            "jumlah" => $this->input->post('jumlah', true),
            "satuan" => $this->input->post('satuan', true),
            "tgl_serah_obat" => $this->input->post('tgl_serah_obat', true),
        ];
        $this->db->where('id_pengeluaran', $this->input->post('id_pengeluaran'));
        $this->db->update('tbl_pengeluaran_obat', $data);
    }
    public function cariDatapengeluaranobat(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_pengeluaran',$keyword);
        $this->db->or_like('nama_obat',$keyword);
        return $this->db->get('tbl_pengeluaran_obat')->result_array();
    }
}
?>