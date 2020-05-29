<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller{
    private $url;
    public function __construct(){
        parent::__construct();
        $this->url = new GuzzleHttp\Client(['base_url' => "htpp://localhost:8000/api/"]);
        $this->load->library('form_validation');
    }
    
    public function index(){
        $id=$this->session->userdata('id_poli');
        try{
            $response = $this->url->get('poli/',$id);
        }catch(GuzzleException $th){
            echo $th->getMessage();
            return null;
        }
        if($response->getStatusCode() == 200){
            $body = json_decode($response->getBody()->getContent(), true);
            $data['tbl_poli'] = $body['data'];
            $this->load->view('template/header', $data);
            $this->load->view('poli/index', $data);
            $this->load->view('template/footer');
        }
    }
    public function tambah(){
        try{
            $response = $this->url->post('poli/',[
                'form_params' => [
                    'id_poli' => $this->input->post('id_poli'), 
                    'nama_poli' => $this->input->post('nama_poli'), 
                    'ruang_poli' => $this->input->post('ruang_poli'),
                ]
            ]);
        }catch(GuzzleException $th){
            echo $th->getMessage();
            return null;
        }
        if($response->getStatusCode() == 201){
            $this->session->set_flashdata('flash', 'Berhasil Disimpan');
            redirect('poli','refresh');
        }else{
            $this->session->set_flashdata('flash', 'Gagal Disimpan');
            redirect('poli','refresh');
        }
    }

    public function hapus(){
        $id=$this->session->userdata('id_poli');
        try{
            $response = $this->url->get('poli/',$id);
        }catch(GuzzleException $th){
            echo $th->getMessage();
            return null;
        }
        if($response->getStatusCode() == 204){
            $this->session->set_flashdata('flash', 'Berhasil Hapus');
            redirect('poli','refresh');
        }else{
            $this->session->set_flashdata('flash', 'Gagal Hapus');
            redirect('poli','refresh');
        }
    }
    public function edit(){
        $id=$this->session->userdata('id_poli');
        if($this->input->post('submit')){
            try{
                $response = $this->url->get('poli/',$id);
            }catch(GuzzleException $th){
                echo $th->getMessage();
                return null;
            }
        }
        if($response->getStatusCode() == 200){
            $this->form_validation->set_rules('id_poli', 'ID Poli', 'required');
            $this->form_validation->set_rules('nama_poli', 'Nama Poli', 'required');
            $this->form_validation->set_rules('ruang_poli', 'Ruang Poli', 'required');

            if ($this->form_validation->run() == FALSE) {
                redirect('poli');
            } else {
                try{
                    $response = $this->url->post('poli/' . $id, [
                        'form_params' => [
                            'id_poli' => $this->input->post('id_poli'), 
                            'nama_poli' => $this->input->post('nama_poli'), 
                            'ruang_poli' => $this->input->post('ruang_poli'),
                        ]
                    ]);
                }catch(GuzzleException $th){
                    echo $th->getMessage();
                    return null;
                }
                if($response->getStatusCode() == 202){
                    $this->session->set_flashdata('flash', 'Berhasil Update');
                    redirect('poli','refresh');
                }else{
                    $this->session->set_flashdata('flash', 'Gagal Update');
                    redirect('poli','refresh');
                }
            }
        }else{
            $this->input->post('submit');
        }
    }
}
?>