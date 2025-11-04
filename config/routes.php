<?php

use App\Controllers\NotaController;
use App\Controllers\DashboardController;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\RegistroController;
use App\Middlewares\AuthMiddleware;
use App\Middlewares\GuestMiddleware;
use Core\Route;

(new Route())

    ->get('/', IndexController::class, GuestMiddleware::class)


    ->get('/login',[LoginController::class, 'index'], GuestMiddleware::class)

    ->post('/login', [LoginController::class, 'login'], GuestMiddleware::class)

    ->get('/registro', [RegistroController::class, 'index'], GuestMiddleware::class)
    ->post('/registro', [RegistroController::class, 'registro'], GuestMiddleware::class)


    ->get('/dashboard', DashboardController::class, AuthMiddleware::class)
    ->get('/criar', [NotaController::class, 'index'], AuthMiddleware::class)
    ->post('/criar', [NotaController::class, 'criar'], AuthMiddleware::class)

    ->run();



