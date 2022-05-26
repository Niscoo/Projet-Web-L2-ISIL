

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style> 
@font-face {
    font-family: Gilroy;
    src: url("../../../Assets/Fonts/Gilroy-Light.otf") format("opentype");
    
}
@font-face {
    font-family: GilroyBold;
    src: url("../../../Assets/Fonts/Gilroy-ExtraBold.otf") format("opentype");
   
}

body { 
    
font-family: Gilroy !important;
 color: rgb(255, 255, 255) ;
 text-align: center;
 margin:0;
 font-family: Gilroy;
 background-image:url('../../../Assets/Images&Logos/Pattern-Seerene-data-analytics-management-ldark.png');
 background-repeat:no-repeat;
 background-size: cover;
 background-attachment: fixed;
 background-size:cover;
 background-repeat:no-repeat;
 background-attachment: fixed;
}
 </style>
<?php
    require 'includes/Exception.php';
    require 'includes/SMTP.php';
    require 'includes/PHPMailer.php';
    //Define name spaces
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
   
    if(isset($_POST['submit'])){
    //Include required PHPMailer files
    $email=$_POST['email'];  
    $msg=$_POST['Message']; 
    //Create instance of PHPMailer
        $mail = new PHPMailer();
    //Set mailer to use smtp
        $mail->isSMTP();
    //Define smtp host
        $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
        $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
     
     
    //Set gmail username
        $mail->Username = "microclub0@gmail.com";
    //Set gmail password
        $mail->Password = "Microclub123.";

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
    //Email subject
        $mail->Subject = $email;
    //Set sender email
        $mail->setFrom($email);
        $mail->AddReplyTo($email);
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
      
    //Email body
        $mail->Body = $msg;
    //Add recipient
        $mail->addAddress('microclub0@gmail.com');
    //Finally send email
        if ( $mail->send() ) {
            echo  "<p style='font-size:35px; font-weight:bold'>Email envoyé</p> ";
            
        }else{
            echo "<p style='font-size:35px;font-weight:bold'>Erreur d'envoyé</p> ";
        }
    //Closing smtp connection
        $mail->smtpClose();
       
    }
    ?>
</body>
</html>








    
    
    
  