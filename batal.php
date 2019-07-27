<?php
    require 'server.php';
     
       
        $id = $_GET['id'];
        $nomak = $_GET['nomak'];
	
		
		// delete data
		$sql="DELETE FROM permohonan  WHERE id = '$id'";
		$result=mysql_query($sql);
		if($result){
				echo ("<script LANGUAGE='JavaScript'>
					window.alert('Permohonan berjaya dibatalkan.');
					window.location.href='semak2.php?nomak=".$nomak."';
					</script>");
			
			}else {
				 echo ("<script LANGUAGE='JavaScript'>
					window.alert('Permohonan tidak boleh dibatalkan.');
					window.location.href='semak2.php?nomak=".$nomak."';
					</script>");
			}
   
	
?>