<?php

function view($view, $data = [])
{

    foreach ($data as $key => $value) {

        $$key = $value;
    }

    require "views/template/app.php";
};

function abort($code)
{

    http_response_code($code);

    view($code);

    die();
}

function flash(){

    return new Flash;

}

function config($chave = null){

    $config = require 'config.php'; 

    if(strlen($chave) > 0){

        return $config[$chave]; 
    }

    return $config;

}

function logado(){

 return isset($_SESSION['auth']);

}

function isAdmin(){

    return logado() && $_SESSION['auth']-> role == 2 ;
}

function old($campo){

$post = $_POST;

if(isset($post[$campo])){

    return $post[$campo];
}

return ''; 

};

