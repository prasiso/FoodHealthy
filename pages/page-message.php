
<?php

function aviso($texto){
    echo "
        <div class='alert alert-success alert-dismissible fade show container alert-box' role='alert'>
            <h4 class='alert-heading'> Aviso </h4>
            <hr>
            <p> $texto </p>
            <p class='mb-0'></p>
            <button type='button' class='close' data-dismiss='alert' aria-label=''>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
}

function error($texto){
    echo "
        <div class='alert alert-danger alert-dismissible fade show container alert-box' role='alert'>
            <h4 class='alert-heading'> Erro </h4>
            <hr>
            <p> $texto </p>
            <p class='mb-0'></p>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
}

function alerta($texto){
    echo "
        <div class='alert alert-warning alert-dismissible fade show container alert-box' role='alert'>
            <h4 class='alert-heading'> Alerta </h4>
            <hr>
            <p> $texto </p>
            <p class='mb-0'></p>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
}