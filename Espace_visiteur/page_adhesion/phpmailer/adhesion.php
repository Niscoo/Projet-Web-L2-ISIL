<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adhesion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./navbar.js"></script>
</head>
<body>



<nav class="navbefore">
       <div id="club-name">
           <div><a href="../../Page_Acceuil/Acceuil.php"><img src="../../../Assets/Images&Logos/logo_mc.svg" alt=""></a></div>
           <div id="h22"><a href="../Page_Acceuil/Acceuil.php" style="color:white; text-decoration:none;"><h2>MICRO CLUB</h2></a></div>
           
       
    </div>
       
      <input type="checkbox" id="check">
       <label for="check" class="checkbtn">
        <img id="hamb" src="../../../Assets/Images&Logos/icons8-menu-96.svg" alt="null">
      </label>
    
       <ul id="ulist">
            <li><a href="../../Page_Acceuil/Acceuil.php">Acceuil</a></li>
            <li><a href="../../Page_PresentationClub/Page_Présentation_du_club.php">Presentation Club</a></li>
            <li><a href="../../Page_evenements/page_evenement.php">Evenements</a></li>
            <li><a href="../../Page_Contact/phpmailer/Contact.html">Contact</a></li>
            <li><a href="./adhesion.php">Adherer</a></li>
       </ul>
   </nav>
    <h1 style="margin-top:300px;">DEMANDE D'ADHESION</h1>
    <form action='connect.php' method="post">
       <div id="sidebar" ><img src="../../../Assets/Images&Logos/2752387.jpg" ></div>

       <div id="firstform">
      <input type="text" name="matricule" placeholder="matricule">
      <input type="text" name="nom" placeholder="nom">
      <input type="text" name="prenom" placeholder="prenom">
      <input type="mail" name="mail"placeholder="mail">
      
    
      <input type="number" name="number" placeholder="number">
      <input type="text" name="spécialité" placeholder="spécialité">
      </div>
      <div id="secondform">
      
      <textarea id="story" placeholder="motif" name="motif"
          rows="15" cols="42"></textarea>
        
     
      
        <select name="niveau" id="niveau">
          <option value="L1">L1</option>
          <option value="L2">L2</option>
          <option value="L3">L3</option>
          <option value="M1"> M1</option>
          <option value="M2">M2</option>
    
        </select>

   
    <select name="facultée" id="fac">
  <option value="Faculté des Mathématiques">Faculté des Mathématiques</option>
  <option value="faculté des Sciences Biologiques">faculté des Sciences Biologiques</option>
  <option value="Faculté de Génie Mécanique et Génie des Procédés">Faculté de Génie Mécanique et Génie des Procédés</option>
  <option value="Faculté des Sciences de la terre et de Géographie"> Faculté des Sciences de la terre et de Géographie</option>
  <option value="Faculté des Physique">Faculté des Physique</option>
  <option value="faculté de Chimie">faculté de Chimie</option>
  <option value="Faculté Informatique">Faculté Informatique</option>
  <option value="Faculté de génie électrique"> Faculté de génie électrique </option>
  <option value="Faculté de génie Civil"> Faculté de génie Civil </option>
</select>

    <input type="submit" name="submit">
    </div>


    </form>
    <div class="big_container">
    <h1 id="newh">Inscrits par année</h1>
    <div id="admision_année" >
    
    <?php
         
         $conn = mysqli_connect("localhost", "root", "", "microclubsite");
           // Check connection
            if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
            }
           $sql1 = "SELECT COUNT(matricule), annee_etude FROM demandes GROUP BY annee_etude";
            $result = $conn->query($sql1);
            if ($result->num_rows > 0){

            
                
                
                    while($row = $result->fetch_assoc() ){
                         
                         

                        ?>
      <div id="grid-item-year">
        <img src="../../../Assets/Images&Logos/graduation-hat.png" alt="">
      <p id="year"><?php echo $row['annee_etude']; ?></p>
      <p id="countyear"><?php echo $row['COUNT(matricule)']; ?></p>
    </div>

    <?php
    }
      } 
  ?>
    </div>

    <h1>Inscrits par facultée</h1>
    <div id="admision_facultée" >
      
    <?php
         
         $conn = mysqli_connect("localhost", "root", "", "microclubsite");
           // Check connection
            if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
            }
           $sql2 = "SELECT  COUNT(matricule), facultee from demandes GROUP BY facultee";
            $result = $conn->query($sql2);
            if ($result->num_rows > 0){

            
                
                
                    while($row = $result->fetch_assoc() ){
                         
                         

                        ?>
      <div id="grid-item" >
        <img src="../../../Assets/Images&Logos/school" alt="">
        <h2><?php echo $row['facultee']; ?></h2>
        <p id="countfac"><?php echo $row['COUNT(matricule)']; ?></p>
      </div>
      <?php
    }
      } 
  ?>
    </div>

    </div>

    <footer>
 <div class="leftside">
 <img id="taille" src="../../../Assets/Images&Logos/logo_mc" alt=""> 
<div ><h2 id="h23" >MICRO CLUB</h2></div>
 
</div> 
<p>© Micro Club - coded with sweat and blood.</p>
<p><iframe width="200px" height="50px" id="gmap_canvas" src="https://maps.google.com/maps?q=usthb%20facult%C3%A9%20informatique&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></p>
</footer>
</body>
</html>