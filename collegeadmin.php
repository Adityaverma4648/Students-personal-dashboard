<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College-admin</title>

    
    
    <!-- Google fonts-------------------------------------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Bootstrap import-------------------------------------------- -->
<!-- Latest compiled and minified CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="style.css">

</head>
<body>
    
<body class="d-flex justify-content-center align-items-center body-login">
    <?php
         include 'conn.php';
    ?>
      <?php
                         if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                       $userid = $_POST['userid'];
                                       $password = $_POST['password'];
                                        
                                       $q = "select * FROM collegeadmindashboard where userid = $userid";
                                       $query = mysqli_query($conn , $q);   
                                       $present = mysqli_num_rows($result);
                                       if($present){
                                        ?>
                                            <script>alert('email not registered')</script>     
                                        <?php 
                                         header ('Location : collegeauthdashboard.php');
                                       }
                          }
                    ?>
    <section class="form-sec container" id="form-container">
               <h3 class="text-center text-muted">
                    Authority Login Page</h3>
                  

               <form action="" method="post">
                    <input type="text" class="form-control" placeholder="User Id" name="userid" required>

                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                          <a href="#" class="btn text-muted " >Forgot password ?</a>
                    <input type="submit" class="submit btn btn-outline-dark " name="submit" value="login" onclick="toggleDisplay()">


               </form>
               <h3 class="text-muted">
                   LOGO
               </h3>
               <span class="text-muted small text-center">
                ©2016 All Rights Reserved. Aditya Verma! This is a College-authroity-dashboard. Privacy and Terms
               </span>
   

                <!-- creating a new page where an admin can (manage | update | add) --  page access to authority members
                          and members info would be added in a database
                          login confirms that the user trying to login is a authorized person...    
                   --> 
    </section>
    <section id="College-authority-dashboard">

    </section>
    <script>
         
     //     var form_container = document.getElementById('form-container');
     //                                              var College_authority_dashboard = document.getElementById('College-authority-dashboard');
     //                                              College_authority_dashboard.style.display = "none";
          //     function toggleDisplay(){
          //                                              if(submit_flag == 1){
          //                                                       form_container.style.display = "none";
          //                                                       College_authority_dashboard.style.display = "block";
          //                                              }
          
          //                                         }
    </script>
</body>
</html>