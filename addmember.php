<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add member form</title>

        
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
<link rel="stylesheet" href="../Students-personal-dashboard/style.css">


</head>
<body style="height: 100vh; width:100vw;" class="d-flex justify-content-center align-items-center">
                                
           <div class="p-2" style="background-color: #a6a6a6 ; height : auto; width:35vw;">

                                  <?php
                                  include 'conn.php';
                                       if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                           $designation = $_POST['designation'];
                                           $username = $_POST['username'];
                                           $userid = $_POST['userid'];
                                           $email = $_POST['email'];
                                           $password = $_POST['password'];
                                           $mothername = $_POST['mothername'];
                                           $fathername = $_POST['fathername'];
                                           $branch = $_POST['branch'];
                                           $course = $_POST['course'];
                                           $DOB  = $_POST['DOB'];
                                
                                             
                                      // binding
                                      $stmt = $conn->PREPARE("INSERT INTO collegeadmindashboard(designation, username, userid,  email , password, mothername ,fathername , branch , course ,DOB) VALUES (?,?,?,?,?,?,?,?,?,?)");
                                      $stmt->bind_param("ssssssssss", $designation, $username ,$userid, $email , $password, $mothername ,$fathername , $branch , $course ,$DOB);
                                       
                                      $stmt->execute();
                                      $stmt->close();
                                      $conn->close();
                                      }
                                  ?>
                                  <form method="post" action="" class="d-flex flex-column">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class=" text-dark">Add New Member</h5>
                                                     <a href="./managementSystem.php" class="btn btn-outline-dark">X</a>
                                                    </div>

                                                              <input type="text" name="designation" placeholder="Enter your post"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="username" placeholder="Enter user name" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="userid" placeholder="Enter user id" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="email" placeholder="Enter email"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="password" placeholder="Enter user password"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="mothername" placeholder="Enter user mothername"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="fathername" placeholder="Enter user fathername"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="branch" placeholder="Enter user branch" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="course" placeholder="Enter user course" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="DOB" placeholder="Enter user DOB"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>

                                                     <input type="submit" class="btn btn-success" name="submit" id="submit">
                                   </form>
            </div>

</body>
</html>