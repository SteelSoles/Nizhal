
<?php
// error_reporting(E_ALL);
//     ini_set('display_errors',1);
$route= $_POST['routes'];
$stop=$_POST['stop'];
$eta=$_POST['eta'];
$lat=$_POST['lat'];
$lon=$_POST['lon'];



$sql= new mysqli('localhost','root', '', 'digitrack' );

                                                        if($sql->connect_error)

                                                            { die("connection failed:". $sql->connect_error);
                                                            }

$query= $sql->query("insert into routes (route, stop, eta, lat, lon) values ('$route', '$stop', $eta ,'$lat', '$lon' ) ");

if ($query!=TRUE){
    echo "error".$sql->error;
}
  ?>
