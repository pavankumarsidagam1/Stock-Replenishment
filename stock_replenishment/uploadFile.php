<?php
require_once('config.php');

$file = $_FILES['file'];

$file_path = 'C:\xampp\htdocs\stock_replenishment\images/' . $file['name'];

move_uploaded_file($file['tmp_name'], $file_path);

    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_path);
    $worksheet = $spreadsheet->getActiveSheet();

    $machine_numbers = [];
    foreach ($worksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(FALSE);

        foreach ($cellIterator as $cell) {
            $machine_numbers[] = $cell->getValue();
        }
    }

$machine_numbers = array_map('sanitizeInput', $machine_numbers);

// Insert machine numbers into the database
foreach ($machine_numbers as $machine_number) {
    

    $lineId = $_POST['lineId'];
    $plantId = $_POST['plantId'];

    $fetchPlantData = mysqli_query($conn, "SELECT hex_number, plant_status FROM plants WHERE plant_id = '$plantId'");

    if ($fetchPlantData) {
        $plantData = mysqli_fetch_assoc($fetchPlantData);
        $hexnumber = $plantData['hex_number'];
        $status = $plantData['plant_status'];

        $machine_number = mysqli_query($conn, "INSERT INTO machines (line_id, plant_id, machine_number, machine_hexnumber, machine_status) VALUES ('$lineId', '$plantId', '$machine_number', '$hexnumber', '$status')");

        $response = 1;
    } else{
        $response = 2;
    }
    echo json_encode($response);

}

?>