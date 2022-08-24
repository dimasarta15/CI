<?php

class Mahasiswa extends CI_Controller {
    public function index () {
        $this->load->model('mahasiswa_model');
        $this->load->library('table');
        $data ['mhs'] = $this->mahasiswa_model->get();

        $this->load->view('mahasiswa/daftar',$data);
     //print_r($mhs);


    }
    
    public function edit(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nrp','NRP','required');
        if($this->form_validation->run() == false){
            $this->load->view('mahasiswa/form_edit');
        } else {
            echo 'sukses';
        }

        $this->load->view('mahasiswa/form_edit');
    }
}