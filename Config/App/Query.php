<?php
    class Query extends Conexion{
        private $pdo;
        private $con;
        private $sql;
        public function __construct() {
            $this->pdo = new Conexion();
            $this->con = $this->pdo->conect();
        }
        function select(string $sql){
            $this->sql = $sql;
            $result = $this->con->prepare($this->sql);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;

        }
    }

?>