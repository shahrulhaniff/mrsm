<?php
include "server.php";

$username = $_POST['username'];
$pwd	  = $_POST['pwd'];


 $data = mysql_query("
 SELECT * FROM pengurusan
 WHERE username='$username' AND pwd='$pwd'")
 or die(mysql_error());


if($data){
	if(mysql_num_rows($data) > 0) {
			echo"<script>document.location.href='pengurusan.php';</script>";
            }
}	
else{ 
echo"<script>alert('Username dan Kata Laluan Salah!');document.location.href='login.php';</script>"; 
}
?>