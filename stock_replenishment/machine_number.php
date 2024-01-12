<?php
require_once('config.php');
session_start();
$machineAccess = $_SESSION['machine_access'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <title>Add Machine</title>
</head>
<style>
     html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
 
   table{
        border-collapse: separate;
        border-spacing: 0 16px;
   }
    thead{
        background-color: #243A8599;
    }
    tbody{
        background-color: #d7d6d6c1;
    }
    thead tr td {
        color: white;
        font-size: 14px;        
    }
    tbody tr td{
        color: #050505;
        font-size: 12px;
    }
    .clickable {
        cursor: pointer;
    }
    .changeHeight {
        min-height: 72vh; 
    }

    .footer {
        position: relative;
        bottom: 0;
        width: 100%;
    }
    
</style>
<body>
    <!-- Navbar -->
<nav class="navbar p-0 m-0">
    <!-- Container wrapper -->
    <div class="container-fluid" style="background-color: #243A8599;">
        
      <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
        <div class="d-flex align-items-center justify-content-center p-3">
            <iconify-icon icon="lets-icons:message" class="pe-2" width="20" style="color: white;"></iconify-icon>
            <span style="color: white;">pavankumar@gmail</span>
        </div>
        <div class="d-flex align-items-center justify-content-center p-3" style="background-color: #243A85CC;">
            <iconify-icon icon="ion:call-outline" class="pe-2" width="15" style="color: white;"></iconify-icon>
            <span style="color: white;">91 1244610801</span>
        </div>
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Notifications -->
        <div class="dropdown">
          <a href="#" class="me-1" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <iconify-icon icon="solar:settings-linear" style="color: white;" width="30"></iconify-icon>
          </a>
          <ul class="dropdown-menu dropdown-menu-end px-2 settings" aria-labelledby="dropdownMenuLink">
            <li class="my-2 mx-2" style="background-color: #F5F5F5;">
              <a class="dropdown-item pe-4" href="machine_number.php">Machine</a>
            </li>
            <li class="my-2 mx-2" style="background-color: #F5F5F5;">
              <a class="dropdown-item pe-4" href="lines.php">Line</a>
            </li>
            <li class="my-2 mx-2" style="background-color: #F5F5F5;">
              <a class="dropdown-item pe-4" href="mixing_areaTableview.php">Activity Log</a>
            </li>
            <li class="my-2 mx-2" style="background-color: #F5F5F5;">
                <a class="dropdown-item pe-4" href="">Issue Log</a>
            </li>
            <li class="my-2 mx-2" style="background-color: #F5F5F5;">
                <a class="dropdown-item pe-4" href="addPlant.php">Access</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <div class="dropdown">
            <a href="" class="me-1" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <iconify-icon icon="mingcute:user-4-fill" style="color: white;" width="30"></iconify-icon>
            </a>
          </div>
      </div>
     
    </div>
</nav>
  <!-- Navbar -->

<div class="container-fluid">
    <div class="row p-0 pt-3 pb-2">
        <div class="col-12 col-md-4 mx-auto mb-3 ps-0 ps-lg-5 ps-md-3">
            <div class="d-flex align-items-center justify-content-center justify-content-lg-start justify-content-md-start">
                <img src="./images/roop-polymer-logo.png" width="35" alt="logo">
                <h4 class="ps-2 pt-2 fw-bolder">MACHINE</h4>
            </div>
        </div>
        <div class="col-12 col-md-2 mx-auto mb-3">
            <div class="d-flex align-items-center justify-content-center py-1 rounded-2" style="background-color: #F5F5F5;">
                <iconify-icon icon="bi:buildings" class="ps-4 pe-1" width="25"></iconify-icon>
                <select class="form-select text-decoration-none border-0" id="plantSelect" name="plantSelect" style="background-color: #F5F5F5; color: black;">
                    <option value="">PLANT</option>
                    <?php
                    $plant_names = mysqli_query($conn,"SELECT * from plants WHERE status = '1'") or die(mysqli_error($conn));
                    while ($plant_name = mysqli_fetch_object($plant_names)){
                    ?>
                    <option value="<?php echo $plant_name->plant_id ?>" > <?php echo $plant_name->plant_name ?></option>
                    <?php } ?>     
                </select>
            </div>
        </div>
        <div class="col-12 col-md-2 mx-auto mb-3">
            <div class="d-flex align-items-center justify-content-center py-2 rounded-2" style="background-color: #F5F5F5;">
                <iconify-icon icon="ic:baseline-add" class="pe-1" width="25"></iconify-icon>
                <div id="dynamicHeaderMachine">
                    <a class="text-decoration-none me-1" id="addMultipleMachines" style="color: black;" href="#" role="button" data-bs-target="#machineModal" >
                        MACHINE
                    </a>
                </div>
            </div>


            <!-- Modal ADD MULTIPLE MACHINES -->
                        <div class="modal fade" id="machineModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">ADD MACHINE</h5>
                                    </div>
                                    <form method="POST" id="addMachineForm">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="machinePlantId" class="form-label">Plant Id</label>
                                                <input type="text" class="form-control py-3" id="machinePlantId" name="machinePlantId">
                                            </div>
                                            <div class="d-none">
                                                <label for="machineLineId" class="form-label">line Id</label>
                                                <input type="text" class="form-control py-3" id="machineLineId" name="machineLineId">
                                            </div>
                                            <label for="machineNumber" class="form-label">Machine Number</label>
                                            <input type="text" class="form-control py-2" id="machineNumber" name="machineNumber">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="addMachine">ADD</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            <!-- MODAL END  -->
        </div>
        <div class="col-12 col-md-2 mx-auto mb-3">
           <div class="d-flex align-items-center justify-content-center py-2 rounded-2" style="background-color: #F5F5F5;">
                <iconify-icon icon="circum:file-on" class="pe-1" width="25"></iconify-icon>
                <div id="dynamicHeaderUpload">
                    <form method="POST" enctype="multipart/form-data">
                        <input type="file" name="file" id="fileUpload" accept=".csv, .xls, .xlsx" class="d-none" />
                        <label for="fileUpload" class="text-decoration-none me-1" style="color: black;" role="button">
                            FILE UPLOAD
                        </label>
                    </form>                    
                </div>
           </div>
        </div>
        <div class="col-12 col-md-2 mx-auto mb-3">
           <div class="d-flex align-items-center justify-content-center py-2 rounded-2" style="background-color: #F5F5F5;">
                <iconify-icon icon="iconamoon:upload-light" class="me-1" width="25"></iconify-icon>
                <a class="text-decoration-none me-1" id="downloadLink" style="color: black;" href="" role="button" >
                 SAMPLE EXCEL
                </a>
           </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="container-fluid changeHeight">
    <div class="row d-flex flex-column flex-md-row">
        <div class="col-12 col-lg-6 ps-lg-5 pe-lg-3 px-3">
            <div class="table-responsive">
                <table class="table table-borderless" id="evenMachineTable">
                          <!-- Modal ADD MACHINE -->
                          <div class="modal fade" id="machineEditModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">EDIT MACHINE</h5>
                                    </div>
                                    <form method="POST" id="addMachineForm">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="machineUpdatePlantId" class="form-label">Plant Id</label>
                                                <input type="text" class="form-control py-3" id="machineUpdatePlantId" name="machineUpdatePlantId">
                                            </div>
                                            <div class="d-none">
                                                <label for="machineId" class="form-label">Machine Id</label>
                                                <input type="text" class="form-control" id="machineId" name="machineId">
                                            </div>
                                            <div class="d-none">
                                                <label for="machineUpdateLineId" class="form-label">line Id</label>
                                                <input type="text" class="form-control py-3" id="machineUpdateLineId" name="machineUpdateLineId">
                                            </div>
                                            <label for="machineNumberUpdate" class="form-label">Machine Number</label>
                                            <input type="text" class="form-control py-2" id="machineNumberUpdate" name="machineNumberUpdate">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="updateMachine">UPDATE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL END  -->
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-6 ps-lg-3 pe-lg-5 px-3">
            <div class="table-responsive">
                <table class="table table-borderless" id="oddMachineTable">

                <!-- Modal DELETE PLANT -->
                <div class="modal fade" id="deleteMachineModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content py-2">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">DELETE MACHINE</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="machineDeletePlantId" class="form-label">Plant Id</label>
                                                <input type="text" class="form-control py-3" id="machineDeletePlantId" name="machineDeletePlantId">
                                            </div>
                                            <div class="d-none">
                                                <label for="machineDeleteLineId" class="form-label">line Id</label>
                                                <input type="text" class="form-control py-3" id="machineDeleteLineId" name="machineDeleteLineId">
                                            </div>
                                            <div class="d-none">
                                                <label for="machineIdDelete" class="form-label">Machine Id</label>
                                                <input type="text" class="form-control" id="machineIdDelete" name="machineIdDelete">
                                            </div>
                                            <span class="py-3">ARE YOU REALLY WANT TO DELETE THE MACHINE?</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="deleteMachineBtn">DELETE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL END  -->
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer">
    <div class="row py-2" >
        <div class="col-12 col-lg-9 col-md-8 d-flex align-items-center">
            <img class="mx-2 mx-lg-5 mx-md-4" src="./images/footerLogo.png"  width="57px" alt="">
            <div class="d-flex align-items-center" id="footerLines">
                        <!-- dynamically comes -->
            </div>
        </div>
        <div class="col-6 col-lg-2 col-md-2 d-flex align-items-center justify-content-end">
            <div style="background-color: #EF2B2B8C; width: 13px; height: 13px;" class="me-1">  </div>
            <span style="font-size: 10px;">Waiting For Material</span>
        </div>
        <div class="col-6 col-lg-1 col-md-2 d-flex pe-4 align-items-center justify-content-center">
            <div style="background-color: #3BFC2E66; width: 13px; height: 13px;" class="me-1"></div>
            <span style="font-size: 10px;">Has Material</span>
        </div>
    </div>
</div>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>


<script>
    $(document).ready(function(){
        var plantSelect = $('#plantSelect');
        var machineAccess = <?php echo json_encode($machineAccess); ?>;

        $.ajax({
            url: 'access.php',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response === 'superadmin') {
                    $('.settings li').show();
                } else {
                    $('.settings li:contains("Access")').hide();
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

        $('#plantSelect').on('change', function () {
            var plantId = plantSelect.val();
            var evenTable = $('#evenMachineTable');
            var oddTable = $('#oddMachineTable');
            evenTable.empty();
            oddTable.empty();

            var dynamicHeaderMachine = $('#dynamicHeaderMachine');
            dynamicHeaderMachine.empty();
            var anchorTag = $('<a class="text-decoration-none me-1" id="addMultipleMachines" style="color: black;" href="#" role="button" data-bs-target="#machineModal">MACHINE</a>')
            dynamicHeaderMachine.append(anchorTag);

            var fileUploadInput = $('#dynamicHeaderUpload #fileUpload');
            var fileUploadLabel = $('#dynamicHeaderUpload label[for="fileUpload"]');

            fileUploadInput
                .attr('data-lineid', '')
                .attr('data-plantid', '');

            fetchLinesUpdateUi(plantId);            
        });

        function fetchLinesUpdateUi(plantId){
            $.ajax({
                type: 'POST',
                url: 'fetchData.php',
                data: { plantId: plantId, work: 4 },
                dataType: 'json',
                success: function (data) {
                    var footerLinesContainer = $('#footerLines');
                    footerLinesContainer.empty();

                    $.each(data, function (index, line) {
                        // Footer Lines Assigning
                        var lineItem = $('<div class="d-flex align-items-center rounded-3 me-2 px-3 py-2 footerDiv clickable" style="background-color: #d5d5d5; color: black;"></div>');
                        var lineIcon = $('<iconify-icon icon="cil:object-ungroup" class="me-1 footerIcon" width="15"></iconify-icon>');
                        var lineLink = $('<a class="text-decoration-none me-1 line-link footeranchor" href="#" role="button" style="color: black; font-size: 12px;"></a>')
                        .text(line.line_name)
                        .attr('data-lineid', line.line_id);

                        lineItem.append(lineIcon, lineLink);
                        footerLinesContainer.append(lineItem);
                    });
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        }
        
        
        $(document).on('click', '.clickable', function () {
            $('.clickable').css({
                'background-color': '#d5d5d5',
                'color': 'black'
            });
            $('.footeranchor').css({
                'color': 'black'
            });

            var lineId = $(this).find('.line-link').data('lineid');
            var plantId = $('#plantSelect').val();

            $(this).css({
                'background-color': '#243A85CC',
                'color': 'white'
            });
            $(this).find('.footeranchor').css({
                'color': 'white'
            });

            var dynamicHeaderMachine = $('#dynamicHeaderMachine');
            dynamicHeaderMachine.empty();
            var anchorTag = $('<a class="text-decoration-none me-1" id="addMultipleMachines" style="color: black;" href="#" role="button" data-bs-toggle="modal" data-bs-target="#machineModal">MACHINE</a>')
                .attr('data-lineid', lineId)
                .attr('data-plantid', plantId);
            dynamicHeaderMachine.append(anchorTag);

            var fileUploadInput = $('#dynamicHeaderUpload #fileUpload');
            var fileUploadLabel = $('#dynamicHeaderUpload label[for="fileUpload"]');

            fileUploadInput
                .attr('data-lineid', lineId)
                .attr('data-plantid', plantId);

            fetchMachineData(lineId,plantId);
        });


        function fetchMachineData(lineId,plantId){
            $.ajax({
                type:'POST',
                url: 'fetchData.php',
                data: { plantId: plantId, lineId : lineId, work: 5 },
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    var evenTable = $('#evenMachineTable');
                    var oddTable = $('#oddMachineTable');
                    evenTable.empty();
                    oddTable.empty();

                    // Create thead element for oddTable
                    var oddThead = $('<thead><tr><td style="border-top-left-radius: 10px; border-top-right-radius: 10px;">MACHINE NUMBER</td></tr></thead>');
                    var evenThead = $('<thead><tr><td style="border-top-left-radius: 10px; border-top-right-radius: 10px;">MACHINE NUMBER</td></tr></thead>');

                    // Create tbody element for oddTable
                    var oddTbody = $('<tbody></tbody>');
                    var evenTbody = $('<tbody></tbody>');

                    // Append thead to the table
                    oddTable.append(oddThead);
                    evenTable.append(evenThead);

                    // Append tbody to the table
                    oddTable.append(oddTbody);
                    evenTable.append(evenTbody);

                    $.each(data, function (index, machine) {
                        var machineNumber = machine.machine_number;
                        var machineId = machine.machine_id;
                        var lineId = machine.line_id;
                        var plantId = machine.plant_id;

                        var row = $('<tr style="background-color: #F5F5F5;color: #050505; font-size:12px;"></tr>');
                        var cell = $('<td class="p-1 px-2"><span class="float-start">' + machineNumber + '</span>' +
                            '<div class="float-end pe-2">' +
                            '<a href="#" class="me-1 text-decoration-none edit-machine" role="button" data-bs-toggle="modal" data-bs-target="#machineEditModal" data-plantid="' + plantId + '" data-lineid="' + lineId + '" data-machineid="' + machineId + '" " data-machinenumber="' + machineNumber + '">' +
                            '<iconify-icon icon="akar-icons:edit" style="color: black;" width="20"></iconify-icon>' +
                            '</a>' +
                            '<a href="#" class="pe-1 text-decoration-none delete-machine" role="button" data-bs-toggle="modal" data-bs-target="#deleteMachineModal" data-machineid="' + machineId + '" data-lineid="' + lineId + '" data-plantid="' + plantId + '">' +
                            '<iconify-icon icon="material-symbols:delete-outline" style="color: black;" width="20"></iconify-icon>' +
                            '</a>' +
                            '</div>' +
                            '</td>');

                            if (index % 2 == 0) {
                                evenTbody.append(row.append(cell));
                            } else {
                                oddTbody.append(row.append(cell));
                            }
                    });
                },
                error: function (error) {
                    
                }
            });
        }

         //assigning the values to the inputs fields of delete modal
         $(document).on('click', '.delete-machine', function () {
            var machineId = $(this).data('machineid');
            var lineId = $(this).data('lineid');
            var plantId = $(this).data('plantid');
            $('#machineIdDelete').val(machineId);
            $('#machineDeletePlantId').val(plantId);
            $('#machineDeleteLineId').val(lineId);
        });

        $('#deleteMachineBtn').on('click', function () {

            if(machineAccess == 1){
                var plantId = $('#machineDeletePlantId').val();
                var lineId = $('#machineDeleteLineId').val();
                var machineId = $('#machineIdDelete').val();

                $.ajax({
                    type: 'POST',
                    url: 'deletePlant.php', 
                    data: { machineId: machineId, work:4 },
                    dataType: 'json',
                    success: function (response) {
                        if (response==1) {
                            fetchMachineData(lineId,plantId);
                            swal("Good job!", "Deleted Successfully!", "success");                        
                        }
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });
            }else {
                swal("ERROR!", "YOU DONT HAVE ACCESS", "error");
            }
            
        });


        $(document).on('click', '.edit-machine', function () {
            var machineId = $(this).data('machineid');
            var machineNumber = $(this).data('machinenumber');
            var lineId = $(this).data('lineid');
            var plantId = $(this).data('plantid');
            
            $('#machineId').val(machineId);
            $('#machineNumberUpdate').val(machineNumber);
            $('#machineUpdateLineId').val(lineId);
            $('#machineUpdatePlantId').val(plantId);

        });
        $('#updateMachine').on('click', function() {
            if(machineAccess == 1){
                var machineId = $('#machineId').val();
                var machineNumber = $('#machineNumberUpdate').val();
                var lineId = $('#machineUpdateLineId').val();
                var plantId = $('#machineUpdatePlantId').val();

                console.log(machineId);
                console.log(machineNumber);
                console.log(lineId);
                console.log(plantId);

                    $.ajax({
                        type: 'POST',
                        url: 'updateData.php',
                        data: {
                            machineId : machineId,
                            machineNumber: machineNumber,
                            work : 4
                        },
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            if (response == 1) {
                                swal("Good job!", "Updated Successfully!", "success");
                                fetchMachineData(lineId,plantId);
                            } else if (response == 2) {
                                swal("Error!", "Enter Machine Number!", "info");
                            }
                        },
                        error: function (error) {
                            console.error('Error:', error);
                        }
                    });
            }else {
                swal("ERROR!", "YOU DONT HAVE ACCESS", "error");
            }
            
        });
        

        $(document).on('click', '#addMultipleMachines', function () {
            var plantId = $(this).data('plantid');
            var lineId = $(this).data('lineid');
                
            if(plantId && lineId){
                $('#machinePlantId').val(plantId);
                $('#machineLineId').val(lineId);
            }else {
                $('#addMachinesModal').modal('hide');
                swal("Error!", "Please Select Machine and Line!", "info");
            }
                
        });
                        $('#addMachine').on('click', function() {
                            if(machineAccess == 1){
                                var plantId = $('#machinePlantId').val();
                                var lineId = $('#machineLineId').val();
                                var machineNumber = $('#machineNumber').val();
                    
                                    $.ajax({
                                        type: 'POST',
                                        url: 'insertData.php',
                                        data: {
                                            plantId: plantId,
                                            lineId: lineId,
                                            machineNumber: machineNumber,
                                            work : 5
                                        },
                                        dataType: 'json',
                                        success: function(response) {
                                            if (response == 1) {
                                                swal("Good job!", "Inserted Successfully!", "success");
                                                fetchMachineData(lineId,plantId);
                                                $("#addMachineForm")[0].reset();
                                            } else if (response == 2) {
                                                swal("Error!", "Enter Role Name!", "info");
                                            }
                                        },
                                        error: function (error) {
                                            console.error('Error:', error);
                                        }
                                    });
                            }else {
                                swal("ERROR!", "YOU DONT HAVE ACCESS", "error");
                            }
                            
                        });


        ///////////////////////////////////////////////

        function convertToCSV(data) {
            const rows = [];

            data.each(function (index, row) {
                const rowData = [];
                $(row).find('td').each(function () {
                    rowData.push($(this).text());
                });
                rows.push(rowData.join('\t'));
            });

            return rows.join('\n\n'); 
        }

        $(document).on('click', '#downloadLink', function (e) {
            e.preventDefault();

            if(machineAccess == 1){
                const tableData = $('#evenMachineTable tbody, #oddMachineTable tbody');

                const csvData = convertToCSV(tableData);

                const blob = new Blob([csvData], { type: 'text/csv;charset=utf-8;' });

                const link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.setAttribute('download', 'machine_data.csv');

                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }else {
                swal("ERROR!", "YOU DONT HAVE ACCESS", "error");
            }
            
        });




        function onChangeUpload(lineId,plantId) {
            
            $('#fileUpload').on('change', function () {
                var formData = new FormData();
                var fileInput = this.files[0];

                formData.append('file', fileInput);
                formData.append('plantId', plantId);
                formData.append('lineId', lineId);

                $.ajax({
                    type: 'POST',
                    url: 'uploadFile.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });
        }

        $('#fileUpload').on('click', function () {
            var lineId = $(this).data('lineid');
            var plantId = $(this).data('plantid');

            if (lineId && plantId) {
                onChangeUpload(lineId, plantId);
                $('#fileUpload').click();
            } else {
                swal("Error", "Please select Plant and Line", "info");
                return false; 
            }     
     
        });
    });
</script>

</body>
</html>