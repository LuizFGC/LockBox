<?php

namespace App\Controllers;

use App\Models\Usuario;

class RegistroController
{

    public function index(){


      return  view('registro');


    }

    public function registro(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $acao = $_POST['acao'];

            switch ($acao){
                case 'registrar':

                    usuario::registro();

                    break;
            }
        }



    }
}