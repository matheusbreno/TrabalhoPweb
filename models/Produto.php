<?php 

    class Produto {

        private $id;
        private $nome;
        private $descricao;
        private $preco;

        public function getIdProduto() {
            return $this->id;
        }

        public function setIdProduto($id) {
            $this->id = $id;
        }

        public function getNomeProduto() {
            return $this->nome;
        }

        public function setNomeProduto($nome) {
            $this->nome = $nome;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

    }