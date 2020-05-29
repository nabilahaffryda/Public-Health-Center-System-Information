<?php

class Poli_model extends CI_model{
    public function getPoli($id = null){
        if($id === null){
            return $this->db->get('tbl_poli')->result_array();
        }else{
            return $this->db->get_where('tbl_poli', ['id_poli' => $id])->result_array();
        }
    }

    public function deletePoli($id) { 
        $this->db->delete('tbl_poli',['id_poli' => $id]); 
        return $this->db->affected_rows(); 
    } 
    public function createPoli($data) { 
        $this->db->insert('tbl_poli', $data); 
        return $this->db->affected_rows(); 
    } 
    public function updatePoli($data, $id) { 
        $this->db->update('tbl_poli', $data,['id_poli' =>$id]); 
        return $this->db->affected_rows(); 
    }
}
?>