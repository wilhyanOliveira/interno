<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/interno/public/assets/css/home/home_admin.css">
    <link rel="stylesheet" href="/interno/public/assets/css/popup/backgroud/backgroud_g.css">
    <link rel="stylesheet" href="/interno/public/assets/css/popup/bottons/btn_save.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/admin/menu_lateral.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/admin/header_menu.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/body.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="/interno/public/assets/css/popup/backgroud/backgroud_g.css">
    <link rel="stylesheet" href="/interno/public/assets/css/popup/forms/form_cliente.css">

    <link rel="stylesheet" href="/interno/public/assets/css/buttons/btn_save.css">
    <link rel="stylesheet" href="/interno/public/assets/css/buttons/btn_cancel.css">

    <script src="/interno/app/views/JS/modals.js"></script>
    <script src="/interno/app/views/JS/menu_drop_down.js"></script>

    <title>Clientes</title>
</head>
<body>
    
<?php include(__DIR__ . '/../../utils/admin/template.php'); ?>

<div class="container"> 

    <main>
        <div class="container_home">
            <div class="crud_button">
                <button class="btn" id="new_cliente">Novo Cliente</button>
            </div>
        </div>

            <table class="tabela">
                <thead>
                    <tr>
                        <th>ID</th> <th>Razão Social</th> <th>Nome Fantasia</th> <th>CNPJ</th> <th>Email</th> <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    /*
                    if (count($clientes) > 0) {
                        foreach ($clientes as $cliente) {
                            echo "<tr>";
                            echo "<td>" . $cliente['ID'] . "</td>";
                            echo "<td>" . $cliente['RAZAO_SOCIAL'] . "</td>";
                            echo "<td>" . $cliente['NOME_FANTASIA'] . "</td>";
                            echo "<td>" . $cliente['CNPJ'] . "</td>";
                            echo "<td>" . $cliente['EMAIL'] . "</td>";
                            echo "<td>" . $cliente['TELEFONE'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Nenhum cliente encontrado.</td></tr>";
                    }*/
                    ?>
                </tbody>
            </table>
    </main>

    <dialog id="modal_cliente">
        <h2>Novo Cliente</h2>

        <?php include(__DIR__ . '/../../../forms/admin/form_cliente.php'); ?>
        
    </dialog>
</div>



</body>
</html>