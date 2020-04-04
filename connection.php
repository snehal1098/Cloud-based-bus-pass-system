<?php  
     	$servername = "localhost";  
       	$username = "root";  
       	$password = "";  
       	$dbname = "travel";
       	$conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
		$sql = mysqli_select_db ($conn,$dbname) or die("unable to connect to database"); 
?>