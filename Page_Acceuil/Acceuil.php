<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Acceuil.css">
    <title>Acceuil</title>
</head>
<body>
   <nav>
       <div id="club-name">
           <div><img src="../Assets/Images&Logos/logo_mc" alt=""></div>
           <div id="h22"><h2>MICRO CLUB</h2></div>
           
    </div>
       <ul>
           <li><a href="">Acceuil</a></li>
           <li><a href="">Presentation Club</a></li>
           <li><a href="">Evenements</a></li>
           <li><a href="">Contact</a></li>
       </ul>
   </nav>

   <div id="nous">
       <div id="imgdiv"><img src="../Assets/Images&Logos/vector.png" alt=""></div>
       <div id="textdiv">
        <h2>NOUS EN QUELQUES MOTS</h2>

        <p>Créé en 1985 à l’USTHB, Micro Club est le premier club scientifique
         universitaire en Algérie. À but non lucratif, il œuvre à la vulgarisa
         tion et l’initiation à l’informatique, notamment par l’organisation
         de formations ciblées et d’évènements.</p>
       </div>
       
        
   </div>

  
      <section class="cont">
      <h2 style="text-align:center">PHOTOS</h2>
      <hr style="width:20%;text-align:center;">
      <div id="container">
        <div class="image" ><img src="../Assets/PhotosClub/P1050190.JPG" alt="">
     <p>Title</p>
      </div>
     <div class="image" ><img src="../Assets/PhotosClub/IMG_5493.jpg" alt="">
     <p>Title</p>
      </div>
     <div class="image" ><img src="../Assets/PhotosClub/COM .JPG" alt="">
     <p>Title</p>
     </div>
     <div class="image" ><img src="../Assets/PhotosClub/IMG_1076.jpg" alt="">
     <p>Title</p>
       </div>
   
      </div>
     <h2 style="text-align:center">ARTICLES</h2>
     <hr style="width:20%;text-align:center;">
     <div id="container">
     
         <div class="art"><h2>Titre</h2>
         <div><p>lorem ipsum dolor sit lorem lorem ipsum dolor sit lorem lorem ipsum dolor sit lorem</p></div>
     </div>
     
        <div class="art"><h2>Titre</h2>
        <div><p>lorem ipsum dolor sit lorem lorem ipsum dolor sit lorem lorem ipsum dolor sit lorem</p></div>
      </div>
    
        <div class="art"><h2>Titre</h2>
        <div><p>lorem ipsum dolor sit lorem lorem ipsum dolor sit lorem lorem ipsum dolor sit lorem</p></div>
      </div>
    
        <div class="art"><h2>Titre</h2>
        <div><p>lorem ipsum dolor sit lorem lorem ipsum dolor sit lorem lorem ipsum dolor sit lorem</p></div>
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

                    <h2><?php echo $row["titre"]   ?></h2>
                  <div><p><?php echo $row["description"]   ?></p></div>  </div>
                  

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

   
<footer><p>© Micro Club - coded with sweat and blood.</p></footer>
</body>
</html>