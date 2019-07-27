<?php 
// UNTUK KEMASKINI PERMOHONAN
session_start();
include "header.php";
include "menu1.php";
include "server.php";
$id = $_GET['id'];
$nomak = $_GET['nomak'];


$sql = mysql_query("
SELECT * FROM pelajar A, permohonan B  
WHERE A.nomak=B.nomak
AND B.id='$id'
AND B.nomak ='$nomak'") or die(mysql_error());
$info = mysql_fetch_array( $sql );

$nama = $info['nama'];
$kelas = $info['kelas'];
$hr = $info['hr'];
$namapenjaga = $info['namapenjaga'];
$notel = $info['notel'];
$sebab = $info['sebab'];
$tarikhkeluar = $info['tarikhkeluar'];
$tarikhmasuk = $info['tarikhmasuk'];

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
   <form action="kemaskini_be.php" method="POST">
    <table class="w3-table-all" border="0">
    
    <tr>
      <td width="30%">Nama</td>
      <td width="70%"><input type="text" name="nama" value="<?=$nama?>" placeholder="sila isi nama"></td>
    </tr>
	
    <tr>
      <td>Kelas</td>
      <td><input type="text" name="kelas" value="<?=$kelas?>" placeholder="kelas"></td>
      <input type="hidden" name="id" value="<?=$id?>">
    </tr>
    <tr>
      <td>Homeroom</td>
      <td><input type="text" name="hr" value="<?=$hr?>" placeholder="homeroom"></td>
    </tr>
	 <tr>
      <td>Nombor Maktab</td>
      <td><input type="text" name="nomak" value="<?=$nomak?>" placeholder="contoh: TT170410" readonly></td>
    </tr> 
	<tr>
      <td>Nama Penjaga</td>
      <td><input type="text" name="namapenjaga" value="<?=$namapenjaga?>" placeholder="nama penjaga"></td>
    </tr> 
	<tr>
      <td>No.Telefon</td>
      <td><input type="text"name="notel" value="<?=$notel?>" placeholder="no telefon penjaga"></td>
    </tr>
	 <tr>
      <td>Sebab</td>
      <td>
	  <textarea rows="4" cols="50" name="sebab" placeholder="sila isi sebab"><?=$sebab?>
</textarea>
	  </td>
    </tr>
    <tr>
      <td>Tarikh keluar</td>
      <td><input type="date" name="tarikhkeluar" value="<?=$tarikhkeluar?>"></td>
    </tr>
    <tr>
      <td>Tarikh masuk</td>
      <td><input type="date" name="tarikhmasuk" value="<?=$tarikhmasuk?>"></td>
    </tr>
  </table>
    <button class="w3-button w3-block w3-green""button button4">Kemaskini</button>
	</form>
  </div>



  <?php //include "footer.php"; ?>