class Viagem 
{
    private $idViagem;
    private $identificador;
    private $destino;
    private $chave;

    /**
     * Get the value of idViagem
     */ 
    public function getIdViagem()
    {
        return $this->idViagem;
    }

    /**
     * Set the value of idViagem
     *
     * @return  self
     */ 
    public function setIdViagem($idViagem)
    {
        $this->idViagem = $idViagem;

        return $this;
    }

    /**
     * Get the value of identificador
     */ 
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set the value of identificador
     *
     * @return  self
     */ 
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get the value of destino
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     *
     * @return  self
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get the value of chave
     */ 
    public function getChave()
    {
        return $this->chave;
    }

    /**
     * Set the value of chave
     *
     * @return  self
     */ 
    public function setChave($chave)
    {
        $this->chave = $chave;

        return $this;
    }

}