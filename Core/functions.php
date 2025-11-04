<?php

function base_path($path)

    {

        return __DIR__ . "/../" . $path;

    }


function view($view, $data = [], $template = 'app')
{

    foreach ($data as $key => $value) {

        $$key = $value;
    }

    require base_path("views/template/$template.php");
};

function abort($code)
{

    http_response_code($code);

    view($code);

    die();
}

function flash(){

    return new core\Flash;

}

function config($chave = null){

    $config = require base_path('/config/config.php');

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

