<?php
    include "header.php";
    include "db.php";
?>
    <body>
        
        <div class="MainContainer">
            <?php 
                if(isset($_SESSION['id'])) {
                    echo "<form action='createmsg.php' method='POST'>
                        <input type='text' name='msgtxt' required>
                        <input type='submit' value='Post'>
                    </form>";
                }


                $sql = "SELECT users.userName, msg.msg, msg.modified FROM msg INNER JOIN users ON users.id=msg.userID ORDER BY msg.ID DESC";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "Username: " . $row["userName"]. " - Message: " . $row["msg"]. " - ". $row["modified"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }


            ?>
            
        </div>
        
        <?php //echo $_SESSION["id"]; ?>

    </body>

</html>