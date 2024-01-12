<?php
require_once('config.php');

if(isset($_POST['work']) && $_POST['work'] == 1){
    $fetch_Plant_data = mysqli_query($conn, "SELECT * FROM plants WHERE status = '1'");
    
    $plant_data = array();
    while ($plant_row = mysqli_fetch_assoc($fetch_Plant_data)) {
        $plant_data[] = $plant_row;
    }

    echo json_encode($plant_data);

}else if(isset($_POST['work']) && $_POST['work'] == 2){
    $plantId = $_POST['plantId'];

    $fetch_roles_data = mysqli_query($conn, "SELECT * FROM roles WHERE plant_id = '$plantId' AND status = '1'");
    $role_data = array();
    while ($role_row = mysqli_fetch_assoc($fetch_roles_data)) {
        $role_data[] = $role_row;
    }

    echo json_encode($role_data);
}else if(isset($_POST['work']) && $_POST['work'] == 3){
    $plantId = $_POST['plantId'];

    $fetch_users_data = mysqli_query($conn, "SELECT users.*, roles.role_name FROM users JOIN roles ON users.role_id = roles.role_id WHERE users.plant_id = '$plantId' AND users.status = '1' AND user_role = 'u';");
    $user_data = array();
    while ($user_row = mysqli_fetch_assoc($fetch_users_data)) {
        $user_data[] = $user_row;
    }

    echo json_encode($user_data);
}else if(isset($_POST['work']) && $_POST['work'] == 4){
    $plantId = $_POST['plantId'];

    $fetch_lines_data = mysqli_query($conn, "SELECT * FROM lines_ WHERE plant_id = '$plantId' AND status = '1'");
    $line_data = array();
    while ($line_row = mysqli_fetch_assoc($fetch_lines_data)) {
        $line_data[] = $line_row;
    }

    echo json_encode($line_data);
}else if(isset($_POST['work']) && $_POST['work'] == 5){
    $plantId = $_POST['plantId'];
    $lineId = $_POST['lineId'];

    $fetch_machines_data = mysqli_query($conn, "SELECT * FROM machines WHERE plant_id = '$plantId' AND line_id = '$lineId'  AND status = '1'");
    $machine_data = array();
    while ($machine_row = mysqli_fetch_assoc($fetch_machines_data)) {
        $machine_data[] = $machine_row;
    }

    echo json_encode($machine_data);

}if(isset($_POST['work']) && $_POST['work'] == 6){
    $fetch_Plant_status = mysqli_query($conn, "SELECT * FROM plant_status WHERE status = '1' ORDER BY modify_date_time DESC");
    
    $plant_status = array();
    while ($status_row = mysqli_fetch_assoc($fetch_Plant_status)) {
        $plant_status[] = $status_row;
    }

    echo json_encode($plant_status);

}


?>