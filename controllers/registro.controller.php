<?php 
require "../Validacao.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $acao = $_POST['acao'];

    switch ($acao){
        case 'registrar':

            usuario::registro();

            break;
    }
}
view('registro');