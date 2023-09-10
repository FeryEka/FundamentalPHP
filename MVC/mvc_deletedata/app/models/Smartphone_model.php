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
            $query = "INSERT INTO smartphones 
                        VALUES
                        ('', :nama, :merek, :chipset, :ram, :harga, :gambar)";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('merek', $data['merek']);
            $this->db->bind('chipset', $data['chipset']);
            $this->db->bind('ram', $data['ram']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('gambar', $data['gambar']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataSmartphone($id){
            $query = "DELETE FROM smartphones WHERE id = :$id";
            $this->db->query($query);
            $this->db->bind('id', $id);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }