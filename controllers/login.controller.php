<?php 
require "../Validacao.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $acao = $_POST['acao'];

    switch ($acao){


        case 'logar':

            usuario::login();

            break;

        case 'logout':

            usuario::logout();

            break;

    }
}
view('login'); 