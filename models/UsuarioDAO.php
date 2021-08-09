<?php  

    class UsuarioDAO {

        function adiciona(Database $conexao, Usuario $usuario) {

            $query = "INSERT INTO usuarios (nome, datanasc, nickname) VALUES ('{$usuario->getNome()}', '{$usuarioo->getDatanasc()}', '{$usuario->getNickname()}')";  
            mysqli_query($conexao->conecta(), $query);
        }

    }