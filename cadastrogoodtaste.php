<?php
    if(isset($POST['submit']))
    {
        include_once("conectaRECEITAS.php");

        $nome = $POST['nome'];
        $email = $POST['email'];
        $senha = $POST['password'];

        $result = mysqli_query($mysqli, "INSERT INTO cadastro(nome,email,senha) VALUES ('$nome', '$email', '$senha')");
    }    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="style-form.css">
</head>
<body>
    <main id="container">
        <form method="POST" id="login-form">
            <div class="form-header">
                <h1>Login</h1>
                <i id="mode-icon" class="fa-solid fa-moon"></i>
            </div>

            <div id="inputs">
                <!-- NAME -->
                <div class="input-box">
                    <label for="name">
                        Name
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                        </div>
                    </label>
                </div>
                
                <!-- EMAIL -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Password
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="password">
                        </div>
                    </label>
                    
                    <!-- FORGOT PASSWORD -->
                    <div id="forgot_password">
                        <a href="#">
                            Forgot your password?
                        </a>
                    </div>
                </div>
            </div>

            <!-- BUTTONs -->
            <input type="submit" id="login_button" value="Login">
            <input type="submit" name=submit id="login_button" value="Entrar">
        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="script-form.js"></script>
        </form>
    </main>
</body>
</html>