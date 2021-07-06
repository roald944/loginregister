<?php require_once "php/log.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <form action="index.php" method="POST">
        <div class="wrapper">
            <h1>Login</h1>
            <div id="msg">
                <?php if (isset($msg)) : echo $msg; unset($msg); endif ?>
            </div>
            <div id="inps">
                <input type="text" name="loginusername" id="" placeholder="Username">
                <input type="password" name="loginpassword" id="" placeholder="Password">
            </div>
            <div id="btn">
                <input type="submit" name="btnLogin" id="" value="Login">
            </div>
            <div id="regDirect">
                <a href="register.php">Don't have an account ?</a>
            </div>
        </div>
    </form>
</body>

</html>