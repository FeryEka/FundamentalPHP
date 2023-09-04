<?php
    abstract class Produk {
        // membuat property dan dapat diisi nilainya sebagai default
        // property dengan visibility protected yang propertynya hanya dapat diakses di class dan turunannya sendiri
        protected $judul, 
               $penulis,
               $penerbit,
               $harga,
               $diskon = 0;

        // Membuat Construct
        public function __construct($judul = "judul", $penulis = "penulisan", $penerbit = "penerbitan", $harga = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // contoh method setter
        public function setJudul( $judul ){
            $this->judul = $judul;
        }

        // contoh method getter
        public function getJudul(){
            return $this->judul;
        }

        public function setPenulis( $penulis ){
            $this->penulis = $penulis;
        }

        public function getPenulis(){
            return $this->penulis;
        }

        public function setPenerbit( $penerbit ){
            $this->penerbit = $penerbit;
        }

        public function getPenerbit(){
            return $this->penerbit;
        }

        public function setHarga( $harga ){
            $this->harga = $harga;
        }

        public function getHarga(){
            return $this->harga = ( $this->harga * $this->diskon / 100);
        }

        public function setDiskon( $diskon ){
            $this->diskon = $diskon;
        }

        public function getDiskon(){
            return $this->diskon;
        }

        // membuat method (sebenernya function kalo di dalam class penyebutannya method)
        public function getLabel() {
            // $this-> akan mengacu pada variable pada property class
            return "$this->penulis, $this->penerbit";
        }

        abstract public function getInfo();
    }
?>