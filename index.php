
<!--    $q = "http://crewlabz.in/testget.php";
    $json = file_get_contents($q);
    $details = json_decode($json);
    $distance=$details[0]->lat;
    //echo $distance;
*/-->

<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','digitrack');
$con = mysqli_connect(HOST,USER,PASS,DB);

if(isset($_GET["a"]))
                                {
                                    $a = $_GET["a"];
                                }
                                     else $a='ECR';
    
    
    
    $sql2 = "SELECT * FROM bus where route_id= '$a'";
  $res2 = mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_array($res2);
    $dev_id = $row2["device_id"];



 $sql = "SELECT *
    FROM device where device_id=$dev_id
    ORDER BY time DESC
    LIMIT 1 ";
  $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($res);


$sql1 = "select distinct route_id from route";
  $res1 = mysqli_query($con,$sql1);
$sql3="SELECT GROUP_CONCAT(name SEPARATOR ', ') as stop FROM route GROUP BY route_id";
$query3= mysqli_query($con,$sql3);




 ?>

<html>
<head>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>

    #map {
      height: 100%;
    }

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>

</head>
<body>
  <div class="container-fluid">
<div class="pannel-yellow">

    <div class="nav-content">
      <a href="index.php">Home</a>

      <a href="buses.php">Buses</a>

      <a id="route" href="route.php">Routes</a>
    </div>

  <img class="logo" src="LOGOFinalwhite.png" >
    <h1>Admin Panel</h1>
</div>
<div style="width:100%; margin-top:17px;">
  <!--nav ends here-->

 <div class=" align-left">

<?php

     if($res1!=FALSE)
     {
         while( $row1 = mysqli_fetch_array($res1))
         {
             echo "<a id=\"click\" href=\"index.php?a=".$row1["route_id"]."\"><div class=\"card\">
                <div class=\"container\">
               <h4><b>".$row1["route_id"]."</b></h4>
               <p>";
             
             $row3 = mysqli_fetch_array($query3);
             echo $row3["stop"]."</p>
                </div>
                    </div></a>";
         }
     }

?>
     
     <script>
                                                    
     
     </script>
  </div>

<div class=" align-right ">
  <div id="map"></div>

      <script>
        var map;

       function initMap()
    {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: <?php echo $row["lat"]; ?>, lng: <?php echo $row["lon"]; ?>},
            zoom: 13
          });

       var marker = new google.maps.Marker({
      position:{lat:<?php echo $row["lat"]; ?> , lng:<?php echo $row["lon"];?> },
      map: map,
           icon: 'bus.png',
      title: 'chennai!'});



    setInterval(  function updatePosition()
           {
               $.ajax({

        type : 'GET',

        url: 'testget.php',
        dataType: 'json',
        data: 'data',
        success : function callDone(data)
                        {
                        // update marker position
                        var latLng = new google.maps.LatLng( data[0].lat, data[0].lon );
                        marker.setPosition( latLng );
                        // call the function again
                        }
                    });
            }           , 1000 );

   }



    </script>
    </div>
    </div>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCD3JhqHiQ6D1476y-CDHAoFQML9zMhX0w&callback=initMap"
      async defer></script>
</div>
</body>
        <hr style="border-color:#ecaa0b; width:90vw;">

<footer>
    <img class="darc" src="D'ARC.png">

</footer>
</html>
<?php mysqli_close($con); ?>
