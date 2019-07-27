<?php
include "server.php"; 
session_start();
$wujud = $_SESSION['wujud'];

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


$sql = "INSERT INTO permohonan (nomak, sebab, tarikhkeluar, tarikhmasuk, status)
VALUES ('$nomak', '$sebab', '$tarikhkeluar', '$tarikhmasuk', 'N')" or die (mysql_error());

if($wujud == "tiada"){
$sql2 = "INSERT INTO pelajar (nomak, nama, kelas, hr, namapenjaga, notel)
VALUES ('$nomak', '$nama', '$kelas', '$hr', '$namapenjaga', '$notel')" or die (mysql_error());
$result=mysql_query($sql2);
}

if($wujud == "ada") {
	$sqlu = "UPDATE pelajar SET nama='$nama', kelas = '$kelas' WHERE nomak='$nomak'";
	mysql_query($sqlu);
}


$result=mysql_query($sql);
if($result){
			echo"<script>alert('Permohonan Telah Dihantar!');document.location.href='semak.php';</script>";
            }
else{ echo mysql_error(); }
?>