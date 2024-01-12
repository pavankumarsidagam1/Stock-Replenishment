<?php
require_once('config.php');
session_start();

$response= 0;
$password = $_POST['password'];
$rePassword = $_POST['rePassword'];
$user_id = $_SESSION['userId'];

if($password !='' && $rePassword != ''){
    if($password == $rePassword){
        $updateQuery = mysqli_query($conn, "UPDATE users SET password = '$rePassword' WHERE user_id = '$user_id'");
        $response = 1;
    }else{
        $response = 2;
    }
}else{
    $response = 3;
}

echo json_encode($response);
?>