<?php

namespace App\Controllers;

class DashboardController

{

    public function __invoke(){

        if(!logado()){

            return  abort(404);
        }

        view('dashboard');


    }




}