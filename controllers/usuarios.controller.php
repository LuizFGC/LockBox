<?php 
require "../Validacao.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $acao = $_POST['acao'];

    switch ($acao){
        case 'excluir':

            usuario::excluirConta();

            break;

        case 'permissoes':

            usuario::permissoes();

            break;

        case 'salvarFoto':

             usuario::salvarFoto();

            break;

        case 'editar': 

            usuario::editarCadastro();

            break;
    }
}

