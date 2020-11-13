<?php 
    require_once("./controller/usuario-controller.php");
?>
<div id="back-login">
    <div class="vertical-center">
        <div id="login">
            <img src="./img/login_logo.png" alt="">
            <form action="" method="POST">
                <input type="hidden" name="action" value="cad">
                <div class="form-group">
                    <label for="exampleInputNome" class="text-white">Nome</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Nome" name="nome" required value='<?= $usuario->nome ?>'>
                    <small id="nomeHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefone" class="text-white">Telefone</label>
                    <input type="tel" class="form-control" id="tel" aria-describedby="telHelp" placeholder="Telefone" name="tel" value=<?= $usuario->tel ?>>
                    <small id="telHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-white">E-mail</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail" name="email" required value=<?= $usuario->email ?>>
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputDate" class="text-white">Data nascimento</label>
                    <input type="date" class="form-control" id="datanasc" aria-describedby="telHelp"name="datanasc" value=<?= $usuario->datanasc ?>>
                    <small id="telHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputSenha" class="text-white">Senha</label>
                    <input type="password" class="form-control" id="pws" aria-describedby="pwsHelp" name="pws" required>
                    <small id="pwsHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmSenha" class="text-white">Confirmar a Senha</label>
                    <input type="password" class="form-control" id="confpws" aria-describedby="confPwsHelp" placeholder="confirmação da senha" name="confpws" required>
                    <small id="confPwsHelp" class="form-text text-muted"></small>
                </div>
                <a href="">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </a>
                </a>
            </form>
        </div>
    </div>
</div>