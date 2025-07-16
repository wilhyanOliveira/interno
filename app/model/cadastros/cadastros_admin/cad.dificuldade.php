<?php
include(__DIR__.'/../../../database/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $descricao = $_POST['descricao'];
    $status     = isset($_POST['status']) ? 1 : 0;

    if(!empty($descricao))
    {
        $conn = $conexao;

        $ver_existente = "SELECT COUNT(*) AS total FROM T_DIFICULDADE_ATED WHERE descricao = '$descricao'";
        $consulta_setor = mysqli_query($conn, $ver_existente);
        $row = mysqli_fetch_assoc($consulta_setor);

        if($row['total'] > 0)
        {
            $mensagem = "Dificuldade ja cadastrado!";
        }
        else
        {
            $sql = "INSERT INTO T_DIFICULDADE_ATED (descricao, status_setor) values ('$descricao', $status)";
        }

        if(mysqli_query ($conn, $sql))
        {
            header("location: /interno/app/views/pages/admin/modules/ger_dificuldades.php");
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
        $mensagem = "O campo descrição é obrigatório.";
    }
}



?>