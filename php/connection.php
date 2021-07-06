<?php  
$hostname = "localhost";
$host_user = "root";
$host_pass = "password";
$database = "myphp_db";

$conn = new mysqli($hostname,$host_user,$host_pass);

if(!$conn){
    echo "Connection Error. ". mysqli_connect_error();
}else{
    $conndb = mysqli_select_db($conn,$database);
}

?>