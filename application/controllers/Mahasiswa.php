<?php
class Mahasiswa extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
        
        
    }

    public function index(){
        // 
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        // if ($this->input->post('keyword')) {
        //     $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        // }
        $data['judul'] = 'Daftar Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data) ;
        $this->load->view('templates/footer');
    }
}