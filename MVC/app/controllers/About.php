<?php
    class About{
        public function index($nama = 'Fery Eka Mahendra', $jurusan = 'Teknik Informatika'){
            echo "Halo, nama saya $nama, saya dari jurusan $jurusan";
        }

        public function page(){
            echo 'About/page';
        }
    }
?>