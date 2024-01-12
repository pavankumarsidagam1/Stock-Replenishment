<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <title>Access Create User</title>
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
            <a href="#" class="me-1" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <iconify-icon icon="mingcute:user-4-fill" style="color: white;" width="30"></iconify-icon>
            </a>
          </div>
      </div>
     
    </div>
</nav>
  <!-- Navbar -->

<div class="container-fluid">
    <div class="row p-0 pt-3 pb-2">
        <div class="col-12 col-md-6 mx-auto mb-3 ps-0 ps-lg-5 ps-md-3">
            <div class="d-flex align-items-center justify-content-center justify-content-lg-start justify-content-md-start">
                <img src="./images/roop-polymer-logo.png" width="35" alt="logo">
                <h4 class="ps-2 pt-2 fw-bolder">ACCESS</h4>
            </div>
        </div>
        <div class="col-12 col-md-6 mx-auto mb-3">
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="container mb-4">
    <div class="row mb-2">
        <div class="col-5 ms-auto d-flex justify-content-end">
            <a class="btn me-2" style="background-color: #243A85CC; color: white;" href="addPlant.php" role="button">PLANT</a>
            <a class="btn me-2" href="addRoles.php" style="background-color: #F5F5F5;" role="button">ROLES</a>
            <a class="btn me-2" href="addUser.php" style="background-color: #F5F5F5; " role="button">USERS</a>
        </div>
    </div>
    <div class="row d-flex flex-column flex-md-row" style="background-color: #F5F5F5; border-radius: 20px;">
        <div class="col-12 col-md-4 mt-5 ps-2 ps-md-5">
            <form method="POST" id="plantForm">
                <span style="font-weight: bold;">Create Plant</span>
                <div class="mt-3 mb-5">
                    <label for="plantName" class="form-label">Plant Name</label>
                    <input type="email" class="form-control" id="plantName" name="plantName" placeholder="Seat Rubber">
                </div>
                <span style="font-weight: bold;">Assign Status</span>
                <div class="d-flex align-items-center w-25 justify-content-center py-2 rounded-2" style="background-color: #243A85CC;">
                    <iconify-icon icon="ic:baseline-add" class="pe-1" style="color: white;" width="25"></iconify-icon>
                    <a href="#" class="text-decoration-none me-1" style="color: white;" data-bs-toggle="modal" data-bs-target="#statusModal">
                        STATUS
                    </a>
                </div>
                
                <!-- Modal Status -->
                <div class="modal fade" id="statusModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content p-5">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">ADD STATUS</h5>
                            </div>
                            <form id="statusForm" method="POST">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="mb-3">
                                                <label for="statusName" class="form-label">Status Name</label>
                                                <select class="form-control" name="statusName" id="statusName">
                                                <option value="LOADED">LOADED</option>
                                                <option value="HOLD">HOLD</option>  
                                                <option value="EMPTY">EMPTY</option>                                               
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="hexNumber" class="form-label">HEX Number</label>
                                                <input type="text" class="form-control" id="hexNumber" name="hexNumber" placeholder="Automatically filled after color selection">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <label for="colorPicker" class="form-label">Select Color:</label>
                                                <input type="color" id="colorPicker" class="form-control" name="selectedColor"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="addStatusBtn">ADD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- MODAL END  -->


                <div class="mb-2 rounded-2" style="background-color: white;" >
                    <div id="dynamicStatus" class="pt-3">
                        <!-- <div class="d-flex justify-content-between py-3 w-75">
                            <span class="ps-3" style="font-size: 15px;">LOADED</span>
                            <div style="background-color: #3BFC2E66; width: 15px; height: 15px;" id="loaded"></div>                        
                        </div>
                        <div class="d-flex justify-content-between pb-3 w-75">
                            <span class="ps-3" style="font-size: 15px;">EMPTY</span>
                            <div style="background-color: #EF2B2B8C; width: 15px; height: 15px;" id="empty"></div>                        
                        </div>
                        <div class="d-flex justify-content-between pb-3 w-75">
                            <span class="ps-3" style="font-size: 15px;">HOLD</span>
                            <div style="background-color: #FAFF7E8C; width: 15px; height: 15px;" id="hold"></div>                        
                        </div> -->
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <input type="submit" name="save" class="btn" style="background-color: #243A85CC; color: white;" id="save" value="SAVE">
                </div>
            </form>
        </div>
        <div class="col-0 col-md-3"></div>
        <div class="col-12 col-md-5 mt-4">
            <span style="font-weight: bold;">Plants List</span>
            <div class="table-responsivev">
                <table class="table table-borderless">
                    <thead >
                        <tr>
                            <td style="border-top-left-radius: 10px;">PLANT NAME</td>
                            <td style="border-top-right-radius: 10px;"></td>
                        </tr>
                    </thead>
                    <tbody id="plantTableBody">
                         <!-- Modal EDIT PLANT -->
                        <div class="modal fade" id="editPlantModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">EDIT PLANT</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="plantId" class="form-label">Plant Id</label>
                                                <input type="text" class="form-control py-3" id="plantId" name="plantId">
                                            </div>
                                            <label for="plantUpdateName" class="form-label">Plant Name</label>
                                            <input type="text" class="form-control py-2" id="plantUpdateName" name="plantUpdateName">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="updatePlant">UPDATE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL END  -->

                         <!-- Modal DELETE PLANT -->
                         <div class="modal fade" id="deletePlantModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content py-2">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">DELETE PLANT</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="plantIddelete" class="form-label">Plant Id</label>
                                                <input type="text" class="form-control" id="plantIddelete" name="plantIddelete">
                                            </div>
                                            <span class="py-3">ARE YOU REALLY WANT TO DELETE THE PLANT ?</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="deletePlantBtn">DELETE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL END  -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row py-2" >
        <div class="col-12 col-lg-9 col-md-8 d-flex align-items-center">
            <img class="mx-2 mx-lg-5 mx-md-4" src="./images/footerLogo.png"  width="55px" alt="">
            <div>
            </div>
            <div>
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
<script>
document.getElementById('colorPicker').addEventListener('input', function(event) {
    document.getElementById('hexNumber').value = event.target.value;
});

