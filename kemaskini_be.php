<?php
include "server.php"; 

$id 		 = $_POST['id'];
$nama 		 = $_POST['nama'];
$kelas 		 = $_POST['kelas'];
$hr 		 = $_POST['hr'];
$namapenjaga = $_POST['namapenjaga'];
$notel 		 = $_POST['notel'];
$nomak 		 = $_POST['nomak'];
$sebab 		 = $_POST['sebab'];
$tarikhkeluar= $_POST['tarikhkeluar'];
$tarikhmasuk = $_POST['tarikhmasuk'];

/*
N = Dalam Permohonan
L = Permohonan Lulus
T = Permohonan Tidak Lulus
*/

	$sql1 = "UPDATE pelajar SET nama='$nama', kelas = '$kelas', notel = '$notel' WHERE nomak='$nomak'";
	$sql2 = "UPDATE permohonan SET sebab='$sebab', tarikhkeluar = '$tarikhkeluar', tarikhmasuk = '$tarikhmasuk' WHERE nomak='$nomak' AND id='$id'";
	$result=mysql_query($sql1);
	$result2=mysql_query($sql2);

if($result){
			echo"<script>alert('Permohonan Telah Dihantar!');document.location.href='semak2.php?nomak=".$nomak."';</script>";
            }
else{ echo mysql_error(); }
?>