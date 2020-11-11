<?php
require_once("./Models/login.php");
//require_once("./pages/menssage.php");//

if(!empty($_POST)){
    $login = new login;
    $login->email = $_POST['email'];
    $login->password = $_POST['password'];
    
    try{
        $login->valida();
        $login->salvar();
        aviso("Cadastrado com sucesso";)
    }
    catch(Exception $e){
        error($e->getMessage());
    }
}
?>