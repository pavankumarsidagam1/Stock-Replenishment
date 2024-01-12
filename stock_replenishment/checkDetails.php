<?php
    require_once('config.php');
    session_start();

if(isset($_POST['work']) && $_POST['work'] == 0){
    $response = 0;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE name = '$username' AND password = '$password' AND status = '1'");
    if (mysqli_num_rows($query) > 0) {

        $user_details = mysqli_fetch_object($query);

        $user_name = $user_details->name;
        $userId = $user_details->user_id;
        $user_role = $user_details->user_role;
        $dashboard_access = $user_details->dashboard_access;
        $line_access = $user_details->line_access;
        $machine_access = $user_details->machine_access;


        $_SESSION['userId'] = $userId;                               
        $_SESSION['userAccess'] = $user_role;
        $_SESSION['dashboard_access'] = $dashboard_access;
        $_SESSION['line_access'] = $line_access;
        $_SESSION['machine_access'] = $machine_access;

        $response = 1;
    }else{
        $response = 2;
    }
echo json_encode($response);
}
?>