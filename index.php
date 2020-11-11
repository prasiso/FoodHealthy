<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodHealthy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <?php
    include("pages/page-header.php");

    $p = "pages/page-home.php";

    if (!empty($_GET)) {
        $p = $_GET['p'];
        switch ($p) {
            case "inicio": {
                    $p = "pages/page-home.php";
                };
                break;
            case "bebidas": {
                    $p = "pages/page-bebida.php";
                };
                break;
            case "prato": {
                    $p = "pages/page-prato.php";
                };
                break;
            case "sobremesa": {
                    $p = "pages/page-sobremesa.php";
                };
                break;
            default:
                $p = "pages/page-home.php";
        }
    }

    include($p);

    include("pages/page-footer.php");
    ?>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="js/codigo.js"></script>
</body>

</html>