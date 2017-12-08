<?php 
    include 'header.php';
    /*require('db.php');
    include 'db.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $response = array();
    $posts = array();
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $id=$row["id"];
            $usern=$row['userName']; 
            $passw=$row['password']; 
            
            $posts[] = array('id'=> $id, 'userName'=> $usern, 'password'=> $passw);
            echo "id: " . $row["id"]. " - Name: " . $row["userName"]. " " . $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $response['posts'] = $posts;
    
    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($response));
    fclose($fp);
    

    echo $_SESSION["id"];

    mysqli_close($conn);*/

?>
<div class="MainContainer">
    <div id="first">
        <h2>Login:</h2>
        <form action="login.php" method="POST">
            Username: 
            <br>
            <input type="text" name="username" required>
            <input type="password" name="password" required>
            <input type="submit" value="Login">
            <?php 
            if(isset($_SESSION["trylogin"])) 
            {
                echo "wrong login";
            }
            ?>
        </form>
    </div>
    <div id="third">
        <h2>Sign in:</h2>
        <form action="register.php" method="POST">
            Username: <input type="text" name="username" required> <br>
            Password: <input type="password" name="password" required> <br>
            Confirm Password: <input type="password" name="password2" required> <br>
            <input type="submit" value="Register">
        </form>
    </div>
</div>