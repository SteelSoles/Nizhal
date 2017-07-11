 <?php
header('Content-Type: application/json');
 $sql= new mysqli('localhost','root', '', 'digitrack' );

                                if($sql->connect_error)

                                    { die("connection failed:". $sql->connect_error);
                                    }
$a=$_GET["dev_id"];

                                $querry= $sql->query("SELECT lat, lon FROM device where device_id=$a ORDER BY time DESC LIMIT 1 ");

if($querry!==FALSE){

		     while($row = mysqli_fetch_array($querry))
             {
                  $output[]=$row;

                }



		  } ;
print(json_encode($output));
     ?>
