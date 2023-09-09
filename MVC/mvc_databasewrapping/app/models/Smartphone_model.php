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
    }