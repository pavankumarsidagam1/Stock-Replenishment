<?php
    require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Login In</title>
</head>
<style>
     html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    .main{
        background-color: #243A85CC;
    }
    h1,h6{
        color: white;
    }

    .input-group .bx {
        color: #243A85CC;
    }

    .inner-addon {
        position: relative;
    }

  
    .inner-addon .bx {
        position: absolute;
        padding: 10px;
        font-size: 24px;
        pointer-events: none;
    }
    .left-addon .bx  { left:  0px;}

    .form-control {
        padding-left: 50px;
        background-color: #F0F3F4;
        color: #707070; 
        border-radius: 30px; 
    }
    .btn{
        width: 100%;
        border-radius: 30px;
        background-color: #243A85CC;
        color: white;
    }
</style>
<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-7 col-md-12 main d-flex align-items-center justify-content-lg-start justify-content-center py-5">
               <div class="ps-lg-5">
                    <div class="logo">
                        <img src="./images/Group 2312.png" alt="Logo">
                    </div>
                    <div class="heading">
                        <h1>STOCK REPLENSHMENT</h1>
                        <h6>Never run out of stock - Replenish with ease!</h6>                
                    </div> 
               </div>               
            </div>
            <div class="col-lg-5 col-md-12 d-flex flex-column align-items-center justify-content-center">
                <div class="logo my-4">
                    <img src="./images/roop-polymer-logo.png" alt="">
                </div>
                <div class="text mb-5">
                    <h3 style="color: #243A85CC;">USER LOGIN</h3>
                </div>
                <form method="POST" id="loginForm">
                    <div class="input-group mb-4">
                        <div class="inner-addon left-addon">
                            <iconify-icon icon="bx:user" class="bx p-3"></iconify-icon>
                          <input type="text" class="form-control pe-5 me-5 py-3" placeholder="Enter Username" name="username" id="username"/>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="inner-addon left-addon">
                            <iconify-icon icon="mingcute:lock-line" class="bx p-3"></iconify-icon>
                          <input type="password" class="form-control pe-5 me-5 py-3" placeholder="Enter Password" name="password" id="password"/>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-lg-4 mb-md-3 mb-sm-2">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="rememberMe" style="border-radius: 30px;" checked />
                          <label class="form-check-label" style="color: #707070;" for="rememberMe">Remember</label>
                        </div>
                        <a href="forget_password.php" style="color: #707070; text-decoration: none;">Forgot password?</a>
                    </div>
                    <div class="ps-3 d-none inc" style="color: red;">
                        Please enter correct username and password!
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="width: 100%;">
                        <input class="btn px-5 mt-5 py-3" style="text-size-adjust: 100px;" type="submit" name="loginSubmit" value="LOGIN"/>
                    </div>                                           
                </form>
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
          $('#loginForm').submit(function (event) {
              
              var formData = new FormData($('#loginForm')[0]);
              formData.append('work', 0);


            $.ajax({
                url: 'checkDetails.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                      console.log(response);

                    if(response == 1){                       
                        window.location.href = 'mixing_areaTableview.php';                           
                    }else{
                        $('.inc').removeClass('d-none');
                    }
                    $("#loginForm")[0].reset();
                      
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
            event.preventDefault();                        
          });
        });
</script>

</body>
</html>