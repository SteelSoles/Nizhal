<html>
<head>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<style>
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
<div class ="well" style="width:100%; margin-top:17px;">
  <!--nav ends here-->
  <div class="rtcrt">
    <h1>Route Creation</h1>
    <hr style="border-color:#ecaa0b;">
      <div class="rtcrt-input">
          <div class="row">
            <div class="col-xs-1.5" style="margin-left:15px;">
                <h3>Route name:</h3>
            </div>
            <div class="col-md-6">
                  <input type="text" id="routes" placeholder="Enter Route Name" width="20px" height="55px" style="font-size:15px;">
            </div>

          </div><br>

          <div class="row">
            <div class="col-xs-1.5" style="margin-left:15px;">
                <h3>Stop name:</h3>
            </div>
            <div class="col-md-4">
                  <input type="text" id="stop" placeholder="Enter Stop Name" width="50px" height="55px" style="margin-left:10px; font-size:15px;">
            </div>

          </div><br>

          <div class="row">
            <div class="col-xs-1.5" style="margin-left:15px;">
              <h4>ETA:</h4>
            </div>
            <div class="col-xs-1.5">
              <input type="text" id="eta" placeholder="Enter Time of arrival" width="50px" height="55px" style="margin-left:85px; font-size:10px;">
            </div>
            <div class="col-xs-1.5">
              <h4 style="margin-left:75px;">Lattitude:</h4>
            </div>
            <div class="col-xs-1.5">
              <input type="text" id="lat" placeholder="Enter lattitude" width="50px" height="55px" style="margin-left:10px; font-size:10px;">
            </div>
            <div class="col-xs-1.5">
              <h4 style="margin-left:75px;">Longitude:</h4>
            </div>
            <div class="col-xs-1.5">
              <input type="text" id="lon" placeholder="Enter longitude" width="50px" height="55px" style="margin-left:10px; font-size:10px;">
            </div>
          </div>


      </div>

      <button  onclick="setval()" style="margin-left:500px; margin-top:10px; padding:5px 10px; font-size:13px;" class="btn btn-warning">Add</button>
      <script type="text/javascript">

      <?php
      define('HOST','localhost');
      define('USER','root');
      define('PASS','123456');
      define('DB','DigiTrack');
      $con = mysqli_connect(HOST,USER,PASS,DB);
       ?>
        function setval(){
        var rt = document.getElementById('routes').value;
        var st = document.getElementById('stop').value;
        var eta= document.getElementById('eta').value;
        var lat= document.getElementById('lat').value;
        var lon= document.getElementById('lon').value;
        var table = document.getElementById("myTable");

        //var cou = $('#myTable tr').length;
        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);

        cell1.innerHTML = st;
        cell2.innerHTML = eta;
        cell3.innerHTML = lat;
        cell4.innerHTML = lon;


        document.getElementById('stop').value = "";
        document.getElementById('eta').value = "";

      }

      function saveval(){
        var rt = document.getElementById('cardp').innerHTML;


      }
      </script>
      <div class="card" style="margin-top:10px; text-align: center;">
        <div class="container" >
          <h3 >Route:<span id="cardp"></span></h3>
          <table class="table" id="myTable">
            <thead>

              <th>Route stop</th>
              <th>ETA</th>
              <th>Lattitude</th>
              <th>Longitude</th>

            </thead>

          </table>


      </div>
  </div>
  <div class="save-btn" >
    <button class="btn btn-warning" style="box-shadow: 0px 4px 8px 0 rgba(0,0,0,0.2); font-size:17px;" onclick="saveval()">Save</button>
  </div>

</div>
</body>
</html>
