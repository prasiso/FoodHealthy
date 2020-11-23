<?php
require_once("./dao/conecta.php");
class Produto
{
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;
    public $tipo_produto;
    public $ativo = true;

    public function salvar()
    {
        try {
            $dao = new DAO;
            $sql = "INSERT into produto(nome, descricao, valor, ativo, imagem, tipo_produto) VALUES (:nome, :descricao, :valor, :ativo, :imagem, :tipo_produto)";
            $stman = $dao->conecta()->prepare($sql);
            $stman->bindParam(":nome", $this->nome);
            $stman->bindParam(":descricao", $this->descricao);
            $stman->bindParam(":valor", $this->valor);
            $stman->bindParam(":ativo", $this->ativo);
            $stman->bindParam(":imagem", $this->imagem);
            $stman->bindParam(":tipo_produto", $this->tipo_produto);
            $stman->execute();
        } catch (Exception $e) {
            throw new Exception("Erro ao Cadastrar:", $e->getMessage());
        }
    }
    public function getAll()
    {
        try {
            $dao = new DAO;
            $sql = "SELECT * FROM produto";
            $stman = $dao->conecta()->prepare($sql);
            $stman->execute();
            $result = $stman->fetchAll();
            return $result;
        } catch (Exception $e) {
            throw new Exception("Erro ao Cadastrar:", $e->getMessage());
        }
    }
}
