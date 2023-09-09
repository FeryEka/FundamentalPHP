<?php
    class Smartphone_model{
        private $table = 'smartphones';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllSmartphone(){
            $this->db->query('SELECT * FROM '. $this->table);
            return $this->db->resultSet();

        }

        public function getSmartphoneById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function tambahDataSmartphone($data){
            $query = "INSERT INTO mahasiswa 
                        VALUES
                        ('' :nama, :merek, :chipset, :ram, :harga, :gambar)";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('merek', $data['merek']);
            $this->db->bind('chipset', $data['nama']);
            $this->db->bind('ram', $data['nama']);
            $this->db->bind('harga', $data['nama']);
            $this->db->bind('gambar', $data['nama']);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }