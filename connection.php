<?php  
     	$servername = "umabrisfx8afs3ja.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";  
       	$username = "kesgfz2lwz2vdgo2";  
       	$password = "bb6obxfjmg0u8yaj";  
       	$dbname = "e8xfnsm9jnj53maa";
	$port = "3306";
       	$conn = mysqli_connect ($servername , $username , $password, $port) or die("unable to connect to host");  
	$sql = mysqli_select_db ($conn,$dbname) or die("unable to connect to database"); 
?>
