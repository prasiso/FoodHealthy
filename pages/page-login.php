<?php
require_once("./controller/usuario-controller.php");
?>
<div id="back-login">
    <div class="vertical-center">
        <div id="login">
            <img src="./img/login_logo.png" alt="">
            <form action="" method="POST">
                <input type="hidden" name="action" value="log">
                <div class="form-group">
                    <label for="email" class="text-white">Email</label>
                    <input type="email" name="email"class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
                    <small id="emailHelp" class="form-text text-muted"></small>

                </div>
                <div class="form-group">
                    <label for="pws" class="text-white">Senha</label>
                    <input type="password" id="pws" name="pws" aria-describedby="pwsHelp" class="form-control" placeholder="Senha" required>
                    <small id="pwsHelp" class="form-text text-muted"></small>
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>