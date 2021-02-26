<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpLogin</title>
    <!-- <link href="https://fonts.googleapis.com/..."> -->
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
    
    <!-- Navbar -->
    <nav>
        <div class="wrapper">
            <a href="index.php">IMAGE</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About Us</a></li>
                <li><a href="blog.php">Find Blogs</a></li>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profile Page</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                    } else {
                        echo "<li><a href='signup.php'>Sign Up</a></li>";
                        echo "<li><a href='login.php'>Log In</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

    <!-- Main Panel -->

    <div class="wrapper">