<?php
    class About extends controller{
        public function index($nama = 'Fery Eka Mahendra', $jurusan = 'Teknik Informatika'){
            $data['nama'] = $nama;
            $data['jurusan'] = $jurusan;
            $data['judul'] = 'About Me';
            $this->view('templates/header', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
        }

        public function page(){
            $data['judul'] = 'Pages';
            $this->view('templates/header', $data);
            $this->view('about/page');
            $this->view('templates/footer');
        }
    }
?>