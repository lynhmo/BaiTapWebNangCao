<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/register.css" />
    <title>Register</title>
</head>

<body>
    <?php
    var_dump($_POST);
    require 'process.php';
    ?>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST">
                    <h1>register</h1>
                    <div class="login__field">
                        <input type="text" class="login__input" placeholder="User name" name="username" require>
                    </div>
                    <div class="login__field">
                        <input type="password" class="login__input" placeholder="Password" name="password" require>
                    </div>
                    <div class="login__field">
                        <input type="text" class="login__input" placeholder="Email" name="email">
                    </div>
                    <div class="login__field">
                        <input type="text" class="login__input" placeholder="Phone" name="phone">
                    </div>
                    <input class="button login__submit" type="submit" value="register" name="action"></input>
                    <a class="button login__submit" href="./login.php">Return to login --></a>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>

</body>

</html>