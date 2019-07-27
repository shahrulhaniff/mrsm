<?php
include "server.php"; 

$nomak = $_POST['nomak'];

 $data = mysql_query("SELECT * FROM pelajar WHERE nomak='$nomak'")
 or die(mysql_error());
 
if(mysql_fetch_array($data) !== false){
	 echo"<script>document.location.href='semak2.php?nomak=".$nomak."';</script>";
 }
 else { echo"<script>alert('Tiada Maklumat!');document.location.href='peribadi.php';</script>"; }

?>