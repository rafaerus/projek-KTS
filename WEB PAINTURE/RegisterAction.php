<?php
if(isset($_POST['Submit'])){
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $role= $_POST['level'];

    include_once("koneksi database.php");
    $result = mysqli_query($mysqli,
    "INSERT INTO customer(username,password,role,email) VALUES('$username','$password','$role','$email')");
    header("location:landing page.php");
}