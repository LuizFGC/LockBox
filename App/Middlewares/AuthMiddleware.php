<?php

namespace App\Middlewares;

class AuthMiddleware
{


    public function handle(){

        if( ! logado()){

            return header('location: /login');
            exit();


        }


    }


}