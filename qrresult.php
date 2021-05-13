<?php 



ini_set('memory_limit', '-1');
set_time_limit(500);
include "qrclass.php";
if(isset($_POST['generate'])){
	
	$db=mysqli_connect("remotemysql.com", "VC1cXIVdFt", "KQZUN1FPqb", "VC1cXIVdFt");

	$data = "SELECT e.id , e.event , e.datetime ,e.type , r.roomname , s.staffName FROM events as e INNER JOIN rooms as r on e.roomID = r.id INNER JOIN staff as s ON e.staffID = s.id Where r.roomname = '".$_POST['roomName']."'";
    $q = mysqli_query($db , $data);
    $row = mysqli_fetch_assoc($q);
	$qc = new QrCode();   
 	$qc->calendar_event($row['event'],$row['datetime'],$row['roomname'],$row['staffName']);
	$qc->generateQRCODE(400,"qrcode.png");
}






?>

<script>
	window.location.href="qrcode.php"
</script>
