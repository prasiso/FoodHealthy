<?php
require_once("./dao/conecta.php");

class Usuario{

    public $nome;
    public $email;
    public $tel;
    public $pws;
    public $datanasc;
    public $ativo = true;

    public function valida($conf){
        $error = ""; 
        if ($this->nome == ""){
            $error .= "Nome em branco.<br>";
        }

        if ($this->email == ""){
            $error .= "E-mail em branco.<br>";
        }  
        else if(!strstr($this->email,"@") && !strstr($this->email,".")  ){
            $error .= "E-mail invalido.<br>";
        }

        if ($this->tel == ""){
            $error .= "Telefone em branco.<br>";
        }

        if ($this->pws == ""){
            $error .= "Senha em branco.<br>";
        } 
        else if(strlen($this->pws) < 6) {
            $error .= "Senha senha muito curta! Minimo de 6 caracteres.<br>";
        }
        else if($this->pws != $conf) {
            $error .= "Senhas diferentes.<br>";
        }

        if ($error != ""){
            throw new Exception($error);
            return false;
        }

        return true;       
    }


    public function login($email, $senha){
        try {
            $pass = md5($senha, $email);
            $dao = new DAO;
            $sql = "SELECT id, nome, email FROM usuario WHERE email = :email AND pws = :senha ";
            $stman = $dao->conecta()->prepare($sql);
            $stman->bindParam(":senha", $pass);
            $stman->bindParam(":email", $email);
            $stman->execute();
            $result = $stman->fetchAll();
            return $result;
        }catch(Exception $e){
            throw new Exception("Erro ao Entrar:", $e->getMessage());
        }
    }

    public function salvar(){
        try{
            $date = date("Y-m-d", strtotime($this->datanasc));
            //$pass = crypt($this->pws, $this->email);
            $pass = md5($this->pws, $this->email);
            $dao = new DAO;
            $sql = "INSERT into usuario(nome, email, tel, ativo, pws, datanasc) VALUES (:nome, :email, :tel, :ativo, :senha, :datanasc)";
            $stman = $dao->conecta()->prepare($sql);
            $stman->bindParam(":nome", $this->nome);
            $stman->bindParam(":email", $this->email);
            $stman->bindParam(":tel", $this->tel);
            $stman->bindParam(":ativo", $this->ativo);
            $stman->bindParam(":datanasc",$date);
            $stman->bindParam(":senha",$pass);
            $stman->execute();
        }catch(Exception $e){
            throw new Exception("Erro ao Cadastrar:", $e->getMessage());
        }
    }
    
}