<?php
    require_once('config.php');

    if (isset($_POST['plantData']['work']) && $_POST['plantData']['work'] == 1){        
        $plantData = $_POST['plantData'];
        $response = 0;

        $plantName = $plantData['plantName'];
        $statusName = $plantData['statusName'];
        $hexNumber = $plantData['hexNumber'];
            
        // if($statusName==''){
        //     $statusName= 'EMPTY';
        // }
        // if($hexNumber==''){
        //     $hexNumber = '#3BFC2E66';
        // }
        if($plantName !== '' && $statusName !== '' && $hexNumber !== ''){
            $insertPlant = mysqli_query($conn, "INSERT INTO plants(plant_name,plant_status,hex_number) VALUES ('$plantName','$statusName','$hexNumber')");
            $updateStatus = mysqli_query($conn, "UPDATE plant_status SET hex_number = '$hexNumber',modify_date_time = CURRENT_TIMESTAMP WHERE status_name = '$statusName'");
            $response = 1;
        }else{
            $response = 2;
        }
        echo json_encode($response); 

    }else if(isset($_POST['work']) && $_POST['work'] == 2){
        $response = 0;

        $roleName = $_POST['roleName'];
        $plantId = $_POST['plantId'];

        if($roleName != ''){
            $insertPlant = mysqli_query($conn, "INSERT INTO roles (role_name,plant_id) VALUES ('$roleName','$plantId')");
            $response = 1;
        }else{
            $response = 2;
        }
        echo json_encode($response);

    }else if(isset($_POST['work']) && $_POST['work'] == 3){
        $response = 0;

        $plantId = $_POST['plantId'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $roleId = $_POST['roleId'];
        $mail = $_POST['mail'];
        $confirmPassword = $_POST['confirmPassword'];

        if($userName != '' && $password != '' && $roleId != '' && $mail != '' && $confirmPassword != ''){

            if($confirmPassword != $password){
                $response = 3;
            }else{
                $insertUser = mysqli_query($conn, "INSERT INTO users (plant_id,name,email,password,role_id) VALUES ('$plantId','$userName','$mail','$password','$roleId')");
                $response = 1;
            }

        }else{
            $response = 2;
        }
        echo json_encode($response);

    }else if(isset($_POST['work']) && $_POST['work'] == 4){
        $response = 0;

        $lineName = $_POST['lineName'];
        $plantId = $_POST['plantId'];

        if($lineName != ''){
            $insertPlant = mysqli_query($conn, "INSERT INTO lines_ (line_name,plant_id) VALUES ('$lineName','$plantId')");
            $response = 1;
        }else{
            $response = 2;
        }
        echo json_encode($response);

    }else if(isset($_POST['work']) && $_POST['work'] == 5){
        $response = 0;

        $lineId = $_POST['lineId'];
        $plantId = $_POST['plantId'];
        $machineNumber = $_POST['machineNumber'];

        if($machineNumber != ''){
            $fetchPlantData = mysqli_query($conn, "SELECT * FROM plants WHERE plant_id = '$plantId'");
    
            if ($fetchPlantData) {
                $plantData = mysqli_fetch_assoc($fetchPlantData);
                $hexnumber = $plantData['hex_number'];
                $status = $plantData['plant_status'];


                $insertMachine = mysqli_query($conn, "INSERT INTO machines (line_id, plant_id, machine_number, machine_hexnumber, machine_status) VALUES ('$lineId', '$plantId', '$machineNumber', '$hexnumber', '$status')");

                $response = 1;
                }            
        }else{
            $response = 2;
        }
        echo json_encode($response);

    }else if(isset($_POST['work']) && $_POST['work'] == 6){
        $response = 0;

        $lineId = $_POST['lineId'];
        $plantId = $_POST['plantId'];
        $checkedCount = $_POST['checkedCount'];

        $fetchPlantData = mysqli_query($conn, "SELECT hex_number, plant_status FROM plants WHERE plant_id = '$plantId'");

        if ($fetchPlantData) {
            $plantData = mysqli_fetch_assoc($fetchPlantData);
            $hexnumber = $plantData['hex_number'];
            $status = $plantData['plant_status'];

            for ($i = 1; $i <= $checkedCount; $i++) {
                mysqli_query($conn, "INSERT INTO machines (line_id, plant_id, machine_number, machine_hexnumber, machine_status) VALUES ('$lineId', '$plantId', 'CM 01 (250T)', '$hexnumber', '$status')");
            }

            $response = 1;
        } else{
            $response = 2;
        }
        echo json_encode($response);

    }


?>