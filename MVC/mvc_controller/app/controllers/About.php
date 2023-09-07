<?php
    class About extends controller{
        public function index($nama = 'Fery Eka Mahendra', $jurusan = 'Teknik Informatika'){
            echo "Nama Saya $nama. Jurusan $jurusan";
        }

        public function page(){
            echo "Welcome on my about/pages";
        }
    }
?>