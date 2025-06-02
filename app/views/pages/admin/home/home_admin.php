<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../interno/public/assets/css/home/home_admin.css">
    <link rel="stylesheet" href="/../interno/public/assets/css/standart/admin/menu_lateral.css">
    <link rel="stylesheet" href="/../interno/public/assets/css/standart/admin/header_menu.css">
    <link rel="stylesheet" href="/../interno/public/assets/css/standart/body.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Administrador</title>

<body>
<header> 

    <h1 class="titulo-header">Central de Atendimentos</h1> 

</header>

    <div class="container">
        
        <nav class = "menu_lateral">
            <ul class="exo-menu">

                <li class="item_menu">
                    <a href="../modules/ger_atendimentos.php">
                        <span class="icon"><i class="bi bi-headset"></i></span>
                        <span class="txt_link">ATENDIMENTOS</span>
                    </a>
                </li>
                <li class="item_menu">
                    <a href="../modules/ger_clientes.php">
                        <span class="icon"><i class="bi bi-person-workspace"></i></span>
                        <span class="txt_link">CLIENTES</span>
                    </a>
                </li>

                <li class="item_menu">
                    <a href="../modules/ger_funcionarios.php">
                        <span class="icon"> <i class="bi bi-people-fill"></i></span>
                        <span class="txt_link">FUNCIONARIOS</span>
                    </a>
                </li>
                <li class="item_menu">
                    <a href="../modules/ger_equipes.php">
                        <span class="icon"><i class="bi bi-kanban-fill"></i></span>
                        <span class="txt_link">EQUIPES</span>
                    </a>
                </li>
                <li class="item_menu">
                    <a href="../modules/ger_setores.php">
                        <span class="icon"><i class="bi bi-diagram-2-fill"></i></span>
                        <span class="txt_link">SETORES</span>
                    </a>
                </li>
                <li class="item_menu">
                    <a href="../modules/ger_tipo_atendimento.php">
                        <span class="icon"><i class="bi bi-menu-up"></i></span>
                        <span class="txt_link">TIPO ATENDIMENTO</span>
                    </a>
                </li>
                <li class="item_menu">
                    <a href="../modules/ger_status.php">
                        <span class="icon"><i class="bi bi-share-fill"></i></span>
                        <span class="txt_link">STATUS</span>
                    </a>
                </li>
                <li class="item_menu">
                    <a href="../modules/ger_dificuldades.php">
                        <span class="icon"><i class="bi bi-exclamation-triangle-fill"></i></span>
                        <span class="txt_link">DIFICULDADE</span>
                    </a>
                </li>
            </ul>
        </nav>

        
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

</html>