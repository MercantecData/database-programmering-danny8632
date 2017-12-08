<?php 
    session_start();
    include 'db.php';
    $msg = $_POST['msgtxt'];


    $ID = $_SESSION['id']; 
    

    $sql = "SELECT * FROM `users` WHERE `id` = '$ID'";
    $result=mysqli_query($conn,$sql);
    
    if($result) {
        $sql = "INSERT INTO msg (userID, msg) VALUES ('$ID', '$msg')";

        if ($conn->query($sql) === TRUE) {
            echo "Post was successfully created";
            header( "Location: index.php" );
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo $mysqli_error;
    }

?>