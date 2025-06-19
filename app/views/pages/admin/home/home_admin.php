<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>

    <link rel="stylesheet" href="/interno/public/assets/css/home/home_admin.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/admin/menu_lateral.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/admin/header_menu.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/body.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

<?php include(__DIR__ . '/../../utils/admin/template.php'); ?>

<div class="container">    
    <main>
        <div class="container_home">
            <div class="box">Box 1</div>
            <div class="box">Box 2</div>
            <div class="box">Box 3</div>
            <div class="box">Box 4</div>
            <div class="box">Box 5</div>
            <div class="box">Box 6</div>
            <div class="box">Box 7</div>
            <div class="box">Box 8</div>
            <div class="box">Box 9</div>
        </div>
    </main>
</div>

</body>
</html>