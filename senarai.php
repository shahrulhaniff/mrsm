


<?php 
include "header.php";
include "menu2.php";
?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  


  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- About section -->
  <div class="w3-container w3-center w3-padding-32" id="about">
    <h2><b>Semak Permohonan</b></h2>
	<br><br>

  
  
  
<?php // Connects to your Database
include "server.php";
include "function.php";
 
 $data = mysql_query("
 SELECT * FROM permohonan A, pelajar B 
 WHERE A.nomak = B.nomak")
 or die(mysql_error());
 
echo"<table  class='w3-table-all w3-hoverable'>"; 
echo"<tr>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>Bil</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>No Maktab</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>Nama</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>Sebab</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>Kelulusan</b></td>";
echo"<td width='150px' height='25px' bgcolor='#cccccc'><b>Tindakan</b></td>";
echo"</tr>";
 
 while($info = mysql_fetch_array( $data )) {
	 $s = $info['status'];
	 $status = getStatus($s);
     echo "<tr>";
      echo "<td>".$info['id'] . " </td>";
      echo "<td>".$info['nomak'] . " </td>";
      echo "<td>".$info['nama'] . " </td>";
      echo "<td>".$info['sebab'] . " </td>";
      echo "<td>".$status . " </td>";
      echo "<td><a href='papar.php?idp=".$info['id']."' class='btnp btnpapar'>Papar</a></td>";
      } echo "</table>";
?>
  
  
  
  
  
  </div>



  <?php //include "footer.php"; ?>