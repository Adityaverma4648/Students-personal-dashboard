<?php
    include "conn.php";


    $id = $_GET['id'];
    $del =  "DELETE FROM `student_details` WHERE id = $id";

    mysqli_query($conn,$del);
        
    header("Location:studentDetail.php");
?>
