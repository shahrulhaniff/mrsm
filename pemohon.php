


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
    <h2><b>Tentang Permohonan</b></h2>
	<br><br>
   
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4>PERATURAN PULANG BERMALAM</h4>
      <p>1. Para pelajar dibenarkan balik mengikut jadual yang telah ditetapkan kecuali bagi kes-kes kecemasan.</p>
	  <p>2. Pelajar mesti membawa Kad Keluar Maktab untuk disahkan dan ditandatangani oleh Ketua Guru Asrama/Guru Asrama pada setiap kali permohonan diluluskan</p>
     <p>3. Urusan kecemasan keluarga pelajar mestilah mendapat kebenaran khas daripada Pengetua/Timbalan Pengetua PP/Ketua Guru Asrama</p>
	 <p>4. Pelajar hendaklah melaporkan diri semula di pondok pengawal SEBELUM jam 6.00 petang pada hari terakhir cuti</p>
	 <br>
	  <h4>PERATURAN KELUAR KE BANDAR (OUTING) </h4>
      <p>1. Para pelajar hendaklah berpakaian batik/uniform seperti yang dikehendaki dalam peraturan mengenai pakaian , berkasut dan berstokin. </p>
	  <p>2. Para pelajar dikehendaki keluar dalam berkumpulan, berdua atau lebih dan daripada jantina yang sama </p>
     <p>3. Pelajar dilarang mengunjungi tempat - tempat hiburan seperti pusat permainan hiburan , kelab malam atau semua tempat pelacuran </p>
	 <p>4. Pelajar yang lewat tiba di Maktab akan ditahan Kad Keluar Maktab dan akan dikenakan tindakan JPPM </P>
	 <p>5. Kehilangan kad keluar/masuk akan didenda sebanyak RM10.00
	 <br>
	 <p>fax : 09-669 6087 </p>
      <p>tel: 09-669 6344/345 </p>
      <hr class="w3-opacity">
      
	  
    </div>
  </div>



  <?php //include "footer.php"; ?>