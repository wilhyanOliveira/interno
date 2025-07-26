<?php
include(__DIR__.'/../../../database/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $razao = $_POST['razao'];
    $fantasia = $_POST['fantasia'];
    $responsavel = $_POST['responsavel'];
    $cnpj = $_POST['cnpj'];
    $ie = $_POST['ie'];
    $municipio = $_POST['municipio'];
    $cep = $_POST['cep'];
    $uf = $_POST['uf'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $referencia = $_POST['referencia'];
    $email = $_POST['email'];
    $telefone = $_POST['fone'];
    $celular = $_POST['celular'];
    $atividade = $_POST['atividade'];
    $revenda = isset($_POST['revenda']) ? 1 : 0;
    $status = isset($_POST['status']) ? 1 : 0;

    if(!empty($razao)&& !empty($fantasia) && !empty($responsavel) && !empty($cnpj) && !empty($ie) && !empty($municipio) &&  
    !empty($status) && !empty($revenda) && !empty($email) && !empty($telefone) && !empty($celular))
    {
        $conn = $conexao;

        $sql = "INSERT INTO T_CLIENTE
        (razao, nome_fantasia, responsavel, cnpj, ie, municipio, cep, uf, rua, numero, bairro, referencia, email, telefone, celular, atividade, revenda, status_cliente)
        VALUES
        ('$razao', '$fantasia', '$responsavel', '$cnpj',$ie, '$municipio', $cep, '$uf', '$rua', $numero, '$bairro', '$referencia', '$email', $telefone, $celular, '$atividade', $revenda, $status)";


        if(mysqli_query ($conn, $sql))
        {
            header("location: /interno/app/views/pages/admin/modules/ger_clientes.php");
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