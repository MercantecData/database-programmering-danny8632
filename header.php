<?php

session_start();

echo "<html> 
<head>
    <title>Gemme</title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/> 
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>
<header>
    <nav>
        <ul>
            <li><a href='index.php'>Home</a></li>
            <li><a href='about.html'>About</a></li>
            <li><a href='Projects.html'>Projects</a></li>";
            if(isset($_SESSION['id']) == true) {
                echo '<li style="float:right;"><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li style="float:right;"><a href="loginpage.php">Login/signup</a></li>';
            }
echo "
        </ul>
    </nav>
</header>";


?>