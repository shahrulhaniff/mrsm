


<?php 
include "header.php";
include "menu.php";
?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Photo grid -->
  <div class="w3-row">
    <div class="w3-third">
      <img src="image/logomrsm.jpg" style="width:100%" onclick="onClick(this)" alt="Logo MRSM"width="200" height="250">
      <img src="image/kolamrenang.jpg" style="width:100%" onclick="onClick(this)" alt="KOLAM RENANG"width="200" height="250">
      <img src="image/gamelan.jpg" style="width:100%" onclick="onClick(this)" alt="Juara Festival Gamelan Melayus">
    </div>

    <div class="w3-third">
      <img src="image/dataran ilmu.jpg" style="width:100%" onclick="onClick(this)" alt="Kakak Koop Yang Cantik Dan Comel">
      <img src="image/KAKAK KOOP.jpg" style="width:100%" onclick="onClick(this)" alt="Dataran Ilmu">
      <img src="image/raja fiz.jpg" style="width:100%" onclick="onClick(this)" alt="kejayaan maktab"width="200" height="250">
	  <img src="image/mrsmkt.jpg" style="width:100%" onclick="onClick(this)" alt="KAWASAN SEKITAR MAKTAB"width="200" height="250">
    </div>
    
    <div class="w3-third">
      <img src="image/logo mara.jpg" style="width:100%" onclick="onClick(this)" alt="Logo MARA"width="200" height="250">
      <img src="image/anugerah geneva.jpg" style="width:100%" onclick="onClick(this)" alt="Anugerah Tempat Pertama Projek Sem Geneva"width="100" height="180"">
      <img src="image/asrama.jpg" style="width:100%" onclick="onClick(this)" alt="Asrama MRSM Kuala Terengganu">
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h2><b>LAMAN UTAMA</b></h2>
   
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4>My Name</h4>
      <p>Some text about me. I love taking photos of PEOPLE. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <p>mail: example@example.com</p>
      <p>tel: 5353 35531</p>
      <hr class="w3-opacity">
      
	  
    </div>
  </div>



  <?php include "footer.php"; ?>