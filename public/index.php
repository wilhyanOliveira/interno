
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/assets/css/login/login.css">
    <title>login</title>
</head>
<body>

<div class="container">
    
    <div class="content">
    
        <div class="logo">
            <img src="/../interno/public/assets/images/logo chat 400.png" alt="logo" class="logo">
        </div>

        <div class="login-box">

            <h2>FLAME SUPPORT</h2>

                <form action="../app/views/pages/login/login.php" method="post">

                <div class="input-group">

                    <input type="text" name="usuario" class="usuario" placeholder="Usuário" required>
                </div>

                <div class="input-group">

                    <input type="password" name="senha" placeholder="Senha" requided>   
                </div>

                    <button type="submit" class="btn_login">Acessar</button>
            </form >
    
        </div>
    </div>
</div>

</body>
</html>