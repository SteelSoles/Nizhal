
<?php
// error_reporting(E_ALL);
//     ini_set('display_errors',1);

$bus=$_POST['bus'];
$device=$_POST['device'];
$route= $_POST['route'];




$sql= new mysqli('localhost','root', '123456', 'DigiTrack' );

                                                        if($sql->connect_error)

                                                            { die("connection failed:". $sql->connect_error);
                                                            }

$query= $sql->query("INSERT INTO `bus`(`bus_no`, `device_id`, `route_id`) VALUES ('$bus','$device','$route')");

if ($query!=TRUE){
    echo "error".$sql->error;
}
  ?>
