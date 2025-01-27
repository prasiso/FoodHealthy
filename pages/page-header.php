<header>
    <div class="pt-5">
        <img src="img/logo_header.png" alt="" class="img-fluid p-3 ">
    </div>

</header>

<section>

    <nav class="navbar navbar-expand-lg sticky-top navbar-dark">
        <a class="navbar-brand" href="index.php?p=inicio">
            <img src="img/logo_icon.png" width="45" height="45" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?p=inicio">Início<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?p=bebidas&action=list">Bebidas<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?p=prato&action=list">Monte seu prato<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?p=sobremesa&action=list">Sobremesa<span class="sr-only">(current)</span></a>
                </li>
            </ul>

            <?php
            if (isset($_SESSION['user'])) {
                // var_dump($_SESSION['user']);
            ?>

                <ul class="navbar-nav ml-auto">
                    <button class="btn btn-outline-success my-2 my-sm-0 m-1" style="color: #ffffffdd" type="submit"><?= $_SESSION['user'][0]['nome'] ?></button>
                    <a href="index.php?p=login&action=sair" class="m-1"> <button class="btn btn-outline-success my-2 my-sm-0" style="color: #ffffffdd" type="submit">Sair</button></a>
                    <a href="index.php?p=dash-user" class="m-1"> <button class="btn btn-outline-success my-2 my-sm-0" style="color: #ffffffdd" type="submit">Dash</button></a>
                </ul>

            <?php } else { ?>

                <ul class="navbar-nav ml-auto">
                    <a href="index.php?p=login"> <button class="btn btn-outline-success my-2 my-sm-0" style="color: #ffffffdd" type="submit">Login</button></a>
                </ul>

            <?php } ?>
        </div>
    </nav>
</section>