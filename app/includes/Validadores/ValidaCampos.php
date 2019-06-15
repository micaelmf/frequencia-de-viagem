<?php

class ValidaCampos
{
    private $erros = array();

    public function validaCampo($campo, $valor, $tipo = null, $min = null, $max = null)
    {
        if ($tipo == null) {
            $campoFiltrado = filter_var($valor, FILTER_SANITIZE_SPECIAL_CHARS);
            if ($this->validaCampoVazio($campoFiltrado)) {
                $this->erros[] = "Preencha o campo " . $campo . ".";
            }
            return $campoFiltrado;
        }
        if ($tipo == "senha") {
            $campoFiltrado = filter_var($valor, FILTER_SANITIZE_SPECIAL_CHARS);
            $campoVazio = $this->validaCampoVazio($campo, $campoFiltrado);
            
            if ($campoVazio) {
                $this->erros[] = "Preencha o campo " . $campo;
            }
            if (!$this->validaQuantidadeDeCaracteres($valor, $min, $max)) {
                $this->erros[] = "O campo ".$campo." tem ".strlen($valor)." caracteres. Digite no mínimo ".$min." e no máximo ".$max." caracteres.";
            }
            return password_hash($valor, PASSWORD_DEFAULT) ;
        }
        if ($tipo == "email") {
            $campoFiltrado = filter_var($valor, FILTER_SANITIZE_EMAIL);
            $campoVazio = $this->validaCampoVazio($campoFiltrado);
            $campoQuantidadeDeCaracteresValida = $this->validaQuantidadeDeCaracteres($campoFiltrado, 8, 255);
            $campoValido = $this->validaEmail($campoFiltrado);

            if ($campoVazio) {
                $this->erros[] = "Preencha o campo " . $campo;
            }
            if (!$campoQuantidadeDeCaracteresValida) {
                $this->erros[] = "O e-mail deve ter no mínio 8 e no máximo 255 caracteres.";
            }
            if (!$campoValido) {
                $this->erros[] = "Digite um e-mail válido.";
            }
            return $campoFiltrado;
        }
        if ($tipo == 'numero') {
            $campoFiltrado = filter_var($valor, FILTER_SANITIZE_SPECIAL_CHARS);
            $campoVazio = $this->validaCampoVazio($campoFiltrado);

            if ($campoVazio) {
                $this->erros[] = "Preencha o campo " . $campo;
            }
            if (!$this->validaCampoNumerico($campoFiltrado)) {
                $this->erros[] = $campo . " não tem valor numérico!";
            }
            return $campoFiltrado;
        }
        if ($tipo == 'status') {
            $campoFiltrado = filter_var($valor, FILTER_SANITIZE_SPECIAL_CHARS);
            $campoVazio = $this->validaCampoVazio($campoFiltrado);
            if ($campoVazio) {
                $this->erros[] = "Preencha o campo " . $campo;
            }
            if ($this->validaStatus($campoFiltrado)) {
                $this->erros[] = "Status inválido";
            }
            return $campoFiltrado;
        }
        if ($tipo == 'data') {
            $campoFiltrado = filter_var($valor, FILTER_SANITIZE_SPECIAL_CHARS);
            $campoVazio = $this->validaCampoVazio($campoFiltrado);
            $dataValida = $this->validaData($campoFiltrado);

            if ($campoVazio) {
                $this->erros[] = "Preencha o campo " . $campo;
            }
            if (!$dataValida) {
                $this->erros[] = $campo ." não possui um data válida";
            }
            return $campoFiltrado;
        }
        if ($tipo == 'url') {
            $campoVazio = $this->validaCampoVazio($valor);
            $urlValida = filter_var($valor, FILTER_VALIDATE_URL);

            if ($campoVazio) {
                $this->erros[] = "Preencha o campo " . $campo;
            }
            if (!$urlValida) {
                $this->erros[] = $campo ." não possui uma URL válida";
            }
            return $urlValida;
        }
    }

    private function validaCampoVazio($valor)
    {
        return empty($valor);
    }

    private function validaQuantidadeDeCaracteres($valor, $min, $max)
    {
        if (strlen($valor) < $min || strlen($valor) > $max) {
            return false;
        }
        return true;
    }

    private function validaEmail($valor)
    {
        if (!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/", $valor)) {
            return false;
        }
        return true;
    }

    private function validaCampoNumerico($valor)
    {
        return preg_match("/^[0-9]+$/", $valor);
    }

    private function validaStatus($valor)
    {
        $status = array("Ativo", "Inativo", "Bloqueado");
        if (in_array($valor, $status)) {
            return false;
        }
        return true;
    }

    private function validaData($valor)
    {
        $data = explode("-", $valor); // fatia a string $valor em pedacos, usando - como referência

        if (sizeof($data) != 3) {
             return false;
        }

        $d = $data[2];
        $m = $data[1];
        $y = $data[0];

        return checkdate($m, $d, $y);
    }

    public function getErros()
    {
        return $this->erros;
    }
}
