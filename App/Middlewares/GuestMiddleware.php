<?php

namespace App\Middlewares;

class GuestMiddleware
{
    public function handle(){

        if( logado()){

            return header('location: /dashboard');
            exit();


        }


    }



}