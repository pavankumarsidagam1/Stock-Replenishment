<?php
require_once('config.php');
session_start();
$response= 0;
$verificationCode = $_POST['verificationCode'];
$user_id = $_SESSION['userId'];

if($verificationCode != ''){
    $query = mysqli_query($conn, "SELECT * FROM users WHERE otp = '$verificationCode' AND user_id = '$user_id' AND status = '1'");

    if (mysqli_num_rows($query) > 0) {
        $response = 1;
    }else{
        $response = 2;
    }
}else{
    $response = 3;
}
echo json_encode($response);
?>