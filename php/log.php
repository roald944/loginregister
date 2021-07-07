<?php
require "connection.php";
if (!$conndb) {
    echo "Not database found. " . mysqli_connect_error();
} else {
    $loginusername = "";
    $loginpassword = "";
    $updateuserstatus = "";
    $msg = "";
    $error = "<p style='color:white; background: red;'>";
    $success = "<p style='color:white; background:lime;'>";
    if (isset($_POST['btnLogin'])) {
        $loginusername = mysqli_real_escape_string($conn, $_POST['loginusername']);
        $loginpassword = mysqli_real_escape_string($conn, $_POST['loginpassword']);
        if ((empty($loginusername) || empty($loginpassword)) || (empty($loginusername) && empty($loginpassword))) {
            $msg .= $error . "Username/Password CANNOT BE EMPTY</p>";
        } else {
            if (strlen($loginusername) < 8 || strlen($loginpassword) < 8) {
                $msg .= $error . "Username/Password is less than 8 char.</p>";
            } else {
                //* check if user is logged in
                $checkStatus = mysqli_query($conn, "SELECT * FROM user_login_tbl WHERE loginUsername = '$loginusername' AND loginStatus ='Online'");
                if (mysqli_num_rows($checkStatus) > 0) {
                    $updateuserstatus .= "UPDATE user_login_tbl SET loginStatus='Offline' WHERE loginUsername='$loginusername'";
                    mysqli_query($conn, $updateuserstatus);
                    $msg .= $error . "You didnt logout properly. Try again.</p>";
                } else {
                    //* proceed to login
                    $sqlLogin = mysqli_query($conn, "SELECT * FROM user_login_tbl WHERE loginUsername='$loginusername' AND loginPassword='$loginpassword'");
                    if (mysqli_num_rows($sqlLogin) > 0) {
                        $updateuserstatus .= "UPDATE  user_login_tbl SET loginStatus='Online' WHERE loginUsername='$loginusername'";
                        mysqli_query($conn, $updateuserstatus);
                        $msg .= $success . "You Logged in.</p>";
                    } else {
                        $msg .= $error . "Login Failed, user not found.";
                    }
                }
            }
        }
    } else {
        $msg = "<p style='background:gold; color:red;'>Welcome!</p>";
    }
}
mysqli_close($conn);
