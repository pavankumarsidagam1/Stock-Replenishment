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
    .changeHeight{
        height : 450px;
    }
    @media (max-width: 767px) {
        .changeHeight {
            height: 100%; 
        }
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
        <div class="col-12 col-md-2 mx-auto mb-3">
        </div>
        <div class="col-12 col-md-1 mx-auto mb-3">
        </div>
        <div class="col-12 col-md-2 mx-auto mb-3">
            <div class="d-flex align-items-center justify-content-center py-2 rounded-2" style="background-color: #F5F5F5;">
                <iconify-icon icon="bi:buildings" class="ps-4 pe-1" width="25"></iconify-icon>
                <select class="form-select text-decoration-none me-1 border-0" id="plantSelect" name="plantSelect" style="background-color: #F5F5F5; color: black;">
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
        <div class="col-12 col-md-1 mx-auto mb-3">
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="container mb-4">
    <div class="row mb-2">
        <div class="col-5 ms-auto d-flex justify-content-end">
            <a class="btn me-2" style="background-color: #F5F5F5;" href="addPlant.php" role="button">PLANT</a>
            <a class="btn me-2" href="addRoles.php" style="background-color: #243A85CC;  color: white;" role="button">ROLES</a>
            <a class="btn me-2" href="addUser.php" style="background-color: #F5F5F5; " role="button">USERS</a>
        </div>
    </div>
    <div class="row d-flex flex-column flex-md-row changeHeight" style="background-color: #F5F5F5; border-radius: 20px;">
        <div class="col-12 col-md-4 mt-5 ps-2 ps-md-5">
            <form method="POST" id="roleForm">
                <span style="font-weight: bold;">Create Role</span>
                <div class="mt-3 mb-1">
                    <label for="roleName" class="form-label">Role Name</label>
                    <input type="email" class="form-control" id="roleName" name="roleName" placeholder="Create Role">
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <input type="submit" name="save" class="btn" style="background-color: #243A85CC; color: white;" id="save" value="SAVE">
                </div>
            </form>
        </div>
        <div class="col-0 col-md-2"></div>
        <div class="col-12 col-md-6 mt-4">
            <span style="font-weight: bold;">Roles List</span>
            <div class="table-responsivev">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <td style="border-top-left-radius: 10px; border-top-right-radius: 10px">ROLE NAME</td>
                        </tr>
                    </thead>
                    <tbody id="roleTableBody">
                        <!-- Modal EDIT ROLE -->
                        <div class="modal fade" id="editRoleModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">EDIT ROLE</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="roleId" class="form-label">Role Id</label>
                                                <input type="text" class="form-control py-3" id="roleId" name="roleId">
                                            </div>
                                            <label for="roleUpdateName" class="form-label">Role Name</label>
                                            <input type="text" class="form-control py-2" id="roleUpdateName" name="roleUpdateName">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="updateRole">UPDATE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL END  -->
                         <!-- Modal DELETE PLANT -->
                         <div class="modal fade" id="deleteRoleModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content py-2">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">DELETE PLANT</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="roleIddelete" class="form-label">Role Id</label>
                                                <input type="text" class="form-control" id="roleIddelete" name="roleIddelete">
                                            </div>
                                            <span class="py-3">ARE YOU REALLY WANT TO DELETE THE PLANT ?</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="deleteRoleBtn">DELETE</button>
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
    $(document).ready(function(){
        var plantSelect = $('#plantSelect');

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

        $('#plantSelect').on('change', function(){
            var plantId = $(this).val();
            fetchDataAndUpdateUI(plantId);    
        });

        function fetchDataAndUpdateUI(plantId){
            $.ajax({
                type: 'POST',
                url: 'fetchData.php',
                data: { plantId: plantId, work : 2},
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#roleTableBody').empty();

                    $.each(data, function (index, role) {
                        var row =   '<tr>' +
                                    '<td>' +
                                    '<div class="d-flex align-items-center justify-content-between">' +
                                    '<span>' + role.role_name + '</span>' +
                                    '<div>' +
                                    '<a href="#" class="me-1 text-decoration-none edit-role" data-bs-toggle="modal" data-bs-target="#editRoleModal" data-role-id="' + role.role_id + '" data-role-name="' + role.role_name + '">' +
                                    '<iconify-icon icon="akar-icons:edit" style="color: black;" width="20"></iconify-icon>' +
                                    '</a>' +
                                    '<a href="#" class="pe-1 text-decoration-none delete-role" data-bs-toggle="modal" data-bs-target="#deleteRoleModal" data-role-id="' + role.role_id + '">' +
                                    '<iconify-icon icon="material-symbols:delete-outline" style="color: black;" width="20"></iconify-icon>' +
                                    '</a>' +
                                    '<iconify-icon icon="bi:chevron-down" style="color: black; cursor: pointer;" width="17" class="accordion-icon collapsed" data-bs-toggle="collapse" data-bs-target="#accordionContent' + role.role_id + '" aria-expanded="false" aria-controls="accordionContent' + index + '"></iconify-icon>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="accordion-collapse collapse" id="accordionContent' + role.role_id + '">' +
                                    '<div class="accordion-body">' +
                                    '<div class="d-flex align-items-center justify-content-between">' +
                                    '<div>' +
                                    '<input type="checkbox" id="dashboardCheckbox' + role.role_id + '" checked>' +
                                    '<label class="ms-3" for="dashboardCheckbox' + role.role_id + '">Dashboard</label>' +
                                    '</div>' +
                                    '<div class="pe-5">' +
                                    '<div class="form-check form-check-inline">' +
                                    '<input class="form-check-input" type="radio" name="dashboardOptions' + role.role_id + '" id="readOnlyDashboard' + role.role_id + '" value="readOnly" checked>' +
                                    '<label class="form-check-label" for="readOnlyDashboard' + role.role_id + '">Read Only</label>' +
                                    '</div>' +
                                    '<div class="form-check form-check-inline">' +
                                    '<input class="form-check-input" type="radio" name="dashboardOptions' + role.role_id + '" id="readWriteDashboard' + role.role_id + '" value="readWrite">' +
                                    '<label class="form-check-label" for="readWriteDashboard' + role.role_id + '">Read Write</label>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="d-flex align-items-center justify-content-between">' +
                                    '<div>' +
                                    '<input type="checkbox" id="machineCheckbox' + role.role_id + '" checked>' +
                                    '<label class="ms-3" for="machineCheckbox' + role.role_id + '">Machine</label>' +
                                    '</div>' +
                                    '<div class="pe-5">' +
                                    '<div class="form-check form-check-inline">' +
                                    '<input class="form-check-input" type="radio" name="machineOptions' + role.role_id + '" id="readOnlyMachine' + role.role_id + '" value="readOnly" checked>' +
                                    '<label class="form-check-label" for="readOnlyMachine' + role.role_id + '">Read Only</label>' +
                                    '</div>' +
                                    '<div class="form-check form-check-inline">' +
                                    '<input class="form-check-input" type="radio" name="machineOptions' + role.role_id + '" id="readWriteMachine' + role.role_id + '" value="readWrite">' +
                                    '<label class="form-check-label" for="readWriteMachine' + role.role_id + '">Read Write</label>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="d-flex align-items-center justify-content-between">' +
                                    '<div>' +
                                    '<input type="checkbox" id="linesCheckbox' + role.role_id + '" checked>' +
                                    '<label class="ms-3" for="linesCheckbox' + role.role_id + '">Lines</label>' +
                                    '</div>' +
                                    '<div class="pe-5">' +
                                    '<div class="form-check form-check-inline">' +
                                    '<input class="form-check-input" type="radio" name="linesOptions' + role.role_id + '" id="readOnlyLines' + role.role_id + '" value="readOnly" checked>' +
                                    '<label class="form-check-label" for="readOnlyLines' + role.role_id + '">Read Only</label>' +
                                    '</div>' +
                                    '<div class="form-check form-check-inline">' +
                                    '<input class="form-check-input" type="radio" name="linesOptions' + role.role_id + '" id="readWriteLines' + role.role_id + '" value="readWrite">' +
                                    '<label class="form-check-label" for="readWriteLines' + role.role_id + '">Read Write</label>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</td></tr>';
                        $('#roleTableBody').append(row);

                        $('input[name="dashboardOptions' + role.role_id + '"]').prop('checked', role.dashboard_access == 1);
                        $('input[name="machineOptions' + role.role_id + '"]').prop('checked', role.machine_access == 1);
                        $('input[name="linesOptions' + role.role_id + '"]').prop('checked', role.line_access == 1);

                        if (role.dashboard_access == 0) {
                            $('#readOnlyDashboard' + role.role_id).prop('checked', true);
                        }
                        if (role.machine_access == 0) {
                            $('#readOnlyMachine' + role.role_id).prop('checked', true);
                        }
                        if (role.line_access == 0) {
                            $('#readOnlyLines' + role.role_id).prop('checked', true);
                        }

                        $('input[name="dashboardOptions' + role.role_id + '"]').change(function () {
                            var selectedValue = $('input[name="dashboardOptions' + role.role_id + '"]:checked').val();
                            handleRadioChange(role.role_id, 'dashboard_access', selectedValue);
                        });

                        $('input[name="machineOptions' + role.role_id + '"]').change(function () {
                            var selectedValue = $('input[name="machineOptions' + role.role_id + '"]:checked').val();
                            handleRadioChange(role.role_id, 'machine_access', selectedValue);
                        });

                        $('input[name="linesOptions' + role.role_id + '"]').change(function () {
                            var selectedValue = $('input[name="linesOptions' + role.role_id + '"]:checked').val();
                            handleRadioChange(role.role_id, 'line_access', selectedValue);
                        });
                    });
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        };


        function handleRadioChange(roleId, section, selectedValue) {
            if(selectedValue === 'readOnly'){
                selectedValue = 0;
            } else if(selectedValue === 'readWrite'){
                selectedValue = 1;
            }

            console.log('Role ID:', roleId, 'Section:', section, 'Selected Value:', selectedValue);

                $.ajax({
                    type: 'POST',
                    url: 'user_access.php',
                    data: {
                        roleId: roleId,
                        section: section,
                        selectedValue: selectedValue,
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response)
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });
        }

        $('#save').on('click', function(e){
            event.preventDefault();
            var plantId = plantSelect.val();
            var roleName = $('#roleName').val();

            if (plantId !== '') {
                $.ajax({
                    type: 'POST',
                    url: 'insertData.php',
                    data: {
                        plantId: plantId,
                        roleName: roleName,
                        work : 2
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response == 1) {
                            swal("Good job!", "Inserted Successfully!", "success");
                            fetchDataAndUpdateUI(plantId);
                            $("#roleForm")[0].reset();
                        } else if (response == 2) {
                            swal("Error!", "Enter Role Name!", "info");
                        }
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                swal("Error!", "Please Select a Plant!", "info");
            }
        });

        //assigning the values to the inputs fields of edit modal
        $(document).on('click', '.edit-role', function () {
            var roleeId = $(this).data('role-id');
            var roleeName = $(this).data('role-name');

            $('#roleId').val(roleeId);
            $('#roleUpdateName').val(roleeName);
        });

         //Updating Data Function
        $('#updateRole').on('click', function () {
            plantId = plantSelect.val();
            var roleId = $('#roleId').val();
            var roleUpdateName = $('#roleUpdateName').val();

            $.ajax({
                type: 'POST',
                url: 'updateData.php', 
                data: {
                    roleId: roleId,
                    roleUpdateName: roleUpdateName,
                    work : 2
                },
                dataType: 'json',
                success: function (response) {
                    if (response == 1) {
                        swal("Good job!", "Updated Successfully!", "success");
                        fetchDataAndUpdateUI(plantId);
                    }else if(response == 2){
                        swal("Error!", "Enter Role Name!", "info");
                    }
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        });
        //assigning the values to the inputs fields of delete modal
        $(document).on('click', '.delete-role', function () {
            var roleId = $(this).data('role-id');
            $('#roleIddelete').val(roleId);
        });

        $('#deleteRoleBtn').on('click', function () {
            var roleId = $('#roleIddelete').val();
            plantId = plantSelect.val();
            
            $.ajax({
                type: 'POST',
                url: 'deletePlant.php', 
                data: { roleId: roleId,work : 2 },
                dataType: 'json',
                success: function (response) {
                    if (response==1) {
                        fetchDataAndUpdateUI(plantId);
                        swal("Good job!", "Role Deleted Successfully!", "success");
                    }
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>