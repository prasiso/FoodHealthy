<?php
//require_once("./Models/login.php");
//if(!empty($_POST)){
//$login = new login;
//$login->email = $_POST['email'];
//$login->password = $_POST['password'];

//try{
//$login->valida();
//$login->salvar();
//aviso("Cadastrado com sucesso";)
//}
//catch(Exception $e){
//error($e->getMessage());
//}
//}
require_once("./models/usuario.php");
require_once("./pages/page-message.php");
$usuario = new Usuario;

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    switch ($_POST["action"]) {
        case "cad":
            cadastro();
            break;

        case "log":
            entrar();
            break;
            
        default:
            echo "<script> window.location.href = 'http://localhost/FoodHealthy/index.php';</script>";
            break;
    }
}

if ($method === "GET") {
    switch ($_GET["action"]) {
        case "sair":
            sair();
            break;

        default:
            echo "<script> window.location.href = 'http://localhost/FoodHealthy/index.php';</script>";
            break;
    }
}

/* function validar(){

} */
function cadastro()
{
    $usuario = new Usuario;
    $usuario->nome = $_POST['nome'];
    $usuario->email = $_POST['email'];
    $usuario->tel = $_POST['tel'];
    $usuario->pws = $_POST['pws'];
    $usuario->datanasc = $_POST['datanasc'];
    $confpws = $_POST['confpws'];
    try {
        $usuario->valida($confpws);
        $usuario->salvar();
        alerta("Usuario já Cadastrado");
        $usuario = new Usuario;
        echo "<script> this.form.reset();</script>";
        //echo "<script> window.location.href = 'http://localhost/phpSchool/index.php';</script>";
    } catch (Exception $erro) {
        error($erro->getMessage());
    }
}

function entrar()
{
    $usuario = new Usuario;
    $email = $_POST['email'];
    $pws = $_POST['pws'];
    try {
        $result = $usuario->login($email, $pws);      
        if ($result) {
            $_SESSION["user"] = $result;
            //echo "<script> window.location.href = 'http://localhost/projetos/FoodHealthy/index.php?p=dash-user';</script>";
        } else {
            session_destroy();
        }
        //header("Location: http://localhost/phpSchool/index.php");
    } catch (Exception $erro) {
        error($erro->getMessage());
    }
}

function sair(){
    session_destroy();
     echo "<script> window.location.href = 'http://localhost/projetos/FoodHealthy/index.php?p=dash-user';</script>";

}
