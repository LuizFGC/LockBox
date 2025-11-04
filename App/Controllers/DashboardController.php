<?php

namespace App\Controllers;

use App\Models\Usuario;

use App\Models\Nota;

class DashboardController

{

    public function __invoke(){
        $notas = Nota::getNotas();
        $usuario = Usuario::getUser();

     return  view('dashboard', compact('usuario', 'notas'), template: 'app');


    }




}