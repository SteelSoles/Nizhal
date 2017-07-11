 <?php
header('Content-Type: application/json');
 $sql= new mysqli('localhost','root', '', 'digitrack' );

                                if($sql->connect_error)

                                    { die("connection failed:". $sql->connect_error);
                                    }


                                $querry= $sql->query("SELECT lat, lon FROM device ORDER BY entry DESC LIMIT 1 ");

if($querry!==FALSE){

		     while($row = mysqli_fetch_array($querry))
             {
                  $output[]=$row;

                }



		  } ;
print(json_encode($output));
     ?>
