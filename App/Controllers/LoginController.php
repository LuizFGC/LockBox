<?php

namespace App\Controllers;

use App\Models\Usuario;

class LoginController
{

       public function index(){


            return view('login');


       }

        public function login(){

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



        }
}