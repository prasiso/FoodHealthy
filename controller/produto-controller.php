<?php
require_once("./models/produto.php");
require_once("./pages/page-message.php");
$produto = new Produto;
if (!empty($_POST)) {
    switch ($_POST["action"]) {
        case "cadastro":
            cadastro();
            break;
    }
}
if (!empty($_GET)) {
    if (isset($_GET["action"])) {
        switch ($_GET["action"]) {
            case "list":
                $produtos = listarTodos();
                break;
        }
    }
}
function cadastro()

{
    $produto = new Produto;
    if (isset($_FILES['imagem'])) {
        $ext = strtolower(substr($_FILES['imagem']['name'], -4)); //Pega a extensão do arquivo
        $new_name = md5(time()) . $ext; //Define um novo nome para o arquivo
        $dir = 'img-upload/';
        /* if ($produto->tipo_produto == "sobremesa") {
            $dir = 'img-upload/sobremesa/'; //Diretório para uploads de sobremesa
        }
        if ($produto->tipo_produto == "bebida") {
            $dir = 'img-upload/bebidas/'; //Diretório para uploads de bebida 
        }
        if ($produto->tipo_produto == "prato") {
            $dir = 'img-upload/prato/'; //Diretório para uploads de prato
        } */

        move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $new_name); //Faz upload do arquivo
    }
    $produto->nome = $_POST['nome'];
    $produto->descricao = $_POST['descricao'];
    $produto->valor = $_POST['valor'];
    $produto->tipo_produto = $_POST['tipo_produto'];
    $produto->imagem = $dir . $new_name;
    try {
        $produto->salvar();
        alerta("Produto Cadastrado");
        $produto = new Produto;
        echo "<script> this.form.reset();</script>";
    } catch (Exception $erro) {
        error($erro->getMessage());
    }
};
function listarTodos()
{
    try {
        $produto = new Produto;
        $produtos = $produto->getAll();
        return $produtos;
        //echo "<script> window.location.href = 'http://localhost/phpSchool/index.php';</script>";
        //header("Location: http://localhost/phpSchool/index.php");
    } catch (Exception $erro) {
        error($erro->getMessage());
    }
}
