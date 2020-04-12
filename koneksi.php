<?php 
$koneksi = mysqli_connect("localhost","root","admin","multi_user");
 
// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
$host = mysqli_connect("localhost","root","admin",'multi_user'); 
//$db = mysqli_select_db('multi_user');
//}
?>