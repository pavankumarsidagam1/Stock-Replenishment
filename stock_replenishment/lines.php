<?php
require_once('config.php');
session_start();
$machineAccess = $_SESSION['line_access'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <title>Lines</title>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    table {
        border-collapse: separate;
        border-spacing: 0 16px;
   }
    thead {
        background-color: #243A8599;
    }
    tbody tr{
        background-color: #F5F5F5;
    }
    thead tr td {
        color: white;
        font-size: 14px;        
    }
    tbody tr td {
        color: #050505;
        font-size: 12px;
    }
    .footerDiv {
        background-color: #d7d6d6c1;
    }
    .footeranchor {
        color: black;
    }
    .clickable {
        cursor: pointer;
    }

    tbody tr td.clicked {
        background-color: #243A853B ;
    }

    .footeranchor.clicked {
        color: white ;
        font-size: 12px;
    }

    .footerDiv.clicked {
        background-color: #243A85CC ; 
    }

    .footerIcon.clicked {
        color: white ; 
    }
    .changeHeight{
        height : 428px;
    }
    @media (max-width: 767px) {
        .changeHeight {
            height: 100%; 
        }
    }
    .machineCss{
        background-color: #243A85CC;
        color: white;
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
        <div class="col-12 col-md-9 mx-auto mb-3 ps-0 ps-lg-5 ps-md-3">
            <div class="d-flex align-items-center justify-content-center justify-content-lg-start justify-content-md-start">
                <img src="./images/roop-polymer-logo.png" width="35" alt="logo">
                <h4 class="ps-2 pt-2 fw-bolder">LINES</h4>
            </div>
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
    </div>
</div>
<!-- Main Content -->
<div class="container-fluid">
    <div class="row mb-2 ms-0 ms-lg-4">
        <div class="col-12 pe-lg-2 px-3 d-flex" >
            <div class="rounded-3 me-2 px-1 py-2 me-auto d-flex align-items-center" style="background-color: #243A85CC; color: white;">
                <iconify-icon icon="ic:baseline-add" class="pe-1" width="19"></iconify-icon>
                <a class="text-decoration-none me-2" href="" style="color: white; font-size: 14px;" role="button" data-bs-toggle="modal" data-bs-target="#lineModal">
                    LINE
                </a>
            </div>

                        <!-- Modal ADD LINE -->
                        <div class="modal fade" id="lineModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">ADD LINE</h5>
                                    </div>
                                    <form method="POST" id="addLineForm">
                                        <div class="modal-body">
                                            <label for="lineName" class="form-label">Line Name</label>
                                            <input type="text" class="form-control py-2" id="lineName" name="lineName">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" data-bs-dismiss="modal" id="addLine">ADD</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL END  -->
            <div class="rounded-3 px-1 me-5 ms-auto" id="dynamicHeader">
                <!-- dynamic Machine Button -->
            </div>
                        <!-- Modal ADD MACHINE -->
                        <div class="modal fade" id="addMachinesModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content p-5">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">ADD MACHINE</h5>
                                    </div>
                                    <form method="POST" id="addingMultipleMachineForm">
                                        <div class="modal-body">
                                            <div class="d-none">
                                                <label for="machinePlantIdAdd" class="form-label">Plant Id</label>
                                                <input type="text" class="form-control py-3" id="machinePlantIdAdd" name="machinePlantIdAdd">
                                            </div>
                                            <div class="d-none">
                                                <label for="machineLineIdAdd" class="form-label">line Id</label>
                                                <input type="text" class="form-control py-3" id="machineLineIdAdd" name="machineLineIdAdd">
                                            </div>
                                            <div class="form-check px-5">
                                                <input class="form-check-input" type="checkbox" id="selectAll">
                                                <label class="form-check-label" for="selectAll">Select All</label>
                                            </div>

                                            <div class="mb-3">
                                                <?php for ($i = 1; $i <= 12; $i++) { ?>
                                                    <div class="form-check form-check-inline ps-5 py-2">
                                                        <input class="form-check-input checkbox-group" type="checkbox" id="checkbox<?php echo $i; ?>">
                                                        <label class="form-check-label" for="checkbox<?php echo $i; ?>">CM 01 (250T)</label>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="button" class="btn px-5" style="background-color: #243A85CC; color: white;" id="addingMultipleMachine" data-bs-dismiss="modal">ADD</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- MODAL END  -->
        </div>
    </div>
    <div class="row d-flex flex-column flex-md-row ms-0 ms-lg-4 changeHeight">
        <div class="col-12 col-lg-3 px-3">
            <div class="table-responsive">
                <table class="table table-borderless line-table">
                    <thead>
                        <tr>
                            <td style="border-top-left-radius: 10px; border-top-right-radius: 10px;">LINES</td>                            
                        </tr>
                    </thead>
                    <tbody id="lineTableBody">                
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-1"></div>
        <div class="col-12 col-lg-4 px-3">
            <div class="table-responsive">
                <table class="table table-borderless" id="evenMachineTable">
                    <!-- Machine Even Values Append here -->
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-4 px-3">
            <div class="table-responsive">
                <table class="table table-borderless" id="oddMachineTable">
                     <!-- Machine odd Values Append here -->



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
<div class="container-fluid">
    <div class="row py-2 mt-5" >
        <div class="col-12 col-lg-9 col-md-8 d-flex align-items-center" >
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

        // Inserting data for Lines
        $('#addLine').on('click', function(e){
            event.preventDefault();
            var plantId = plantSelect.val();
            var lineName = $('#lineName').val();

            if(machineAccess == 1){
                if (plantId !== '') {
                    $.ajax({
                        type: 'POST',
                        url: 'insertData.php',
                        data: {
                            plantId: plantId,
                            lineName: lineName,
                            work : 4
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response == 1) {
                                swal("Good job!", "Inserted Successfully!", "success");
                                fetchLinesUpdateUi(plantId);
                                $("#addLineForm")[0].reset();
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
            }else {
                swal("ERROR!", "YOU DONT HAVE ACCESS", "error");
            }
            
        });

        // fetching function when chnaging the plant 
        $('#plantSelect').on('change', function () {
            var plantId = plantSelect.val();
            var dynamicHeader = $('#dynamicHeader');
            dynamicHeader.empty();
            var evenTable = $('#evenMachineTable');
            var oddTable = $('#oddMachineTable');
            evenTable.empty();
            oddTable.empty();
            fetchLinesUpdateUi(plantId);            
        });

        // fetch ajax function
        function fetchLinesUpdateUi(plantId){
            $.ajax({
                type: 'POST',
                url: 'fetchData.php',
                data: { plantId: plantId, work: 4 },
                dataType: 'json',
                success: function (data) {
                    // console.log(data);
                    var footerLinesContainer = $('#footerLines');
                    footerLinesContainer.empty();

                    var tableBody = $('#lineTableBody');
                    tableBody.empty();

                    $.each(data, function (index, line) {
                        // Create footer lines
                        var lineItem = $('<div class="d-flex align-items-center rounded-3 me-2 px-3 py-2 footerDiv clickable"></div>');
                        var lineIcon = $('<iconify-icon icon="cil:object-ungroup" class="me-1 footerIcon" width="15"></iconify-icon>');
                        var lineLink = $('<a class="text-decoration-none me-1 line-link footeranchor clickable" href="#" role="button" style="font-size: 12px;"></a>')
                            .text(line.line_name)
                            .attr('data-lineid', line.line_id);

                        lineItem.append(lineIcon, lineLink);
                        footerLinesContainer.append(lineItem);

                        lineItem.attr('data-lineid', line.line_id);
                        lineIcon.attr('data-lineid', line.line_id);

                        var row = $('<tr class="clickable"></tr>');
                        var cell = $('<td class="clickable"></td>').text(line.line_name).attr('data-lineid', line.line_id);

                        row.append(cell);
                        tableBody.append(row);
                    });
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        }




        $(document).on('click', '.clickable', function () {
            var lineId = $(this).data('lineid');
            var plantId = $('#plantSelect').val(); 

            if (lineId !== undefined) {                
                $('.clickable.clicked').removeClass('clicked');
                $('.footerDiv.clicked').removeClass('clicked');
                $('.footeranchor.clicked').removeClass('clicked');
                $('.footerIcon.clicked').removeClass('clicked');
                $('tbody tr td.clicked').removeClass('clicked');

                $(this).addClass('clicked');
                $('.footerDiv[data-lineid="' + lineId + '"]').addClass('clicked');
                $('.footeranchor[data-lineid="' + lineId + '"]').addClass('clicked');
                $('.footerIcon[data-lineid="' + lineId + '"]').addClass('clicked');
                $('tbody tr td[data-lineid="' + lineId + '"]').addClass('clicked');

                var dynamicHeader = $('#dynamicHeader');
                dynamicHeader.empty();

                var div = $('<div class="d-flex align-items-center rounded-3 me-5 px-1 py-2 ms-auto machineCss"></div>');
                var icon = $('<iconify-icon icon="ic:baseline-add" class="pe-1" width="19"></iconify-icon>');
                var link = $('<a class="text-decoration-none me-1 edit-machine" href="#" style="color: white; font-size: 14px;" role="button" data-bs-toggle="modal" data-bs-target="#addMachinesModal"></a>')
                .attr('data-plantid', plantId)
                .attr('data-lineid', lineId)
                .text('MACHINE');

                div.append(icon, link);
                dynamicHeader.append(div);
            }

            fetchMachineData(lineId,plantId);
        });



        function fetchMachineData(lineId,plantId){
            $.ajax({
                type:'POST',
                url: 'fetchData.php',
                data: { plantId: plantId, lineId : lineId, work: 5 },
                dataType: 'json',
                success: function (data) {
                    var evenTable = $('#evenMachineTable');
                    var oddTable = $('#oddMachineTable');
                    evenTable.empty();
                    oddTable.empty();

                    // Create thead elements for evenTable and oddTable
                    var evenThead = $('<thead><tr><td style="border-top-left-radius: 10px; border-top-right-radius: 10px;">MACHINE NUMBER</td></tr></thead>');
                    var oddThead = $('<thead><tr><td style="border-top-left-radius: 10px; border-top-right-radius: 10px;">MACHINE NUMBER</td></tr></thead>');

                    // Create tbody elements for evenTable and oddTable
                    var evenTbody = $('<tbody></tbody>');
                    var oddTbody = $('<tbody></tbody>');

                    // Append thead to tables
                    evenTable.append(evenThead);
                    oddTable.append(oddThead);

                    // Append tbody to tables
                    evenTable.append(evenTbody);
                    oddTable.append(oddTbody);

                    $.each(data, function(index, machine) {

                        var machineNumber = machine.machine_number;
                        var machineId = machine.machine_id;
                        var lineId = machine.line_id;
                        var plantId = machine.plant_id;

                        var row = $('<tr style="background-color: #F5F5F5;color: #050505; font-size:12px;"></tr>');
                        var cell = $('<td class="p-1 px-2"><span class="float-start">' + machineNumber + '</span>' +
                            '<div class="float-end pe-2">' +
                            '<a href="#" class="pe-1 text-decoration-none delete-machine" role="button" data-bs-toggle="modal" data-bs-target="#deleteMachineModal" data-machineid="' + machineId + '" data-lineid="' + lineId + '" " data-plantid="' + plantId + '">' +
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

        $(document).on('click', '.edit-machine', function (e) {            
                var plantId = $(this).data('plantid');
                var lineId = $(this).data('lineid');
                console.log(plantId);
                console.log(lineId);
                
                if (plantId && lineId) {
                    //$('#addMachinesModal').modal('show');
                    $('#machinePlantIdAdd').val(plantId);
                    $('#machineLineIdAdd').val(lineId);
                } else {
                    $('#addMachinesModal').modal('hide');
                    swal("Error!", "Please Select Machine and Line!", "info");
                }
            });


        function updateSelectAll() {
            var allChecked = $('.checkbox-group:checked').length === $('.checkbox-group').length;
            $('#selectAll').prop('checked', allChecked);
        }

        $('#selectAll').change(function () {
            var selectAllChecked = $(this).prop('checked');
            $('.checkbox-group').prop('checked', selectAllChecked);
            updateSelectAll();
        });

        // Event handler for individual checkboxes
        $('.checkbox-group').change(function () {
            updateSelectAll();
            var checkedCount = $('.checkbox-group:checked').length;
            console.log('Number of checked checkboxes: ' + checkedCount);
        });

        $(document).on('click', '#addingMultipleMachine', function (e) {
            var plantId = $('#machinePlantIdAdd').val();
            var lineId = $('#machineLineIdAdd').val();
            
            var selectAllChecked = $('#selectAll').prop('checked');

            var checkedCount = selectAllChecked ? 12 : $('.checkbox-group:checked').length;

            if(machineAccess == 1){
                $.ajax({
                    type: 'POST',
                    url: 'insertData.php',
                    data: {
                        plantId : plantId,
                        lineId: lineId,
                        checkedCount :checkedCount,
                        work : 6
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response == 1) {
                            swal("Good job!", "Inserted Successfully!", "success");
                            fetchMachineData(lineId,plantId);
                            $("#addingMultipleMachineForm")[0].reset();
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
            var plantId = $('#machineDeletePlantId').val();
            var lineId = $('#machineDeleteLineId').val();
            var machineId = $('#machineIdDelete').val();

            if(machineAccess == 1){
                $.ajax({
                    type: 'POST',
                    url: 'deletePlant.php', 
                    data: { machineId: machineId, work:4 },
                    dataType: 'json',
                    success: function (response) {
                        if (response==1) {
                            fetchMachineData(lineId,plantId);
                            swal("Good job!", "User Deleted Successfully!", "success");                        
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
    });

</script>
</body>
</html>