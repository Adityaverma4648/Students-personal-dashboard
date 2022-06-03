<?php
    include "conn.php";


    $id = $_GET['id'];
    $del =  "DELETE FROM `collegeadmindashboard` WHERE id = $id";

    mysqli_query($conn,$del);
        
    header('Location : managementSystem.php');
?>
