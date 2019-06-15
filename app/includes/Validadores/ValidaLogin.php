<?php

require_once DAO . 'UsuarioDAO.php';
require_once MODELS . 'Usuario.php';

class ValidaLogin
{
    private $erro;
    private $usuarioValido;

    public function validaLoginUsuario(Usuario $usuario) : bool
    {
        $dao = new UsuarioDAO();
        $usuarioDao = $dao->carregaUsuario($usuario);
        
        if (isset($usuarioDao)) {
            if (password_verify($usuario->getSenha(), $usuarioDao->senha)) {
                $usuario = new Usuario();
                $usuario->setId($usuarioDao->id_usuario);
                $usuario->setNome($usuarioDao->nome);
                $usuario->setSenha($usuarioDao->senha);
                $usuario->setEmail($usuarioDao->email);
                $usuario->setStatus($usuarioDao->status);
                $usuario->setUltAcesso("");
                $this->usuarioValido = $usuario;
                return true;
            } elseif ($usuarioDao->status != "Ativo") {
                $this->erro = "Usuário " . $usuarioDao->status . "!";
                return false;
            } else {
                $this->erro = "Usuário ou Senha inválidos!";
                return false;
            }
        }
        
        $this->erro = "Erro desconhecido! Entre em contato com o suporte";
        return false;
    }

    public function getErro() : string
    {
        return $this->erro;
    }

    public function getUsuarioValido()
    {
        return $this->usuarioValido;
    }
}
