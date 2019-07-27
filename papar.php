<?php 
session_start();
include "header.php";
include "menu2.php";
include "server.php";
include "function.php";
$idp = $_GET['idp'];

$sql = mysql_query("SELECT * FROM permohonan A, pelajar B  WHERE A.id ='$idp' AND B.nomak = A.nomak") or die(mysql_error());
$info = mysql_fetch_array( $sql );

$nomak = $info['nomak'];
$nama = $info['nama'];
$kelas = $info['kelas'];
$hr = $info['hr'];
$namapenjaga = $info['namapenjaga'];
$notel = $info['notel'];
$sebab = $info['sebab'];
$tarikhkeluar = $info['tarikhkeluar'];
$tarikhmasuk = $info['tarikhmasuk'];
$status = getStatus($info['status']);

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
      <td width="30%">Nama</td>
      <td width="70%"><?=$nama?></td>
    </tr>
	
    <tr>
      <td>Kelas</td>
      <td><?=$kelas?></td>
    </tr>
    <tr>
      <td>Homeroom</td>
      <td><?=$hr?></td>
    </tr>
	 <tr>
      <td>Nombor Maktab</td>
      <td><?=$nomak?></td>
    </tr> 
	<tr>
      <td>Nama Penjaga</td>
      <td><?=$namapenjaga?></td>
    </tr> 
	<tr>
      <td>No.Telefon</td>
      <td><?=$notel?></td>
    </tr>
	 <tr>
      <td>Sebab</td>
      <td>
	  <?=$sebab?>
	  </td>
    </tr>
    <tr>
      <td>Tarikh keluar</td>
      <td><?=$tarikhkeluar?></td>
    </tr>
    <tr>
      <td>Tarikh masuk</td>
      <td><?=$tarikhmasuk?></td>
    </tr>
	<tr>
      <td>Kelulusan</td>
      <td><?=$status?></td>
    </tr>
  
  <tr>
	
  </table>
  
  <table class="w3-table-all">
   <td width="50%">
   <form action="kelulusan.php" method="POST">
   <input type="hidden" name="id" value="<?=$idp?>">
   <input type="hidden" name="status" value="T">
    <button class="w3-button w3-block w3-red""button button4">Tidak Lulus</button>
	</form>
	</td>
	
	<td width="50%">
   <form action="kelulusan.php" method="POST">
   <input type="hidden" name="id" value="<?=$idp?>">
   <input type="hidden" name="status" value="L"> 
    <button class="w3-button w3-block w3-light-green""button button4">Lulus</button>
	</form>
	</td>
	
	
  </table>
  </div>



  <?php //include "footer.php"; ?>