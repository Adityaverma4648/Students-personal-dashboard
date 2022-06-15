<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Student Details</title>
        
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
<body>
    <section class="container-fluid bg-dark student-manage-cont" style="min-height: 100vh;">
              <div class="container py-2">
                  <div class="h4 text-white text-center bg-danger py-2">
                      Manage Students
                  </div>
                  <table class="table table-striped bg-light py-2">
                         <thead>
                             <tr>
                                 <th class="text-dark">Id</th>
                                 <th class="text-dark">Profile Image</th>
                                 <th class="text-dark">Student's Name</th>
                                 <th class="text-dark">Mother's Name</th>
                                 <th class="text-dark">Father's Name</th>
                                 <th class="text-dark">Course</th>
                                 <th class="text-dark">Branch</th>
                                 <th class="text-dark">Roll No</th>
                                 <th class="text-dark">Student Id</th>
                                 <th class="text-dark">Address</th>
                                 <th class="text-dark">Contact-No</th>
                                 <th class="text-dark">Email ID</th>
                                 <th class="text-dark">Buttons</th>
                             </tr>
                         </thead>
                         <tbody>
                         <tr>
                             <?php
                                include 'conn.php';
                                $q = "select * FROM student_details";
                                             $query = mysqli_query($conn , $q);                      
                                        while($res = mysqli_fetch_array($query)){
                                            ?>
                             ?>
                                 <td class="text-dark"><?php echo $res['id'];?></td>
                                 <td class="text-dark"><?php echo $res['fileToUpload'];?></td>
                                 <td class="text-dark"><?php echo $res['name'];?></td>
                                 <td class="text-dark"><?php echo $res['mothersname'];?></td>
                                 <td class="text-dark"><?php echo $res['fathersname'];?></td>
                                 <td class="text-dark"><?php echo $res['course'];?></td>
                                 <td class="text-dark"><?php echo $res['branch'];?></td>
                                 <td class="text-dark"><?php echo $res['rollno'];?></td>
                                 <td class="text-dark"><?php echo $res['studentid'];?></td>
                                 <td class="text-dark"><?php echo $res['address'];?></td>
                                 <td class="text-dark"><?php echo $res['contactno'];?></td>
                                 <td class="text-dark"><?php echo $res['email'];?></td>
                                 <!-- <td class="text-dark"><?php echo $res['password'];?></td> -->
                                 <td class="text-dark"> 
                                       <a href="delete.php?id = <?php echo $res['id'];?>" class="btn btn-danger ms-2 mb-2">
                                           Delete
                                       </a>
                                 </td>
                             </tr>
                             <?php
                                        }
                               ?>
                         </tbody> 
                   </table>
                   <a href="addStudent.php" class="btn btn-outline-warning ">Add students</a>
              </div>
    </section> 
</body>
</html>