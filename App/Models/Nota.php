<?php

namespace App\Models;


use core\DB;

use core\Validacao;
use PDO;

class Nota
{

    public $id;

    public $usuario_id;

    public $titulo;

    public $nota;

    public $data_criacao;

    public $data_atualizacao;


    public static function criarNota(){

        $database = new DB(config('database'));

        $validacao = Validacao::validar([

            'titulo' => ['required'],

            'nota' => ['required'],

        ], $_POST);

        if ($validacao->naoPassou('criar')) {

            header('location: /criar');

            exit();
        }


        $database->query(

            query: "insert into notas (usuario_id, titulo, nota, data_criacao) values ( :id, :titulo, :nota, :data_criacao )",

            params: [

                'id' => $_SESSION['auth']->id,

                'titulo' => $_POST['titulo'],

                'nota' => $_POST['nota'],

                'data_criacao' => date('Y-m-d H:i:s')
            ]

        );

        flash()->push('mensagem', 'Nota criada com sucesso! ');

        header('location:/dashboard');

        exit();




    }

    public static function atualizarNota(){

        $database = new DB(config('database'));

        $database->query(

            query: "insert into notas (usuario_id, titulo, nota, data_criacao) values ( :id, :titulo, :nota, :data_criacao )",

            params: [

                'id' => $_SESSION['auth']->id,

                'titulo' => $_POST['titulo'],

                'nota' => $_POST['nota'],

                'data_criacao' => date('Y-m-d H:i:s')
            ]

        );

        flash()->push('mensagem', 'Nota atualizada com sucesso! ');

        header('location:/dashboard');

        exit();




    }

    public static function excluirNota(){

        $database = new DB(config('database'));


        $database->query(

            query: "delete from notas where id = :id",

            params: [

                'id' => $_POST['id'],

            ]

        );

        flash()->push('mensagem', 'Nota excluida com sucesso! ');

        header('location:/dashboard');

        exit();




    }

    public static function getNotas(){


        $database = new DB(config('database'));

        return  $database->query(

           query: "select * from notas where usuario_id = :id",

            class: self::class,

            params: [

                'id' => $_SESSION['auth']->id
            ]

        )->fetchAll();
    }
    
    public static function pesquisarNotas(){


        $database = new DB(config('database'));

        return  $database->query(

            query: "select * from notas where titulo like :titulo",

            class: self::class,

            params: [

                'id' => $_SESSION['auth']->id
            ]

        )->fetchAll();
    }



}