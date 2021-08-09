<?php

    class Database{

        private $_servername = "localhost";
        private $_database = "si_pweb";
        private $_username = "root";
        private $_password = "";


        public function conecta(){
            $conexao = new mysqli($this->_hostname, $this->_username, $this->_password, $this->_database);
            return $conexao;
            if($conexao->connect_errno){
                echo "Falha ao conectar: (" .$mysqli->connect_errno . ")" . $mysqli->conect_error;
            }
        }
    }
?>