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


body{
    font-family: Gilroy;
    padding-top:80px;
    margin:0;
    height:100%;
    color:white;
   text-align: center;
   background-image:url('../../../Assets/Images&Logos/Pattern-Seerene-data-analytics-management-ldark.png');
    background-repeat:no-repeat;
    background-size: cover;
    background-attachment: fixed;
}



    </style>
<?php

if (isset($_POST['submit'])){
$con = mysqli_connect('localhost', 'root','','microclubsite');
if ($con->connect_error) {
        echo "Error connecting to";
     }
    
// get the post records

$mat=$_POST['matricule'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$année_etude = $_POST['niveau'];
$specialité = $_POST['spécialité'];
$motif = $_POST['motif'];
$facultée = $_POST['facultée'];







    // database insert SQL code

    $sql4 ="INSERT into demandes  VALUES ('$mat','$nom','$prenom','$mail','$number','$année_etude','$specialité','$motif','$facultée','none')";
    $result = $con->query($sql4);

if($result)
{
	echo "<p style='  font-size:35px; font-weight:bold'>Demande enregistrée avec succés</p> ";

}

else{echo "<p style='  font-size:35px; font-weight:bold'>Erreur d'enregistrement de la demande</p> ";}
}

mysqli_close($con);
?>
</body>
</html>

