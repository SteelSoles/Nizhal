
<!--    $q = "http://crewlabz.in/testget.php";
    $json = file_get_contents($q);
    $details = json_decode($json);
    $distance=$details[0]->lat;
    //echo $distance;
*/-->

<?php
define('HOST','localhost');
define('USER','root');
define('PASS','123456');
define('DB','DigiTrack');
$con = mysqli_connect(HOST,USER,PASS,DB);


//$result = array();
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
</div>
<div style="width:100%; margin-top:17px;">
  <!--nav ends here-->

 <div class=" align-left">
   <div class="card">
     <div class="container">
   <h4><b>Route-name</b></h4>
   <p>stop1,stop2,stop3</p>
 </div>
   </div>

   <div class="card">
     <div class="container">
   <h4><b>Route-name 2</b></h4>
   <p>stop1,stop2,stop3?></p>
 </div>
   </div>
  </div>

<div class=" align-right ">
  <div id="map"></div>

      <script>
        var map;
       function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 11.11211, lng: 79.84354},
            zoom: 2
          });

}

setInterval(   function initmarker() {
    <?php

    $sql = "SELECT lat, lon
    FROM device
    ORDER BY entry DESC
    LIMIT 1 ";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($res) ?>
    var marker = new google.maps.Marker({
      position:{lat: <?php echo $row ['lat']; ?>, lng: <?php echo $row ['lon']; ?>},
      map: map,
      title: 'chennai!'
}); },1000);

      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCD3JhqHiQ6D1476y-CDHAoFQML9zMhX0w&callback=initMap"
      async defer></script>
</div>
</div>
</div>
</body>
<script> $(document).ready(function(){
      refresh();
    });

    function refresh(){
        $('#map').load('ajaindex.php', function(){
           setTimeout(refresh, 8000);
        });
    } </script>
</html>
<?php mysqli_close($con); ?>
