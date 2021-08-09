<?php  

require_once ('../models/Usuario.php');
require_once ('../models/UsuarioDAO.php');
require_once ('../config/Database.php');

class UsuarioController {

    public function insereUsuario() {
        $nome = $_POST['nome'];
        $datanasc = $_POST['datanasc'];
        $nickname = $_POST['nickname'];
        $conexao = new Database();
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setDatanasc($datanasc);
        $usuario->setNickname($nickname);
        $usuarioDao = new UsuarioDao();
        $usuarioDao->adiciona($conexao, $usuario);
    }

}