


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
    <h2><b>Senarai Permohonan</b></h2>
	<br><br>

  
  
  
  <?php // Connects to your Database
include "server.php";

 $data1 = mysql_query("SELECT COUNT(id) as mycount FROM permohonan where status='N'") or die(mysql_error());
 $info1 = mysql_fetch_array( $data1 ); 
 $N = $info1['mycount']; 
 
 $data2 = mysql_query("SELECT COUNT(id) as mycount2 FROM permohonan where status='T'") or die(mysql_error());
 $info2 = mysql_fetch_array( $data2 ); 
 $T = $info2['mycount2']; 
 
 $data3 = mysql_query("SELECT COUNT(id) as mycount3 FROM permohonan where status='L'") or die(mysql_error());
 $info3 = mysql_fetch_array( $data3 ); 
 $L = $info3['mycount3']; 
 
 //echo $N; echo $T; echo $L;
 
 include "chart.php";
      ?>
  
 
  
  
  
  </div>



  <?php //include "footer.php"; ?>