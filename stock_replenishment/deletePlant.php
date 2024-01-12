<?php
require_once('config.php');

if (isset($_POST['work']) && $_POST['work'] == 1) {
    $plantId = $_POST['plantId'];
    $deletePlant = mysqli_query($conn, "UPDATE plants SET status = '0' WHERE plant_id = $plantId");

    $reponse = 1;
    echo json_encode($reponse);
}else if(isset($_POST['work']) && $_POST['work'] == 2){
    $roleId = $_POST['roleId'];
    $deleteRole = mysqli_query($conn, "UPDATE roles SET status = '0' WHERE role_id = $roleId");

    $reponse = 1;
    echo json_encode($reponse);
}else if(isset($_POST['work']) && $_POST['work'] == 3){
    $userId = $_POST['userId'];
    $deleteUser = mysqli_query($conn, "UPDATE users SET status = '0' WHERE user_id = $userId");

    $reponse = 1;
    echo json_encode($reponse);
}else if(isset($_POST['work']) && $_POST['work'] == 4){
    $machineId = $_POST['machineId'];
    $deleteMachine = mysqli_query($conn, "UPDATE machines SET status = '0' WHERE machine_id = $machineId");

    $reponse = 1;
    echo json_encode($reponse);
}
?>