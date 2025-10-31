<?php

use Core\Route;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;
use App\Controllers\RegistroController;


(new Route())

    ->get('/', IndexController::class)


    ->get('/login',[LoginController::class, 'index'])

    ->post('/login', [LoginController::class, 'login'])

    ->get('/dashboard', DashboardController::class)

    ->get('/registro', [RegistroController::class, 'index'])
    ->post('/registro', [RegistroController::class, 'registro'])

    ->run();



