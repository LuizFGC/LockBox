<?php

namespace App\Models;
use DB;

class Usuarios_livros
{
    public $id_usuario;

    public $id_livro;

    public static function inserirLivro($id_livro)
    {

        $database = new DB(config('database'));

        $database->query(

            query: "insert into usuarios_livros (id_usuario, id_livro) values ( :id_usuario, :id_livro)",

            params: [

                'id_usuario' => $_SESSION['auth']->id,

                'id_livro' => $id_livro,

            ]

        );

        flash()->push('mensagem', 'Livro adicionado com sucesso ');

        header('location:/meus-livros');

        exit();
    }

    public static function removerLivro($id_livro)
    {

        $database = new DB(config('database'));

        $database->query(

            query: "delete from usuarios_livros where id_usuario = :id_usuario and id_livro = :id_livro ",

            params: [

                'id_usuario' => $_SESSION['auth']->id,

                'id_livro' => $id_livro,

            ]

        );

        flash()->push('mensagem', 'Livro removido com sucesso ');

        header('location:/meus-livros');

        exit();
    }
}
