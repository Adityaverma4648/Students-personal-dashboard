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

    <section class="form-sec container">
               <h3 class="text-center text-muted">
                    Students Login Page</h3>
                    <?php
                    // Initialize the session
                            session_start();

                            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                                header("location: dashboard.php");
                                exit;
                            }

                            // conn / config
                            require_once "conn.php";

                    $userid_err = $password_err = $confirm_password_err = "";
                         if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                 // Check if username is empty
                                        if(empty(trim($_POST["userid"]))){
                                            $userid_err = "Please enter userid.";
                                        } else{
                                            $userid = trim($_POST["userid"]);
                                        }
    
                                        // Check if password is empty
                                        if(empty(trim($_POST["password"]))){
                                            $password_err = "Please enter your password.";
                                        } else{
                                            $password = trim($_POST["password"]);
                                        }

                            // $sql = "SELECT id, userid, password FROM student_details WHERE username = ?";        
                            
    // Validate credentials
             if(empty($userid_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, userid, password FROM student_details WHERE userid = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_userid);
            
            // Set parameters
            $param_userid = $userid;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $userid, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["userid"] = $userid;                            
                            
                            // Redirect user to welcome page
                                               header("location: dashboard.php");
                                           } else{
                            // Password is not valid, display a generic error message
                                               $login_err = "Invalid username or password.";
                                           }
                                       }
                                   } else{
                    // Username doesn't exist, display a generic error message
                                       $login_err = "Invalid username or password.";
                                   }
                                  } else{
                                      echo "Oops! Something went wrong. Please try again later.";
                                  }

                                  // Close statement
                                  $stmt->close();
                              }
                          }                   
    
                          // Close connection
                          $conn->close();
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