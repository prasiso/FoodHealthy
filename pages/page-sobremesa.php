<?php
require_once("./controller/produto-controller.php");
?>
<section class="container">
  <div class="row">
    <?php for ($x = 0; $x < sizeof($produtos); $x++) if ($produtos[$x]['tipo_produto'] == "sobremesa") { ?>
      <div class="col-md-4 col-12">
        <div class="card ">
          <img src='<?= $produtos[$x]['imagem'] ?>?text= Imagem Indisponivel' class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $produtos[$x]['nome'] ?></h5>
            <p class="card-text">
              R$<?= $produtos[$x]['valor'] ?> </p>
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mymodal<?= $produtos[$x]['id_produto']?>" >Mais detalhes</button>
          </div>
        </div>
      </div>
      </tr>
      <div class='modal fade bd-example-modal-lg' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="mymodal<?= $produtos[$x]['id_produto']?>">
        <div class='modal-dialog modal-dialog-centered modal-dialog modal-lg' role='document'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title' id='exampleModalLongTitle'>Detalhes do Produto</h5>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            <div class='modal-body w-100'>
              <div class='container-fluid'>
                <div class='row'>
                  <div class='col-md-7'>
                    <img src='<?= $produtos[$x]['imagem'] ?>?text= Imagem Indisponivel' alt='' class='w-100'>
                  </div>
                  <div class='col-md-5'>
                    <div class='col-md-12'>
                      <h2><?= $produtos[$x]['nome'] ?></h2>
                    </div>
                    <br>
                    <div class='col-md-12'>
                      <h3>Tipo de produto:</h3>
                      <h4 class='text-secondary'><?= $produtos[$x]['tipo_produto'] ?></h4>
                    </div>
                    <div class='col-md-12'>
                      <h3>Valor:</h3>
                      <h4 class='text-secondary'>R$<?= $produtos[$x]['valor'] ?></h4>
                    </div>
                    <br>
                    <div class='col-md-12'>
                      <h3>Descrição:</h3>
                      <p class='text-secondary'><?= $produtos[$x]['descricao'] ?></p>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
<?php
//  echo '<pre>';
//   var_dump($produtos);
//   echo '</pre>';
?>
</section>