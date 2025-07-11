<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>

    <link rel="stylesheet" href="/interno/public/assets/css/home/home_admin.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/admin/menu_lateral.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/admin/header_menu.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/body.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <script src="/interno/app/views/JS/modals.js"></script>
    <script src="/interno/app/views/JS/menu_drop_down.js"></script>
</head>
<body>
    
<?php include(__DIR__ . '/../../utils/admin/template.php'); ?>

<div class="container">    
    <main>
        <div class="container_home">
            <div class="crud_button">
                <button class="btn" id="new_funcionario">Novo Funcionario</button>
            </div>
        </div>
    </main>

    <dialog id="modal_funcionario">
        <h2>Novo Funcionário</h2>

        <?php include(__DIR__ . '/../../../forms/admin/form_funcionarios.php'); ?>
        
    </dialog>
</div>

</body>
</html>