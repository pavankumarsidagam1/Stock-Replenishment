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
 
   .loaded{
        background-color: #d30303ab;
   }
   .empty{
        background-color: #3BFC2E66;
   }
   .empty, .loaded{
        width: 169px;
        height: 143px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
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
<div class="container mb-4" >
    <div class="row mb-2">
        <div class="col-5 ms-auto d-flex justify-content-end">
            <a class="btn me-2" style="background-color: #F5F5F5;" href="addPlant.php" role="button">PLANT</a>
            <a class="btn me-2" href="addRoles.php" style="background-color: #F5F5F5;" role="button">ROLES</a>
            <a class="btn me-2" href="addUser.php" style="background-color: #243A85CC; color: white;" role="button">USERS</a>
        </div>
    </div>
    <div class="row d-flex flex-column flex-md-row changeHeight" style="background-color: #F5F5F5; border-radius: 20px;">
        <div class="col-0 col-md-1"></div>
        <div class="col-12 col-md-2 mt-5">
            <div class="mb-3" style="font-weight: bold;">
                Create User
            </div>
            <div>
                <div class="d-flex align-items-center justify-content-center py-2 rounded-2" style="background-color: #243A85CC;">
                    <iconify-icon icon="ic:baseline-add" class="pe-1" style="color: white;" width="25"></iconify-icon>
                    <a href="#" class="text-decoration-none me-1" style="color: white;" data-bs-toggle="modal" data-bs-target="#createUserModal">
                        CREATE USER
                    </a>
                </div>
            </div>
                <!-- Modal Status -->
                <div class="modal fade" id="createUserModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content p-4">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">CREATE USER</h5>
                            </div>
                            <form id="userForm" method="POST">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="userName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="userName" name="userName">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="roleId" class="form-label">Role</label>
                                                <select class="form-control" id="roleId" name="roleId">
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="mail" class="form-label">Mail ID</label>
                                                <input type="email" id="mail" class="form-control" name="mail"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                                <input type="password" id="confirmPassword" class="form-control" name="confirmPassword"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="addUserBtn">SAVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- MODAL END  -->           
        </div>
        <div class="col-0 col-md-3"></div>
        <div class="col-12 col-md-6 mt-3 pt-1">
            <span style="font-weight: bold;">Users List</span>
            <div class="table-responsivev">
                <table class="table table-borderless">
                    <thead >
                        <tr>
                            <td style="border-top-left-radius: 10px;">USER NAME</td>
                            <td>EMAIL ID</td>
                            <td>STATUS</td>
                            <td>ROLE</td>
                            <td style="border-top-right-radius: 10px;"></td>

                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                         <!-- Modal EDIT PLANT -->
                         <div class="modal fade" id="editUserModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">EDIT PLANT</h5>
                                    </div>
                                    <form method="POST" id="updateUserForm">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-3 d-none">
                                                        <label for="userIdUpdate" class="form-label">User Id</label>
                                                        <input type="text" class="form-control" id="userIdUpdate" name="userIdUpdate">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="userNameUpdate" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="userNameUpdate" name="userNameUpdate">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="roleIdUpdate" class="form-label">Role</label>
                                                        <select class="form-control" id="roleIdUpdate" name="roleIdUpdate">
                                                            <?php
                                                            $role_names = mysqli_query($conn,"SELECT * from roles WHERE status = '1'") or die(mysqli_error($conn));
                                                            while ($role_name = mysqli_fetch_object($role_names)){
                                                            ?>
                                                            <option value="<?php echo $role_name->role_id ?>" > <?php echo $role_name->role_name ?></option>
                                                            <?php } ?>   
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="mailUpdate" class="form-label">Mail ID</label>
                                                        <input type="email" id="mailUpdate" class="form-control" name="mailUpdate"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="userStatusUpdate" class="form-label">Status</label>
                                                        <select class="form-control" id="userStatusUpdate" name="userStatusUpdate">
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>   
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="updateUser">UPDATE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL END  -->

                        <!-- Modal DELETE PLANT -->
                        <div class="modal fade" id="deleteUserModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content py-2">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">DELETE PLANT</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="userIdDelete" class="form-label">User Id</label>
                                                <input type="text" class="form-control" id="userIdDelete" name="userIdDelete">
                                            </div>
                                            <span class="py-3">ARE YOU REALLY WANT TO DELETE THE USER?</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="deleteUserBtn">DELETE</button>
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

        $('#addUserBtn').on('click', function(){
            event.preventDefault();
            var plantId = plantSelect.val();
            var userName = $('#userName').val();
            var password = $('#password').val();
            var roleId = $('#roleId').val();
            var mail = $('#mail').val();
            var confirmPassword = $('#confirmPassword').val();
            
            if (plantId !== '') {
                $.ajax({
                    type:'POST',
                    url: 'insertData.php',
                    data: {
                        plantId: plantId,
                        userName: userName,
                        password: password,
                        roleId: roleId,
                        mail: mail,
                        confirmPassword: confirmPassword,
                        work: 3,
                    },
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                        if (response == 1) {
                            $("#userForm")[0].reset();
                            fetchDataUser(plantId);
                            swal("Good job!", "Inserted Successfully!", "success");
                        } else if (response == 2) {
                            swal("Error!", "Enter All Details!", "info");
                        }else if(response == 3){
                            swal("Password Error!", "Password And Confirm Password Are Not Same!", "info");
                        }
                    },
                    error: function(error){
                        console.log(error);
                    }
                });
            } else {
                swal("Error!", "Please Select a Plant!", "info");
            }
           
        });

        
        $('#plantSelect').on('change', function(){
            var plantId = $(this).val();

            $.ajax({
                type: 'POST',
                url: 'fetchData.php',
                data: {plantId: plantId, work : 2},
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    var roleIdUpdateSelect = $('#roleIdUpdate');
                    roleIdUpdateSelect.empty();
                    
                    var roleIdSelect = $('#roleId');
                    roleIdSelect.empty();

                    $.each(data, function (index, role) {                        
                        roleIdUpdateSelect.append('<option value="' + role.role_id + '">' + role.role_name + '</option>');
                        roleIdSelect.append('<option value="' + role.role_id + '">' + role.role_name + '</option>');
                    });                    
                }
            });

            fetchDataUser(plantId);
        });

        function fetchDataUser(plantId){
            $.ajax({
                type: 'POST',
                url: 'fetchData.php',
                data: { plantId: plantId, work : 3},
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#userTableBody').empty();
                    

                    $.each(data, function(index, user) {
                        var row = '<tr>' +
                            '<td>' + user.name + '</td>' +
                            '<td>' + user.email + '</td>' +
                            '<td>' + user.user_status + '</td>' +
                            '<td>' + user.role_name + '</td>' +
                            '<td>' +
                                '<a href="#" class="me-1 text-decoration-none edit-user" role="button" data-bs-toggle="modal" data-bs-target="#editUserModal" ' +
                                'data-userid="' + user.user_id + '" data-username="' + user.name + '" data-useremail="' + user.email + '" data-userrole="' + user.role_id + '" data-userstatus="' + user.user_status + '">' +
                                '<iconify-icon icon="akar-icons:edit" style="color: black;" width="20"></iconify-icon>' +
                                '</a>' +
                                '<a href="#" class="pe-1 text-decoration-none delete-user" role="button" data-bs-toggle="modal" data-bs-target="#deleteUserModal" data-userid="' + user.user_id + '">' +
                                '<iconify-icon icon="material-symbols:delete-outline" style="color: black;" width="20"></iconify-icon>' +
                                '</a>' +
                            '</td>'
                            '</tr>';

                        $('#userTableBody').append(row);
                       
                    });
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        }

        //assigning the values to the inputs fields of edit modal
        $(document).on('click', '.edit-user', function () {
            var userId = $(this).data('userid'); 
            var userName = $(this).data('username');
            var userEmail = $(this).data('useremail');
            var userRole = $(this).data('userrole');
            var userStatus = $(this).data('userstatus');

            $('#userIdUpdate').val(userId);
            $('#userNameUpdate').val(userName);
            $('#mailUpdate').val(userEmail);
            $('#roleIdUpdate').val(userRole);
            $('#userStatusUpdate').val(userStatus);
        });

         //Updating Data Function
         $('#updateUser').on('click', function () {
            var plantId = plantSelect.val();
            var userId = $('#userIdUpdate').val();
            var userNameUpdate = $('#userNameUpdate').val();
            var userEmailUpdate = $('#mailUpdate').val();
            var userRoleUpdate = $('#roleIdUpdate').val();
            var userStatusUpdate = $('#userStatusUpdate').val();

            $.ajax({
                type: 'POST',
                url: 'updateData.php', 
                data: {
                    userId: userId,
                    userNameUpdate: userNameUpdate,
                    userEmailUpdate: userEmailUpdate,
                    userRoleUpdate: userRoleUpdate,
                    userStatusUpdate: userStatusUpdate,
                    work: 3
                },
                dataType: 'json',
                success: function (response) {
                    if (response == 1) {
                        $("#updateUserForm")[0].reset();
                        fetchDataUser(plantId);
                        swal("Good job!", "Updated Successfully!", "success");
                    } else if(response == 2){
                        swal("Error!", "Enter All Details!", "info");
                    }
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        });

        //assigning the values to the inputs fields of delete modal
        $(document).on('click', '.delete-user', function () {
            var userId = $(this).data('userid');
            $('#userIdDelete').val(userId);
        });

        $('#deleteUserBtn').on('click', function () {
            var plantId = plantSelect.val();
            var userId = $('#userIdDelete').val();

            $.ajax({
                type: 'POST',
                url: 'deletePlant.php', 
                data: { userId: userId, work:3 },
                dataType: 'json',
                success: function (response) {
                    if (response==1) {
                        fetchDataUser(plantId);
                        swal("Good job!", "User Deleted Successfully!", "success");
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
