<?php
    class Smartphone_model{
        private $dbh; //database handler
        private $stmt;

        public function __construct()
        {
            // data source name
            $dsn = 'mysql:host=localhost;dbname=rykara_cell';

            try{
                $this->dbh = new PDO($dsn, 'root', '');
            } catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function getAllSmartphone(){
            $this->stmt = $this->dbh->prepare('SELECT * FROM smartphones');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }