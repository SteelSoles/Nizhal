
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
$sql = "SELECT lat, lon
FROM device
ORDER BY entry DESC
LIMIT 1 ";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res)

?>

<html>
<head>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
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

  <div id="map"></div>

      <script>
        var map;
       function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 11.11211, lng: 79.84354},
            zoom: 2
          });

    var marker = new google.maps.Marker({
      position:{lat: <?php echo $row ['lat']; ?>, lng: <?php echo $row ['lon']; ?>},
      map: map,
      title: 'chennai!'
}); }

      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCD3JhqHiQ6D1476y-CDHAoFQML9zMhX0w&callback=initMap"
      async defer></script>
</div>

</body>
</html>
