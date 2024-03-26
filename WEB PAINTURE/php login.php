<?php
// mengaktifkan session pada php
session_start();
include 'koneksi database.php';

$username = $_POST['username'];
$password = $_POST['password'];

// query untuk mengecek username dan password pada database
$login = mysqli_query($mysqli,"SELECT * FROM customer WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
   $data = mysqli_fetch_assoc($login);
   // cek jika user login sebagai admin
   if($data['role']=="admin"){
    // buat session login dan username
    $_SESSION['username']= $username;
    $_SESSION['password']= $password;
    $_SESSION['role']= "admin";
    // alihkan ke halaman dashboard admin
    header("location:CRUD admin.php");

    // cek jika user login sebagai user
   }elseif($data['role']=="user"){
    // buat session login dan username
    $_SESSION['username']= $username;
    $_SESSION['password']= $password;
    $_SESSION['role']= "user";
     // alihkan ke halaman dashboard user
     header("location:landing page.php");
   }  elseif($data['role']=="artist"){
      // buat session login dan username
      $_SESSION['username']= $username;
      $_SESSION['password']= $password;
      $_SESSION['role']= "artist";
       // alihkan ke halaman dashboard user
       header("location:landing page.php"); 
   }else{
      header("location:halaman login.php");
   }
}else{
     // alihkan ke halaman login kembali
     header("location:location/halaman login.php");
}