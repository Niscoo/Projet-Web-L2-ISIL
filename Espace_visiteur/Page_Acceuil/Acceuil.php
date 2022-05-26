<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Acceuil.css">
    <title>Acceuil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="navbar.js"></script>
     
 
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

   <div id="nous">
       <div id="imgdiv"><img src="../../Assets/Images&Logos/vector.png" alt=""></div>
      
       <div id="textdiv">
            
            <h2>NOUS EN QUELQUES MOTS</h2>
            <p>Créé en 1985 à l’USTHB, Micro Club est le premier club scientifique
            universitaire en Algérie. À but non lucratif, il œuvre à la vulgarisa
            tion et l’initiation à l’informatique, notamment par l’organisation
            de formations ciblées et d’évènements.</p>
            <br>
            <br>
            <button><a href="../Page_PresentationClub/Page_Présentation_du_club.php">En savoir plus</a></button>

       </div>
           
   </div>
   <script type="text/javascript">
        let div = document.getElementById('nous');
        
        window.addEventListener("scroll", (event) =>
        {
            let scroll = 1 - this.scrollY / 500;
            div.style.opacity = scroll;
        })

        
        
    </script>  

  
      <section class="cont">
      <h2 style="text-align:center">PHOTOS</h2>
      <hr style="width:20%;text-align:center;">
      <div id="container">
        
            <div class="image" >
                <img src="../../Assets/PhotosClub/P1050190.JPG" alt="">     
                <div>
                    <p>L'une des formations <br> designe au niveau du <br> local du club. </p>                    
                </div>
            </div>
            
            <div class="image" >
                <img src="../../Assets/PhotosClub/IMG_5493.jpg" alt="">
                <div>
                    <p>un peu de concentration <br> et de serieux     </p>
                </div>
            </div>
        
            <div class="image" >
                <img src="../../Assets/PhotosClub/COM .JPG" alt="">
                <div>
                    <p>la bavette et le gel sont <br> toujours presents durant <br> la periode de la covid</p>
                </div>
            </div>
            
            <div class="image" >
                <img src="../../Assets/PhotosClub/IMG_1076.jpg" alt="">
                <div>
                    <p>seance de securité <br>internet a la salle des <br> conférences du <br>departement <br> informatique</p>
                </div>
            </div>
        
      </div>
   
      </div>
      <h2 style="text-align:center">MEMBRES DU MOIS</h2>
      <hr style="width:20%;text-align:center;">
      <div id="membres_du_mois">
        
        <div class="box">            
           <div class="membre">
               <img src="../../Assets/Images&Logos/jeune1.jpg" alt="">
           </div>
           <div class="content"  >
               <h2>Mohamed Ben ali</h2> <span>Creative disigner</span>
           </div>
        </div>
        
        <div class="box">
           <div class="membre">
               <img src="../../Assets/Images&Logos/man2 (2).jpg"alt="">
           </div>
           <div class="content" >
               <h2>Faycal Hamadech</h2> <span>Creative disigner</span>
           </div>
        </div>
        
        
        <div class="box">
           <div class="membre">
               <img src="../../Assets/Images&Logos/jeune2.jpg" alt="">
           </div>
           <div class="content" >
               <h2>Karim Kacem</h2> <span>Creative disigner</span>
           </div>
        </div>
           
         
        </div>
    
    </div>
     
      <h2 style="text-align:center">EVENEMENTS</h2>
      <hr style="width:20%;text-align:center;">
      <div class="Econtainer">
          <?php
         
           $conn = mysqli_connect("localhost", "root", "", "microclubsite");
             // Check connection
              if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
              }
             $sql = "SELECT titre, description FROM evenements";
              $result = $conn->query($sql);
              if ($result->num_rows > 0)
  
  
                  {
                  $i=0; 
                      while($row = $result->fetch_assoc() and $i<4)
                  {
  
                          ?>
                   <div class="event">

                    <h2><?php echo utf8_encode($row["titre"] )  ?></h2>
                  <div><p><?php echo  utf8_encode($row["description"])   ?></p></div>  </div>
                  

                  <?php
                      $i++;
                     }
   
                   }

                else {
                 echo " no data found";
                        }
  
                     ?>

      </div>
    
         </section>

   
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