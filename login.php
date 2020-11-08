<?php

require_once("../dao/Conecta.php");

class login {

    public $email;
    public $password;
    
}

public function salvar () {
    try{ 
    $dao = new DAO();
    $sql ="INSERT into login(login.email, login.password) 
    VALUES (:email, :password)";
    $stman = $dao->conecta()->prepare($sql);
    $stman->bindParam(":email", $this->email);
    $stman->bindParam(":password", $this->password);
    $stman->execute();
    echo ("Cadastrado"); }
    catch (Exception $e){
        throw new Exception ("erro ao cadrastar", $e->menssage()); 

    }
}   


public function valida(){
    $error = "";
    if ($this->email == ""){
        $error .= "Email em branco. <br>";          
    }
if ($this->password ==""){
    $error .= "Senha em branco. <br>";
}