<?php

require_once "Conexao.php";
require_once "Usuario.php";

class UsuarioModel
{

    public $tabela = "usuarios";

    public function create(usuario $c){
        try{
            $sql = "INSERT INTO $this->tabela (nome, email, senha, telefone) VALUES (?,?,?,?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getSenha());
            $stmt->bindValue(4, $c->getTelefone());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'usuario');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'usuario');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(usuario $c){
        try{
            $sql = "UPDATE $this->tabela SET genero = ?, usuario = ?, descricao = ?, diretor = ?, duracao = ?, estudante = ?, WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getGenero());
            $stmt->bindValue(2, $c->getusuario());
            $stmt->bindValue(3, $c->getDescricao());
            $stmt->bindValue(4, $c->getDiretor());
            $stmt->bindValue(5, $c->getDuracao());
            $stmt->bindValue(6, $c->getEstudante());
            $stmt->bindValue(7, $c->getId());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
