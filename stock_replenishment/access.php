<?php
require_once('config.php');
session_start();

$userAccess = $_SESSION['userAccess'];
$response = '';

if ($userAccess == 'sa') {
    $response = 'superadmin';
} else {
    $response = 'user';
}

echo json_encode($response);
?>