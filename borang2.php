





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
    <h2><b>Borang Permohonan</b></h2>
	<br><br>
   
    <table class="w3-table-all" border="0">
    
    <tr>
      <td>Nama</td>
      <td><input type="text"></td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td><input type="text"></td>
    </tr>
    <tr>
      <td>Homeroom</td>
      <td><input type="text"></td>
    </tr>
	 <tr>
      <td>Nombor Maktab</td>
      <td><input type="text"></td>
    </tr> 
	<tr>
      <td>Nama Penjaga</td>
      <td><input type="text"></td>
    </tr> 
	<tr>
      <td>No.Telefon</td>
      <td><input type="text"></td>
    </tr>
	 <tr>
      <td>Sebab</td>
      <td><input type="text"></td>
    </tr>
    <tr>
      <td>Tarikh</td>
      <td><input type="text"></td>
    </tr>
  </table>
  	    <button class="w3-button w3-block w3-green""button button4">LULUS</button>
        <button class="w3-button w3-block w3-red""button button4">TIDAK LULUS</button>
  </div>



  <?php //include "footer.php"; ?>