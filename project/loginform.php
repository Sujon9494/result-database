<?php
    session_start();
    if(isset($_POST['s'])){
        $u = $_POST['user'];
        $p = $_POST['pass'];
        if($u == "ADMIN" && $p === "12345"){
            $_SESSION['login']=1;
            header("location: dashboard.php");
        }
    }
?>





<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
    <body>
         <form class="box" action="input.php">
            <h2>Login</h2>
                <input type="text" name="name" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name="login" value="Login">
            <a href="#">Create an account</a>
        </form>
    </body>
</html>