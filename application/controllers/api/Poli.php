<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Poli extends REST_Controller{
    public function __construct(){
        $this->load->model('Poli_model','tbl_poli');
    }
    
    public function index_get(){
        $id = $this->get('id_poli');
        if($id === null){
            $tbl_poli = $this->tbl_poli->getPoli();
        }else{
            $tbl_poli = $this->tbl_poli->getPoli($id);
        }

        if($tbl_poli){
            $this->response([
                'status' => true,
                'data' => $tbl_poli
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete() { 
        $id = $this->delete('id_poli'); 
        if($id === null){ 
            $this->response([ 
                'status' =>false, 
                'message' => 'provide an id!' 
            ], REST_Controller::HTTP_BAD_REQUEST); 
        }else{ 
            if($this->tbl_poli->deletePoli($id) > 0){ 
                $this->response([ 
                    'status' => true, 
                    'id_poli' => $id, 'message' => 'deleted.' 
                ], REST_Controller::HTTP_OK); 
            }else{
                $this->response([ 
                    'status' => true, 
                    'message' => 'id not found!' 
                ], REST_Controller::HTTP_BAD_REQUEST); 
            } 
        } 
    } 

    public function index_post() { 
        $data = [ 
            'id_poli' => $this->post('id_poli'), 
            'nama_poli' => $this->post('nama_poli'), 
            'ruang_poli' => $this->post('ruang_poli'),
        ]; 
        if($this->tbl_poli->createPoli($data) > 0){ 
            $this->response([ 
                'status' => true, 
                'message' => 'new Poli has been created' 
            ], REST_Controller::HTTP_CREATED); 
        } else { 
            $this->response([ 
                'status' => false, 
                'message' => 'failed to create new data!' 
            ], REST_Controller::HTTP_BAD_REQUEST); 
        } 
    } 
    
    public function index_put() { 
        $id = $this->put('id_poli'); 
        $data = [ 
            'id_poli' => $this->put('id_poli'), 
            'nama_poli' => $this->put('nama_poli'),
            'ruang_poli' => $this->put('ruang_poli'),
        ];
        if($this->tbl_poli->updatePoli($data, $id) > 0){ 
            $this->response([ 
                'status' => true, 
                'message' => 'Data Poli has been updated' 
            ], REST_Controller::HTTP_OK); 
        } else { 
            $this->response([ 
                'status' => false, 
                'message' => 'Failed to update data!' 
            ], REST_Controller::HTTP_BAD_REQUEST); 
        } 
    }
}
?>