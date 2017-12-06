<?php
    session_start();
    include "db.php";
    $userN = $_POST["username"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM users WHERE `userName`= '$userN'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if($row["userName"] == $userN && $row["password"] == $pass) 
            {
                echo "You are currect loged in " . $row["userName"];
                $_SESSION["id"] = $row["id"];
                header( "Location: index.php" );
                $_SESSION["trylogin"] = 0;
            } else {
                echo "It's not the correct password or username";
                header( "Location: loginpage.php" );
                $_SESSION["trylogin"] = 1;
            }
            //echo "id: " . $row["id"]. " - Name: " . $row["userName"]. " " . $row["password"]. "<br>";
        }
    } else {
        echo "It's not the correct password or username";
    }
    
    mysqli_close($conn);

    
?>