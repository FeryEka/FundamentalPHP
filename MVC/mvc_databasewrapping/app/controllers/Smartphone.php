<?php
    class Smartphone extends Controller{
        public function index(){
            $data['judul'] = 'Daftar Smartphone';
            $data['smartphones'] = $this->model('Smartphone_model')->getAllSmartphone();
            $this->view('templates/header', $data);
            $this->view('smartphone/index', $data);
            $this->view('templates/footer');  
        }

        public function detail($id){
            $data['judul'] = 'Detail Smartphone';
            $data['smartphones'] = $this->model('Smartphone_model')->getSmartphoneById($id);
            $this->view('templates/header', $data);
            $this->view('smartphone/detail', $data);
            $this->view('templates/footer');  
        }
    }