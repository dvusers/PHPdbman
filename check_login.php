<?php 
session_start();

// Connecting to database
include 'connection.php';

// Data catch from post Function
$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi,"select * from admin_login where username='$username' and password='$password'");


	$data = mysqli_fetch_assoc($login);
    header("location:admin.php");


?>