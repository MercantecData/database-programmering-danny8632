<?php 
    include "header.php";
    include "db.php";

    $ID = $_SESSION['id']; 

    $sql = "SELECT * FROM `users` WHERE `id` = '$ID'";
    $result=mysqli_query($conn,$sql);

    if($result) {
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        echo $row['userName'];
    } else {
        echo $mysqli_error;
    }

    

?>

<div class="MainContainer">





</div>