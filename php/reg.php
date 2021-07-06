<?php
require_once "connection.php";
if (!$conndb) {
    echo "No database found. " . mysqli_connect_error();
} else {
    //TODO start Code
    $createuserID = "";
    $createusername = "";
    $createpassword = "";
    $createStatus = "Offline";
    $createAccess = "NO";
    $sqlCheck = "";
    $sqlCreate = "";
    $msg = "";
    $error = "<p style='color:white; background: red;'>";
    $success = "<p style='color:white; background:lime;'>";
    $createuserID = date('dmY-') . strtoupper(substr(uniqid(), 6, 13));
    if (isset($_POST['btnCreate'])) {
        $createusername = mysqli_real_escape_string($conn, $_POST['createusername']);
        $createpassword = mysqli_real_escape_string($conn, $_POST['createpassword']);
        if (empty($createusername) || empty($createpassword) || empty($createusername) && empty($createpassword)) {
            $msg .= $error . "Username/Password Empty</p>";
        } else {
            if (strlen($createusername) < 8 || strlen($createpassword) < 8) {
                $msg .= $error . "Username/Password is less than 8 chars</p>";
            } else {
                $sqlCheck = mysqli_query($conn, "SELECT * FROM user_login_tbl WHERE  user_id='$createuserID' OR loginUsername='$createusername'");
                if (mysqli_num_rows($sqlCheck) > 0) {
                    $msg .= $error . "Register Failed, try again</p>";
                } else {
                    $sqlCreate = "INSERT INTO user_login_tbl(user_id,loginUsername,loginPassword,loginStatus,loginAccess) VALUES('$createuserID','$createusername','$createpassword','$createStatus','$createAccess')";
                    if (mysqli_query($conn, $sqlCreate)) {
                        $msg .= $success . "Account Created Successfully!</p>";
                    } else {
                        $msg .= $error . "Register Failed, try again</p>";
                    }
                }
            }
        }
    }else{
        $msg = "<p style='background:gold; color:red;'>Create your account now!</p>";
    }
    if(isset($_POST['btnReset'])){
        $_POST['createusername'] = "";
        $_POST['createpassword'] = "";
    }
}
mysqli_close($conn);
?>
