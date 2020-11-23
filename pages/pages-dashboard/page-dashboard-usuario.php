<?php
require_once("./controller/usuario-controller.php");
include_once("./pages/valida-user.php");
?>
<div class="row">
    <div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1">
        <nav class="nav navbar-light navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarWEX" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse flex-column mt-md-0 mt-4 pt-md-0 pt-4" id="navbarWEX">
                <a class="nav-link navbar-brand active" href="~/Views/Forms/ControlPanel.cshtml"><span class="fa fa-home"></span></a>
                <a href="index.php?p=dash-user" class="nav-link">Usuario</a>
                <a href="index.php?p=dash-cadastro" class="nav-link">Cadastro</a>
            </div>
        </nav>
    </div>
    <div class="col-9 col-sm-10 col-md-10 col-lg-11 col-xl-11">
        <form action="" method="POST">
            <input type="hidden" name="action" value="cad">
            <div class="form-group">
                <label for="exampleInputNome">Nome</label>
                <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Nome" name="nome" required value='<?= $usuario->nome ?>'>
                <small id="nomeHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputTelefone">Telefone</label>
                <input type="number" class="form-control" id="tel" aria-describedby="telHelp" placeholder="Telefone" name="tel" value=<?= $usuario->tel ?> required>
                <small id="telHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail" name="email" required value=<?= $usuario->email ?>>
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputDate">Data nascimento</label>
                <input type="date" class="form-control" id="datanasc" aria-describedby="telHelp" name="datanasc" value=<?= $usuario->datanasc ?>>
                <small id="telHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputSenha">Senha</label>
                <input type="password" class="form-control" id="pws" aria-describedby="pwsHelp" name="pws" placeholder="Senha" required>
                <small id="pwsHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputConfirmSenha">Confirmar a Senha</label>
                <input type="password" class="form-control" id="confpws" aria-describedby="confPwsHelp" placeholder="Confirmação da Senha" name="confpws" required>
                <small id="confPwsHelp" class="form-text text-muted"></small>
            </div>
            <a href="">
                <button type="submit" class="btn btn-success">Enviar</button>
            </a>
            </a>
        </form>
    </div>