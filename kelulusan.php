<?php
include "server.php";
$status=$_POST['status'];
$id=$_POST['id'];

$sqlu = "UPDATE permohonan SET status='$status' WHERE id='$id'";
$result=mysql_query($sqlu);
if($result){
			echo"<script>alert('Kelulusan dikemaskini!');document.location.href='papar.php?idp=".$id."';</script>";
            }
else{ echo mysql_error(); }
?>