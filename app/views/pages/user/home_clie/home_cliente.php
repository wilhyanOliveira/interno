<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/interno/public/assets/css/home/home_user.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/body.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/user/header_menu.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/user/obs_agenda.css">
    <link rel="stylesheet" href="/interno/public/assets/css/standart/user/left_bar.css">

    <link rel="stylesheet" href="/interno/public/assets/css/buttons/btn_at.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="/interno/app/views/JS/modal_busca_cliente.js"></script>
    <title>CLIENTE</title>
</head>
<body>

<?php include(__DIR__ . '/../../utils/user/tamplate.php'); ?>

<div class="container">

  <main>
    <div class="dashboard-wrapper">
    
      <div class="main-cards">
        <div class="card">

        </div>
        <div class="card">

        </div>
        <div class="card">

        </div>
      </div>
    </div>

    <div class="pendencias">
        <div class="card">PENDÊNCIAS</div>
    </div>
  </main>
</div>

<dialog>
    
</dialog>

</body>
</html>