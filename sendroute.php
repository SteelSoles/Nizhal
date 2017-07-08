<?php
$st = $_POST['stop'];
define('HOST','localhost');
define('USER','root');
define('PASS','123456');
define('DB','DigiTrack');
$con = mysqli_connect(HOST,USER,PASS,DB);
$sql="insert into route(stop_name) values ('$st')";
 mysqli_query($con,$sql);
 mysqli_close($con);

 ?>
