<!DOCTYPE html>
<?php
if(isset($_POST['name'])&&isset($_POST['lastname'])&&isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])) {
    require 'authenticate.php';
    session_start();
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO userdata (name,lastname, username,password, email) VALUES ('$name','$lastname','$username','$password','$email')";
    mysqli_query($connection, $sql);
    echo "<script> location.href='index.php'; </script>";
}else{
    echo "<script> location.href='signUp.php'; </script>";
}

 ?>
<html>
<head>
<title></title>
</head>
<body>
<span><h1>Success</h1></span>
</body>
</html>
