
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/assets/css/login/login.css">
    <title>login</title>
</head>
<body>

<div class = "main-login">

    <div class = "left-login">
    <img src="/../interno/public/assets/images/logo chat 400.png" alt="logo" class="logo">
    <h1>Help Desk Center</h1>
    </div>

    <div class="right-login">
        <div class = "card-login">

        <h1>LOGIN</h1>
        <div class="formulario">
        
            <form action="../app/views/pages/login/login.php" method="post">

                <div class="textField">

                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" class="usuario" placeholder="Usuário" required>
                </div>

                <div class="textField">
                
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" requided>   
                </div>

                    <button type="submit" class="btn_login">Acessar</button>
            </form >
        </div>
        </div>
    </div>
    </div>

    
</div>

</body>
</html>