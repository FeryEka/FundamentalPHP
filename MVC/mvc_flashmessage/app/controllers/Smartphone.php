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

        public function tambah(){
            if( $this->model('Smartphone_model')->tambahDataSmartphone($_POST)>0){
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: '. BASEURL . '/smartphone');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: '. BASEURL . '/smartphone');
                exit;
            }
        }
    }