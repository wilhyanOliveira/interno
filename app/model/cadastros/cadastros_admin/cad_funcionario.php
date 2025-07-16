<?php

include(__DIR__.'/../../../database/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $cep = $_POST['cep'];
    $municipio = $_POST['municipio'];
    $uf = $_POST['uf'];
    $status = isset($_POST['status']) ? 1 : 0;
    $id_funcao = $_POST['funcao'];
    $id_equipe = $_POST['equipe'];
    $id_setor = $_POST['setor'];

    if(!empty($nome)&& !empty($cpf) && !empty($senha) && !empty($status) && !empty($id_equipe) && !empty($id_funcao) && !empty($id_setor))
    {
        $conn = $conexao;

        $sql = "INSERT INTO T_FUNCIONARIO
        (Nome, login, senha, tipo, id_funcao, id_equipe, id_setor, status_funci, cep, uf, municipio)
        VALUES
        ('$nome', '$cpf', '$senha', '0', $id_funcao, $id_equipe, $id_setor, $status, '$cep', '$uf', '$municipio')";


        if(mysqli_query ($conn, $sql))
        {
            header("location: /interno/app/views/pages/admin/modules/ger_funcionarios.php");
            exit;
        }
        else
        {
            $mensagem = "Erro ao gravar os dados:".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    else
    {
        $mensagem = "Obrigatório o preenchimento de todos os campos.";
    }

}
?>