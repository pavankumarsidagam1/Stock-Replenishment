<?php
require_once('config.php');

if (isset($_POST['work']) && $_POST['work'] == 1) {
    $response = 0;
    $plantId = $_POST['plantId'];
    $updatedPlantName = $_POST['updatedPlantName'];

    if($updatedPlantName != ''){
        $updatePlant = mysqli_query($conn, "UPDATE plants SET plant_name = '$updatedPlantName' WHERE plant_id = $plantId");
        $response = 1;
    }else{
        $response = 2;
    }

    echo json_encode($response);    
}else if (isset($_POST['work']) && $_POST['work'] == 2){
    $response = 0;
    $roleId = $_POST['roleId'];
    $roleUpdateName = $_POST['roleUpdateName'];

    if($roleUpdateName != ''){
        $updateRole = mysqli_query($conn, "UPDATE roles SET role_name = '$roleUpdateName' WHERE role_id = $roleId");
        $response = 1;
    }else{
        $response = 2;
    }

    echo json_encode($response);  
}else if (isset($_POST['work']) && $_POST['work'] == 3) {
    $response = 0;
    $userId = $_POST['userId'];
    $userNameUpdate = $_POST['userNameUpdate'];
    $userEmailUpdate = $_POST['userEmailUpdate'];
    $userRoleUpdate = $_POST['userRoleUpdate'];
    $userStatusUpdate = $_POST['userStatusUpdate'];

    if ($userNameUpdate != '' && $userEmailUpdate != '') {
        $updateUser = mysqli_query($conn, "UPDATE users SET name = '$userNameUpdate', email = '$userEmailUpdate', role_id = '$userRoleUpdate', user_status = '$userStatusUpdate' WHERE user_id = $userId");
        $response = 1;
    } else {
        $response = 2;
    }

    echo json_encode($response);
}else if (isset($_POST['work']) && $_POST['work'] == 4) {
    $response = 0;
    $machineId = $_POST['machineId'];
    $machineNumber = $_POST['machineNumber'];

    if ($machineNumber != '') {
        $updateMachine = mysqli_query($conn, "UPDATE machines SET machine_number = '$machineNumber' WHERE machine_id = $machineId");
        $response = 1;
    } else {
        $response = 2;
    }

    echo json_encode($response);
}
?>