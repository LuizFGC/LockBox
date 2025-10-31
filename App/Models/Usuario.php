<?php


namespace App\Models;

use core\DB;

use core\Validacao;

class Usuario
{

    public $id;

    public $nome;

    public $email;

    public $senha;

    public $role;

    public $imagem_perfil;

    public static function registro()
    {
        $database = new DB(config('database'));

        // Validações Cadastro

        $validacao = Validacao::validar([

            'nome' => ['required'],

            'email' => ['required', 'email', 'unique:usuarios'],

            'senha' => ['required', 'confirmed', 'min:8']

        ], $_POST);

        if ($validacao->naoPassou('registrar')) {

            view('registro');

            exit();
        }

        $database->query(

            query: "insert into usuarios (nome, email, senha, role, imagem_perfil) values ( :nome, :email, :senha, :role, :imagem)",

            params: [

                'nome' => $_POST['nome'],

                'email' => trim($_POST['email']),

                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),

                'role' => 1,

                'imagem' => '..\imgs\render-3d-personaje-avatar_23-2150611783.webp'
            ]

        );

        flash()->push('mensagem', 'Registrado com sucesso! Faça Login ');

        header('location:/login');

        exit();

    }

    public static function login()
    {

        $database = new DB(config('database'));
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = trim($_POST['email']);

            $senha = $_POST['senha'];


            // Validações Login

            $validacao = Validacao::validar([

                'email' => ['required', 'email'],

                'senha' => ['required']

            ], $_POST);


            if ($validacao->naoPassou('login')) {

                view('login');

                exit();
            }

            $usuario = $database->query(

                query: "select * from usuarios where email = :email",

                class: Usuario::class,

                params: compact('email')

            )->fetch();

            if (!$usuario) {

                flash()->push('validacoes_login', ['Usuario ou senha estão incorretos! ']);

                header('location:/login');

                exit();
            }


            if ($usuario) {

                if (!password_verify($_POST['senha'], $usuario->senha)) {

                    flash()->push('validacoes_login', ['Usuario ou senha estão incorretos! ']);

                    header('location:/login');

                    exit();
                }
                $_SESSION['auth'] = $usuario;

                flash()->push('mensagem', 'Seja bem vindo ' . $usuario->nome . '!');

                header('location:/dashboard');

                exit();
            }
        }
    }

    public static function logout()
    {

        session_destroy();

        header('location: /usuarios');
    }

    public static function excluirConta()
    {

        if (!isAdmin()) {

            abort(404);

            die();
        }

        $database = new DB(config('database'));
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isAdmin()) {

            $database->query(

                query: "delete from usuarios where nome = :usuario",

                params: [

                    'usuario' => $_POST['usuario'],

                ]

            );

            flash()->push('mensagem', 'Usuario excluido com sucesso');

            header('location:/index.php');

            exit();
        }
    }

    public static function permissoes()
    {

        if (!isAdmin()) {

            abort(404);

            die();
        }

        $database = new DB(config('database'));
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isAdmin()) {

            $database->query(

                query: "update usuarios set role = :roleId where nome = :usuario",

                params: [

                    'roleId' => $_POST['permissoes'],

                    'usuario' => $_POST['usuario'],

                ]

            );

            flash()->push('mensagem', 'Permissão alterada com sucesso');

            header('location:/index.php');

            exit();
        }
    }

    public static function getUsuarios()
    {

        $database = new DB(config('database'));
        return $database->query(

            query: "select * from usuarios",

            class: usuario::class,

        )->fetchAll();

    }

    public static function getUser()
    {

        $database = new DB(config('database'));
        return $database->query(

            query: "select * from usuarios where id = :id",

            class: usuario::class,

            params: [

                'id' => $_SESSION['auth']->id

            ]

        )->fetch();

    }

    public static function salvarFoto()
    {

        $novoNome = md5(rand());

        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        $imagem = "imgs/$novoNome.$extensao";

        move_uploaded_file($_FILES['foto']['tmp_name'], __DIR__ . "/../public/" . $imagem);

        $database = new DB(config('database'));

        $database->query(

            query: "update usuarios set imagem_perfil = :imagem where id = :id",

            params: [

                'imagem' => $imagem,

                'id' => $_SESSION['auth']->id

            ]

        );

        flash()->push('mensagem', 'Foto atualizada com sucesso!');

        header('location:/perfil');

        exit();

    }

    public static function editarCadastro()
    {


    }
}
