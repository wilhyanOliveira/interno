<?php

session_start();

include('/../xampp/htdocs/interno/app/database/conexao.php');

if (empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))) {
    die('Usuário e/ou senha vazios');
}

$usuario = $_POST["usuario"];
$senha   = $_POST["senha"];

function valida_cpf($cpf)
{
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    if (strlen($cpf) != 11) {
        return false;
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    for ($t = 9; $t < 11; $t++) {
        $sum = 0;
        for ($i = 0; $i < $t; $i++) {
            $sum += $cpf[$i] * (($t + 1) - $i);
        }

        $result = ($sum * 10) % 11;
        if ($result == 10) $result = 0;

        if ($cpf[$t] != $result) {
            return false;
        }
    }

    return true;
}

if (valida_cpf($usuario)) {

        $sql = "SELECT 
            funci.id,
            funci.Nome,
            funci.login, 
            funci.senha, 
            a.id as acesso_id
            FROM t_funcionario funci
            inner join t_funcao f
            on f.id = funci.id_funcao
            inner join t_acesso a
            on a.id = f.id_acesso
            where login = '$usuario' AND senha = '$senha'";
        $res = $conexao->query($sql) or die($conexao->error);

        $qtd = $res->num_rows;

        if ($qtd > 0) 
        {
            $row = $res->fetch_object();

            $_SESSION["usuario"] = $usuario;
            $_SESSION["nome"] = $row->Nome ?? "Desconhecido";
            $_SESSION["acesso"] = $row->id ?? "Desconhecido";

            if ($row->acesso_id == 1) {
                header('location:/interno/app/views/pages/admin/home/home_admin.php');
            }

            if ($row->acesso_id == 2) {
                header('location:/interno/app/views/pages/user/home_user-home_user.php');
            }
        } else {
            print "<script>alert('Usuário e/ou senha incorreto');</script>";
        }
    } else {
        print "<script>alert('Usuário inválido');</script>";
    }
