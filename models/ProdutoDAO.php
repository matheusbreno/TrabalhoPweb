<?php  

    class ProdutoDAO {

        function adiciona(Database $conexao, Produto $produto) {

            $query = "INSERT INTO produtos (nome, descricao, preco) VALUES ('{$produto->getNomeProduto()}', '{$produto->getDescricao()}', '{$produto->getPreco()}')";  
            mysqli_query($conexao->conecta(), $query);
        }

    }