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
<div clas ="well" style="width:100%; margin-top:17px;">
  <!--nav ends here-->
  <div class="well rtcrt">
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

          </div><br><br><br>

          <div class="row">
            <div class="col-xs-1.5" style="margin-left:15px;">
                <h3>Stop name:</h3>
            </div>
            <div class="col-md-4">
                  <input type="text" id="stop" placeholder="Enter Stop Name" width="50px" height="55px" style="margin-left:10px; font-size:15px;">
            </div>

          </div>


      </div>

      <button  onclick="setval()" style="margin-left:200px; margin-top:10px; padding:5px 10px; font-size:13px;" class="btn btn-warning">Add</button>
      <script type="text/javascript">
        function setval(){
        var rt = document.getElementById('routes').value;
        var st = document.getElementById('stop').value;
        var pst= document.getElementById('card-stops').innerHTML;
        if(pst != "")
        pst += ",";
        pst += st;
        document.getElementById('cardp').innerHTML=rt;
        document.getElementById('card-stops').innerHTML=pst;
        document.getElementById('stop').value = "";
      }
      </script>
      <div class="card" style="margin-top:10px">
        <div class="container" >
          <h3 id="cardp">No Routes Yet</h3>
          <h5 style="padding-top:20px"><span id="card-stops"></span></h5>
      </div>
  </div>
  <div class="save-btn">
    <button class="btn btn-warning ">Save</button>
  </div>

</div>
</body>
</html>
