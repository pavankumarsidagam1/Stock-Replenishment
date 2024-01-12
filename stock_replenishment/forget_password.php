<?php
require_once('config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Forget Password</title>
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
            color: #707070; /* Placeholder text color */
            border-radius: 30px; /* Border-radius for rounded corners */
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
                <div class="text">
                    <h3 style="color: #243A85CC;">FORGET PASSWORD</h3>                    
                </div>
                <p class="mb-4" style="color: #707070;">Enter your Email address!</p>
                <form method="POST" id="forgetPasswordForm">
                    <div class="input-group mb-4">
                        <div class="inner-addon left-addon">
                            <iconify-icon icon="material-symbols:mail-outline" class="bx p-3"></iconify-icon>
                          <input type="mail" class="form-control pe-5 me-5 py-3" placeholder="Enter Mail" name="mail" id="mail" />
                        </div>
                    </div>
                    <div class="input-group mb-2">
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-lg-4 mb-md-3 mb-sm-2">
                    </div>

                    <div class="d-flex justify-content-center align-items-center" style="width: 100%;">
                        <input class="btn px-5 mt-5 py-3" style="text-size-adjust: 100px;" type="submit" name="send" value="SEND"/>
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
        $('#forgetPasswordForm').submit(function(e){
            e.preventDefault();
            var email = $('#mail').val();

            $.ajax({
                type: 'POST',
                url: 'sendOtp.php', 
                data: {mail: email},
                success: function(response){
                    console.log(response);
                    if(response == 1){                        
                        window.location.href = 'verify_email.php';
                        $("#forgetPasswordForm")[0].reset();
                    }                    
                },
                error: function(xhr, status, error){
                    
                }
            });
        });
    });
</script>
</body>
</html>