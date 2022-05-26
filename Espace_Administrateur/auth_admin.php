<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="auth_admin.css">
</head>
<body>

    <form action="" method='post'>
    <p>S'authentifier</p>
   <input type="text" required name="username" placeholder="Username">
   <input type="password" required name="password" placeholder="Password">
   <input type="submit" name="submit" >

    </form>

    <?php
    if(isset($_POST['submit'])){


        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username=='admin' and $password=='admin123.'){

            header("Location: gestion_adhesion.php", true, 301);
            exit();
        }

    else{
        echo '<script>alert("Identifiants incorrects !")</script>';
    }
    }
    
    ?>
</body>
</html>