$(document).ready(function() {
    displayPlantData();
    dynamicStatusf();
    var statusFormData = {}; 
    $('#addStatusBtn').on('click', function() {
        statusFormData = {
            statusName: $('#statusName').val(),
            hexNumber: $('#hexNumber').val(),
        };
        // console.log(statusFormData);
    });

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
    $('#save').on('click', function() {
        var plantData = {
            plantName: $('#plantName').val(),
            statusName: statusFormData.statusName || '', 
            hexNumber: statusFormData.hexNumber || '',
            work : 1
        };
        console.log(plantData);
        $.ajax({
            type: 'POST',
            url: 'insertData.php', 
            data: { plantData: plantData },
            dataType: 'json',
            success: function(response) {
                if (response === 1) {
                    swal("Good job!", "Inserted Successfully!", "success");
                    $("#plantForm")[0].reset();
                    dynamicStatusf();
                    displayPlantData();
                } else if (response === 2) {
                    swal("Error!", "Enter Plant Name And Status!", "info");
                }
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });

    function dynamicStatusf (){
            $.ajax({
                type: 'POST',
                url: 'fetchData.php',
                data : {work : 6}, 
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                
                    $('#dynamicStatus').empty();

                    $.each(data, function (index, status) {
                        var statusContent =
                            '<div class="d-flex justify-content-between pb-3 w-75">' +
                            '<span class="ps-3" style="font-size: 15px;">' + status.status_name + '</span>' +
                            '<div style="background-color: ' + status.hex_number + '; width: 15px; height: 15px;"></div>' +
                            '</div>';

                        $('#dynamicStatus').append(statusContent);
                    });
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
    }
    


    function displayPlantData() {
            $.ajax({
                type: 'POST',
                url: 'fetchData.php',
                data : {work : 1}, 
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                
                    $('#plantTableBody').empty();

                    $.each(data, function (index, plant) {
                        var row = '<tr>' +
                        '<td>' + plant.plant_name + '</td>' +
                        '<td class="d-flex justify-content-end">' +
                        '<a href="#" class="me-1 text-decoration-none edit-plant" data-bs-toggle="modal" data-bs-target="#editPlantModal" data-plantid="' + plant.plant_id + '" data-plantname="' + plant.plant_name + '">' +
                        '<iconify-icon icon="akar-icons:edit" style="color: black;" width="20"></iconify-icon>' +
                        '</a>' +
                        '<a href="#" class="pe-1 text-decoration-none delete-plant" data-bs-toggle="modal" data-bs-target="#deletePlantModal" data-plantiddelete="' + plant.plant_id + '">' +
                        '<iconify-icon icon="material-symbols:delete-outline" style="color: black;" width="20"></iconify-icon>' +
                        '</a>' +
                        '</td>' +
                        '</tr>';
                        $('#plantTableBody').append(row);
                    });
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
    }
    
   
    //assigning the values to the inputs fields of edit modal

    $(document).on('click', '.edit-plant', function () {
        var plantId = $(this).data('plantid');
        var plantName = $(this).data('plantname');

        $('#plantId').val(plantId);
        $('#plantUpdateName').val(plantName);
    });

    //Updating Data Function
    $('#updatePlant').on('click', function () {
        var plantId = $('#plantId').val();
        var updatedPlantName = $('#plantUpdateName').val();

        $.ajax({
            type: 'POST',
            url: 'updateData.php', 
            data: {
                plantId: plantId,
                updatedPlantName: updatedPlantName,
                work : 1
            },
            dataType: 'json',
            success: function (response) {
                if (response == 1) {
                    displayPlantData();
                    swal("Good job!", "Updated Successfully!", "success");
                }else if(response == 2){
                    swal("Error!", "Enter Plant Name!", "info");
                }
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });

    //assigning the values to the inputs fields of delete modal
    $(document).on('click', '.delete-plant', function () {
        var plantId = $(this).data('plantiddelete');
        $('#plantIddelete').val(plantId);
    });

    $('#deletePlantBtn').on('click', function () {
        var plantId = $('#plantIddelete').val();

        $.ajax({
            type: 'POST',
            url: 'deletePlant.php', 
            data: { plantId: plantId, work:1 },
            dataType: 'json',
            success: function (response) {
                if (response==1) {
                    displayPlantData();
                    swal("Good job!", "Plant Deleted Successfully!", "success");
                     
                }
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });

});

    
    
</script>
</body>
</html>