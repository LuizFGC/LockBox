<?php

namespace App\Controllers;

use App\Models\Nota;
use App\Models\Usuario;

class NotaController
{

    public function index()
    {

        $notas = Nota::getNotas();
        $usuario = Usuario::getUser();

        return view('./notas/criar', compact('usuario', 'notas'), template: 'app');


    }

    public function criar()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $acao = $_POST['acao'];

            switch ($acao) {


                case 'criar':

                    Nota::criarNota();

                    break;

                case 'atualizar':

                    Nota::atualizarNota();

                    break;

                case 'excluir':

                    Nota::excluirNota();

                    break;

                case 'pesquisar':

                    Nota::pesquisarNotas();

                    break;

            }


        }


    }
}