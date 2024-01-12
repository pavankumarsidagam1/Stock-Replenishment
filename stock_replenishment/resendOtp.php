<?php
    require_once('config.php');
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

        $response = 0;
        $email = $_SESSION['resend_email'];

        $otp = mt_rand(100000, 999999);

        $updateQuery = mysqli_query($conn, "UPDATE users SET otp = '$otp' WHERE email = '$email'");

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                     
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'pavan1738111176@gmail.com';                   
            $mail->Password   = 'knzyikzoeztavtby';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
            $mail->Port       = 587;                                    


            $mail->setFrom('pavan1738111176@gmail.com', 'Stock');
            $mail->addAddress($email,'');     
                
            $mail->addReplyTo('pavan1738111176@gmail.com', 'Stock');
        

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Your OTP';
            $mail->Body    = 'Your OTP for verification is: ' . $otp;
            $mail->AltBody = 'Your OTP for verification is: ' . $otp;

            $mail->send();

            $response = 1;
            
        } catch (Exception $e) {
            $response = 0;
        }

echo json_encode($response);
?>