<?php

class ViagemDAO extends Database
{
    public function insere($viagem)
    {
        try {
            $pdo = parent::getConexao();
                
            $parametros = array(
                $viagem['nome'],
                $viagem['imagem'],
                $viagem['link']
            );
            $query = $pdo->prepare("
                INSERT INTO viagens SET nome_apoiador=?, imagem=?, link=?
            ");
            $query->execute($parametros);

            $pdo = null;

            return true;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }

    public function atribuiEvento($idUsuario, $chave)
    {
        try {
            $pdo = parent::getConexao();
                
            $parametros = array(
                $chave,
                $idUsuario
            );
            $query = $pdo->prepare("
                INSERT INTO evento_tem_apoiadores SET evento_id_evento=?, apoiador_id_apoiador=?
            ");
            $query->execute($parametros);

            $pdo = null;

            return true;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }

    public function edita($viagem)
    {
        try {
            $pdo = parent::getConexao();
            
            $parametros = array(
                $viagem['nome'],
                $viagem['imagem'],
                $viagem['link'],
                $viagem['id']
            );
            $query = $pdo->prepare("
                UPDATE viagens SET nome_apoiador=?, imagem=?, link=?
                WHERE id_apoiador=?
            ");
            
            $query->execute($parametros);
            
            $pdo = null;

            return true;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }

    public function exclui($viagem)
    {
        try {
            $pdo = parent::getConexao();
            
            $parametros = array(
                $viagem['id'],
            );
            $query = $pdo->prepare("
                DELETE FROM viagens WHERE id_apoiador = ?;
            ");
            
            $query->execute($parametros);
            
            $pdo = null;

            return true;
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }

    /**
     * Carrega as viagens que um viajante organiza
     */ 
    public function carregaViagensDoOrganizador($idUsuario)
    {
        try {
            $pdo = parent::getConexao();
            
            $sql = "SELECT id_viagem, identificador, destino, chave 
                FROM usuario_org_viagem, viagens 
                WHERE org_id_usuario = {$idUsuario} 
                AND org_id_viagem = id_viagem";
            $viagens = $pdo->query($sql);
            
            $pdo=null;
            
            return $viagens->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }

    /**
     * Carrega as viajantes por chave da viagem
     */ 
    public function carregaViajantesPorViagem($chave)
    {
        try {
            $pdo = parent::getConexao();
            
            $sql = "SELECT nome_apoiador, imagem, link 
                FROM viagens, eventos, evento_tem_apoiadores 
                WHERE id_apoiador = apoiador_id_apoiador 
                AND id_evento = evento_id_evento
                AND id_evento = {$chave}";
            $viagens = $pdo->query($sql);
            
            $pdo=null;
            
            return $viagens->fetchAll();
        } catch (PDOException $e) {
            throw new PDOException($e);
        }
    }
}
