<?php 

    class Usuario {

        private $id;
        private $nome;
        private $datanasc;
        private $nickname;

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getDatanasc() {
            return $this->datanasc;
        }

        public function setDatanasc($datanasc) {
            $this->datanasc = $datanasc;
        }

        public function getNickname() {
            return $this->nickname;
        }

        public function setNickname($nickname) {
            $this->nickname = $nickname;
        }

    }