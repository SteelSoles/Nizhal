<html>
<?php
error_reporting(E_ALL);
    ini_set('display_errors',1);
$route= $_GET['one'];
$stop=$_GET['two'];
$lat=$_GET['three'];
$lon=$_GET['four'];
$eta=$_GET['five'];
 

$sql= new mysqli('localhost','root', '', 'digitrack' );

                                                        if($sql->connect_error)

                                                            { die("connection failed:". $sql->connect_error);
                                                            }

$query= $sql->query("insert into routes (route, stop, lat, lon, eta) values ('$route', '$stop', '$lat', '$lon' , $eta) ");

if ($query!=TRUE){
    echo "error".$sql->error;
}
  ?>


</html>