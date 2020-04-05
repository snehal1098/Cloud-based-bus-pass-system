<?php  
     	$servername = "umabrisfx8afs3ja.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";  
       	$username = "x2pq862ie6uczpum";  
       	$password = "igpv2k3jdrl0kfcr";  
       	$dbname = "t3b8ntuvzoix08a0";
	$port = "3306";
       	$conn = mysqli_connect ($servername , $username , $password, $port) or die("unable to connect to host");  
	$sql = mysqli_select_db ($conn,$dbname) or die("unable to connect to database"); 
?>
