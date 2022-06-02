<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page:College Name</title>

    <!-- Google fonts-------------------------------------------- -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap import-------------------------------------------- -->
        <!-- Latest compiled and minified CSS -->
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SCSS -------------------------------------------- -->
               <link rel="stylesheet" href="style.css">      
</head>
<body class="d-flex justify-content-center align-items-center body-login">
<?php
         include 'conn.php';
?>
    <section class="form-sec container">
               <h3 class="text-center text-muted">
                    Students Login Page</h3>
                    <?php
                         if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                       $userid = $_POST['userid'];
                                       $password = $_POST['password'];
                                       if($_POST['submit']){
                                          header('Location: dashboard.php');
                                       }
                          }
                    ?>

               <form action="" method="post">
                    
                    <input type="text" class="form-control" placeholder="User Id" name="userid" required>

                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                          <a href="#" class="btn text-muted " >Forgot password ?</a>
                    <input type="submit" class="submit btn btn-outline-dark " name="submit" value="login">
               </form>
               <h3 class="text-muted">
                   LOGO
               </h3>
               <span class="text-muted small text-center">
                ©2016 All Rights Reserved. Aditya Verma! This is a Student-personal-dashboard. Privacy and Terms
               </span>
    </section>

               

              
</body>
</html>