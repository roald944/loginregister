<?php require_once "php/reg.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>

<body>
    <form action="register.php" method="POST">
        <div class="wrapper">
            <h1>Create Account</h1>
            <div id="msg"><?php if (isset($msg)) : echo $msg;
                                unset($msg);
                            endif ?></div>
            <div id="inps">
                <input type="text" name="createusername" id="" placeholder="Create Username">
                <input type="password" name="createpassword" id="" placeholder="Create Password">
            </div>
            <div id="btn">
                <input type="submit" name="btnCreate" id="" value="Register">
                <input type="submit" name="btnReset" id="" value="REset">
            </div>
            <div id="regDirect">
                <a href="index.php">Already have an account ?</a>
            </div>
        </div>
    </form>
</body>

</html>