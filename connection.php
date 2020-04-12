<?php 
// Make connection To your Database //
$connection = mysqli_connect("localhost","root","","multi_user");
 
// Check connection
if (mysqli_connect_errno()){
    echo "Database Connection Failed : " . mysqli_connect_error();
    }


// Change "localhost" To your Mysql Host/ip //
// Change "root" To your Mysql username //
// Change your mysql password beside the root //
// Change "multi_user" To your Mysql database //

?>
