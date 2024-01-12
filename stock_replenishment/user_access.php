<?php
require_once('config.php');

$roleId = $_POST['roleId'];
$section = $_POST['section'];
$selectedValue = $_POST['selectedValue'];

$userAccess_role =  mysqli_query($conn, "UPDATE roles SET $section = '$selectedValue' WHERE role_id = $roleId");
$userAccess_query =  mysqli_query($conn, "UPDATE users SET $section = '$selectedValue' WHERE role_id = $roleId");
?>