<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student form</title>
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
<style>
    body{
        max-width: 100vw;
         max-height: 100vh;
         display:flex;
         justify-content: center;
         align-items: center;
    }
              form{
                  height: auto;
                   width: 45%;
              }
</style>
</head>
<body class="d-flex align-items-center justify-items-center">
    
<?php
                                  include 'conn.php';
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                        //    $designation = $_POST['designation'];
                                           $fileToUpload = $_POST['fileToUpload'];
                                           $name = $_POST['name'];
                                           $mothersname = $_POST['mothersname'];
                                           $fathersname = $_POST['fathersname'];
                                           $branch = $_POST['branch'];
                                           $course = $_POST['course'];
                                           $rollno  = $_POST['rollno'];
                                           $studentid = $_POST['userid'];
                                           $address = $_POST['address'];
                                           $contactno = $_POST['contactno'];
                                           $email = $_POST['email'];
                                           $password = $_POST['password'];
                                      
                                           if($_POST['submit']){
                                               header("Location:studentDetail.php");
                                           }
                                           ?>
                                           <?php
                                             
                                      // binding
                                      $stmt = $conn->PREPARE("INSERT INTO student_details(fileToUpload, name,  mothersname ,fathersname, branch , course , rollno ,userid , address, contactno, email , password) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
                                      $stmt->bind_param("bsssssssssss",$fileToUpload, $name,  $mothersname ,$fathersname, $branch , $course , $rollno ,$userid ,$address, $contactno, $email , $password);
                                       
                                      $stmt->execute();
                                      $stmt->close();
                                      $conn->close();
                                      }
                                  ?>
                                  <form method="post" action="" class="d-flex flex-column py-2">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                    <h5 >Add New Member</h5>
                                                     <a href="studentDetail.php" class="btn btn-outline-dark">X</a>
                                                    </div>

                                                              <input type="file" name="fileToUpload" placeholder="Enter your post"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="name" placeholder="Enter user name" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="mothersname" placeholder="Enter user mother's name" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="fathersname" placeholder="Enter user father's name"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="course" placeholder="Enter user course"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="branch" placeholder="Enter user branch"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="rollno" placeholder="Enter user Roll No"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="userid" placeholder="Enter userid" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="address" placeholder="Enter user address" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="contactno" placeholder="Enter user contect Number" class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="text" name="email" placeholder="Enter your Email"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="password" name="password" placeholder="Enter password"  class="bg-dark text-white py-2 px-1 my-1 border-0" required>
                                                              <input type="submit" class="btn btn-success" name="submit" id="submit">
                                   </form>

    
</body>
</html>