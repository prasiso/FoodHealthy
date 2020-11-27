<?php
require_once("./controller/produto-controller.php");
include_once("./pages/valida-user.php");
?>
<div class="row">
    <div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1" style="background-color: rgba(0,178,82);">
        <nav class="nav navbar-light navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarWEX" aria-controls="navbarSupportedContent" style="background-color: white;" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color: white;"></span>
            </button>
            <div class="navbar-collapse collapse flex-column mt-md-0 mt-4 pt-md-0 pt-4" id="navbarWEX">
                <a class="nav-link navbar-brand active" href="~/Views/Forms/ControlPanel.cshtml"><span class="fa fa-home"></span></a>
                <a href="index.php?p=dash-user" class="nav-link text-white">Usuario</a>
                <a href="index.php?p=dash-cadastro" class="nav-link text-white">Cadastro</a>
            </div>
        </nav>
    </div>
    <div class="col-9 col-sm-10 col-md-10 col-lg-11 col-xl-11 container-fluid">
        <form action="" method="POST" enctype="multipart/form-data" class="container-fluid">
            <input type="hidden" name="action" value="cadastro">
            <div class="form-group">
                <label for="exampleInputNome">Imagem</label>
                <input type="file" class="form-control" aria-describedby="fileHelp" name="imagem" required>
                <small id="fileHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputNome">Nome</label>
                <input type="text" class="form-control" aria-describedby="fileHelp" placeholder="Nome do Produto" name="nome" required value='<?= $produto->nome ?>'>
                <small id="fileHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputNome">Valor</label>
                <input type="number" class="form-control" id="valor" aria-describedby="ValorHelp" placeholder="Valor do Produto" name="valor" step="0.01" min="0.01" required value='<?= $produto->valor ?>'>
                <small id="ValorHelp" class="form-text text-muted"></small>
            </div>
            <label>
                Tipos de Produtos:
            </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_produto" id="exampleRadios1" checked value='<?= $produto->tipo_produto = "prato" ?>'>
                <label class="form-check-label" for="exampleRadios1">
                    Pratos
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_produto" name="bebida" id="exampleRadios3" value='<?= $produto->tipo_produto = "vitamina" ?>'>
                <label class="form-check-label" for="exampleRadios3">
                    Vitaminas de fruta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_produto" id="exampleRadios4" value='<?= $produto->tipo_produto = "detox" ?>'>
                <label class="form-check-label" for="exampleRadios4">
                    Sucos detox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_produto" id="exampleRadios5" value='<?= $produto->tipo_produto = "fruta" ?>'>
                <label class="form-check-label" for="exampleRadios5">
                    Sucos da fruta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tipo_produto" id="exampleRadios6" value='<?= $produto->tipo_produto = "sobremesa" ?>'>
                <label class="form-check-label" for="exampleRadios6">
                    Sobremesa
                </label>
            </div>
            <div class="form-group">
                <label for="exampleInputNome">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" rows="5" value='<?= $produto->descricao ?>'></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</div>