<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gestion_adhesion.css">
    
</script>
   
</head>
<body>


    <p>GESTION DES DEMANDES</p>

    <table   class="container">
        <tr class="thead"><th>nom</th><th>prenom</th><th>specialité</th><th>facultée</th><th>motif</th><th>traitement</th><th></th></tr>
    <?php
         
         $conn = mysqli_connect("localhost", "root", "", "microclubsite");
           // Check connection
            if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
            }
           $sql = "SELECT * FROM demandes where status_demande='none' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){

            
                
                
                    while($row = $result->fetch_assoc() ){
                         
                         

                        ?>
           <tr> 
               <td> <?= $row['nom'] ?></td><td><?= $row['prenom'] ?></td>
               <td><?= $row['specialite'] ?></td><td><?= $row['facultee'] ?></td>
               <td><?= $row['motif'] ?></td>
               
               <form action="" method="POST">
                   
               <input type="hidden" name='matri' readonly value="<?php echo $row['matricule'] ?>">
               <input type="hidden" name='maill' readonly value="<?php echo $row['mail'] ?>">
                  <td><input type="submit" id="accepter" name="accepter" value="accepter"></td> 
                  <td><input type="submit" id="refuser" name="decliner" value="decliner"></td> 
               </form>
               
                    </tr>
              <?php
                      
                     }
   
                   }

            
  
                     ?>

                        

    </div>

    <?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['accepter'])){

    $matiD=$_POST['matri'];
           
    $conn= mysqli_connect("localhost", "root", "", "microclubsite");
    // Check connection
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     }
    $sql = "update demandes set status_demande='accepte' where matricule='$matiD' ";
     $result = $conn->query($sql);
     
    
mysqli_close($conn);
//Include required PHPMailer files
$email=$_POST['maill'];
	
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "microclub0@gmail.com";
//Set gmail password
	$mail->Password = "Microclub123.";
//Email subject
	$mail->Subject = "Information sur votre demande d'adhesion";
//Set sender email
	$mail->setFrom('microclub0@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	
//Email body
	$mail->Body = "<h1>Acceptation</h1></br><p>Felicitation vous avez été accepté !</p>";
//Add recipient
	$mail->addAddress($email);
//Finally send email
	 $mail->send();
//Closing smtp connection
	$mail->smtpClose();
   
}

else if(isset($_POST['decliner'])){
    $matiD=$_POST['matri'];
    $conn= mysqli_connect("localhost", "root", "", "microclubsite");
    // Check connection
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     }
    $sql1 = "update demandes set status_demande='refusee' where matricule='$matiD' ";
     $result = $conn->query($sql1);
     
mysqli_close($conn);
     
    
}



?>




  
</body>
</html>