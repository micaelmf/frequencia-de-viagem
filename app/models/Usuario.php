<?php 
class Usuario
{
    private $idUsuario;
    private $usuario;
    private $senha;
    private $nomeCompleto;
    private $email;
    private $cpf;
    private $tipo;
    private $ultAcesso;
    private $dtCriacao;

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @return  self
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of nomeCompleto
     */ 
    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    /**
     * Set the value of nomeCompleto
     *
     * @return  self
     */ 
    public function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of ultAcesso
     */ 
    public function getUltAcesso()
    {
        return $this->ultAcesso;
    }

    /**
     * Set the value of ultAcesso
     *
     * @return  self
     */ 
    public function setUltAcesso($ultAcesso)
    {
        $this->ultAcesso = $ultAcesso;

        return $this;
    }

    /**
     * Get the value of dtCriacao
     */ 
    public function getDtCriacao()
    {
        return $this->dtCriacao;
    }

    /**
     * Set the value of dtCriacao
     *
     * @return  self
     */ 
    public function setDtCriacao($dtCriacao)
    {
        $this->dtCriacao = $dtCriacao;

        return $this;
    }
}