<?php 
include "header.php";
include "menu1.php";
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
    <h2><b>Semakan Permohonan Peribadi</b></h2>
	<br><br>
   <form action="semakpelajar2.php" method="POST">
    <table class="w3-table-all" border="0">
    
    <tr>
      <td width="30%">Sila Masukkan No Maktab</td>
      <td width="70%"><input type="text" name="nomak" required></td>
    </tr>
	</table>
	
	<button class="w3-button w3-block w3-teal""button button4">Submit</button>
   </form>
  </div>



  <?php //include "footer.php"; ?>