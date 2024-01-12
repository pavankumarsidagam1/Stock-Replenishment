<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <title>Mixing Area</title>
</head>
<style>
     html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }   
   .property{
        width: 169px;
        height: 143px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
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
        <div class="col-12 col-md-6 mx-auto mb-2 ps-0 ps-lg-5 ps-md-3">
            <div class="d-flex align-items-center justify-content-center justify-content-lg-start justify-content-md-start">
                <img src="./images/roop-polymer-logo.png" width="35" alt="logo">
                <h4 class="ps-2 pt-2 fw-bolder">PRODUCTION AREA</h4>
            </div>
        </div>
        <div class="col-12 col-md-2 mx-auto mb-2">
            <div class="d-flex align-items-center justify-content-center py-2 rounded-2" style="background-color: #F5F5F5;">
                <iconify-icon icon="bi:buildings" class="pe-1 ps-3" width="25"></iconify-icon>
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
        <div class="col-12 col-md-2 mx-auto mb-2">
           <div class="d-flex align-items-center justify-content-center py-2 rounded-2" style="background-color: #F5F5F5;">
                <iconify-icon icon="material-symbols-light:upload" class="pe-1" width="30"></iconify-icon>
                <a class="text-decoration-none me-1" style="color: black;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    PART ALLOCATION
                </a>
           </div>
        </div>
        <div class="col-12 col-md-2 mx-auto mb-2">
           <div class="d-flex align-items-center justify-content-center py-2 rounded-2" style="background-color: #243A85CC; color: white;">
                <iconify-icon icon="carbon:view-mode-2" class="me-1" width="25"></iconify-icon>
                <a class="text-decoration-none me-1" style="color: white;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                 GIRD VIEW
                </a>
                <ul class="dropdown-menu px-2" aria-labelledby="dropdownMenuLink">
                    <li class="my-2 mx-2" style="background-color: #F5F5F5;">
                    <a class="dropdown-item" href="mixing_areaTableview.php">Table View</a>
                    </li>
                    <li class="my-2 mx-2" style="background-color: #F5F5F5;">
                    <a class="dropdown-item" href="mixing_areaGridview.php">Gird View</a>
                    </li>
                </ul>
           </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="container changeHeight">
    <div class="row" id="girdViewItems">
        <!-- APPEND DYNAMICALLY -->
    </div>
</div>
<div class="container-fluid footer">
    <div class="row py-2" >
        <div class="col-12 col-lg-9 col-md-8 d-flex align-items-center">
            <img class="mx-2 mx-lg-5 mx-md-4" src="./images/footerLogo.png"  width="60px" alt="">
            <div class="d-flex align-items-center flex-column flex-md-row" id="footerLines">
                <!-- Dynamic Footer Lines -->
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

        $('#plantSelect').on('change', function () {
            var plantId = plantSelect.val();
            var gridViewItemsDiv = $('#girdViewItems');
            gridViewItemsDiv.empty();
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
                        var lineItem = $('<div class="rounded-3 d-flex align-items-center me-2 px-3 py-2 footerDiv clickable" style="background-color: #d5d5d5; color: black;"></div>');
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
        };

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
                    var gridViewItemsDiv = $('#girdViewItems');
                    gridViewItemsDiv.empty();
                    $.each(data, function (index, machine) {

                        var textColor = '';
                        if(machine.machine_status == 'EMPTY'){
                            textColor = 'white';
                        }else if(machine.machine_status == 'LOADED'){
                            textColor = 'black';
                        }else if(machine.machine_status == 'HOLD'){
                            textColor = 'black';
                        }
                        
                        var machineDiv = $('<div class="col-md-4 col-sm-6 col-lg-2 mx-auto my-3">' +
                            '<div class="property" style="background-color:' + machine.machine_hexnumber + ';">' +
                            '<span style="color:' + textColor + ';">' + machine.machine_number + '</span>' +
                            '</div>' +
                            '</div>');

                        gridViewItemsDiv.append(machineDiv);
                    });

                    
                },
                error: function (error) {
                }
            });
        }
    });
</script>
</body>
</html>