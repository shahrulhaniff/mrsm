<?php
include "server.php"; 

$nomak = $_POST['nomak'];

 $data = mysql_query("SELECT * FROM pelajar WHERE nomak='$nomak'")
 or die(mysql_error());
 
if(mysql_fetch_array($data) !== false){
	 echo"<script>document.location.href='borang_mohon.php?nomak=".$nomak."';</script>";
 }
 else { echo"<script>document.location.href='borang_mohon.php?nomak=baru';</script>"; }

?>