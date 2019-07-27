<?php

function getStatus($status) {
    if($status=="N"){ $status="Dalam Permohonan"; }
    if($status=="L"){ $status="Permohonan Lulus"; }
    if($status=="T"){ $status="Permohonan Tidak Lulus"; }
	
	return $status;
}

?>