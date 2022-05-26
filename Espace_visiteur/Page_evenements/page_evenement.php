<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./page_evenement.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Page_Acceuil/navbar.js"></script>
    <title>Document</title>
</head>
<body>

<?php require '../scrollToTop.php' ?> 


<nav class="navbefore">
        <div id="club-name">
        <div><a href="../Page_Acceuil/Acceuil.php"><img src="../../Assets/Images&Logos/logo_mc.svg" alt=""></a></div>
            <div id="h22"><a href="../Page_Acceuil/Acceuil.php" style="color:white; text-decoration:none;"><h2>MICRO CLUB</h2></a></div>
            
        
     </div>
        
       <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
         <img id="hamb" src="../../Assets/Images&Logos/icons8-menu-96.svg" alt="null">
       </label>
     
        <ul id="ulist">
             <li><a href="../Page_Acceuil/Acceuil.php">Acceuil</a></li>
             <li><a href="../Page_PresentationClub/Page_Présentation_du_club.php">Presentation Club</a></li>
             <li><a href="../Page_evenements/page_evenement.php">Evenements</a></li>
             <li><a href="../Page_Contact/phpmailer/Contact.html">Contact</a></li>
             <li><a href="../page_adhesion/phpmailer/adhesion.php">Adherer</a></li>
        </ul>
    </nav>

    <section id="sect">
        <div id="imgdiv"><img src="../../Assets/Images&Logos/20944068.png" alt=""></div>
        <div id="desc"><h1>NOS EVENEMENTS</h1><p>Micro Club a pour coutume d’organiser,
            chaque année, une série d’événements
            exclusifs qui ont su gagner une grande
            popularité estudiantine et médiatique.
            Nous citerons notamment :</p>
           
        </div>
        
    </section>
    <script type="text/javascript">
        let div = document.getElementById('sect');
        
        window.addEventListener("scroll", (event) =>
        {
            let scroll = 1 - this.scrollY / 500;
            div.style.opacity = scroll;
        })

        
        
    </script>  


    <div id="container">
     <h1 id="titreevent">Evenements</h1>
     <hr style="width:35%;text-align:center;">
    <?php
         mb_internal_encoding('UTF-8');
         $conn = mysqli_connect("localhost", "root", "", "microclubsite");
           // Check connection
            if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
            }
           
           $sql = "SELECT titre, date, type, description,images  FROM evenements order by date";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0)


                {
              
                    while($row = $result->fetch_assoc())
                {

                        ?>
        <div id="eventCard">
           <div id="ecriture">
               <div id="infos"><h1 id="titre"><?php echo $row["titre"]   ?></h1> <h2 id="type"><?php echo utf8_encode( $row["type"]);   ?></h2></div>
               <div><h2 id="date"><?php echo $row["date"]   ?></h2></div>
               <div id="descriptor"><h3> <?php echo utf8_encode($row["description"]);   ?> </h3></div>
           </div>
           <div class = "vertical"></div>
            <div id="illustration">
              <?php echo $row["images"] ?>
            </div>
            </div>
            <?php
                    
                     }
   
                   }

                else {
                 echo " no data found";
                        }
  
                     ?> 
    </div>
    
</div>
<footer>
 <div class="leftside">
 <img id="taille" src="../../Assets/Images&Logos/logo_mc" alt=""> 
<div ><h2 id="h23" >MICRO CLUB</h2></div>
 
</div> 
<p>© Micro Club - coded with sweat and blood.</p>
<p><iframe width="200px" height="50px" id="gmap_canvas" src="https://maps.google.com/maps?q=usthb%20facult%C3%A9%20informatique&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></p>
</footer>

</body>
</html>