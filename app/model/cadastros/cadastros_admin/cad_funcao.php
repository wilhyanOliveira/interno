<?php

include(__DIR__.'/../../../database/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $descricao = $_POST['descricao'];
    $id_setor  = $_POST['setor'];
    $status = isset($_POST['status']) ? 1 : 0;

    if(!empty($descricao)&& !empty($id_setor))
    {
        $conn = $conexao;

        $sql ="INSERT INTO T_FUNCAO(descricao, status_funcao, id_setor) VALUES ('$descricao',$status, $id_setor)";

        if(mysqli_query ($conn, $sql))
        {
            header("location: /interno/app/views/pages/admin/modules/ger_funcao.php");
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