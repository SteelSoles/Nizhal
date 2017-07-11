<html>
<head>
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

 <link rel="stylesheet" href="route.css">
<style>

    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>

    <!-- <?php

    $sql= new mysqli('localhost','root', '', 'Digitrack' );

                                                        if($sql->connect_error)

                                                            { die("connection failed:". $sql->connect_error);
                                                            }

$query= $sql->query("select distinct route_id from route order by route_id");
$query1= $sql->query("SELECT GROUP_CONCAT(name SEPARATOR ', ') as stop FROM route GROUP BY route_id");

if ($query!=TRUE)
{
    echo "error".$sql->error;
}


    ?> -->

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

    <h1>Route</h1>
</div>
<div style="width:100%; margin-top:17px;">
  <!--nav ends here-->
</div>
    </div>

    <div class="container well base ">

                                    <?php
                                            if($query!==FALSE)
                                                    {
                                                        while($row = mysqli_fetch_array($query))
                                                                 {
                                                             echo " <div class=\"well cards\" style=\"float: left;\"> <h1>"
                                                             .$row["route_id"]."</h1>";
                                                          $row1 = mysqli_fetch_array($query1);

                                                                echo "<p>".$row1["stop"]."</p></div>";





                                                                 }
                                                                                mysqli_free_result($query);
                                                                                mysqli_free_result($query1);
                                                    }
                                    ?>





    </div>

        <a href="routecreator.php" ><button class="btn btn-primary" id="but">Change</button></a>

</body>        <hr style="border-color:#ecaa0b; width:90vw;">

    <footer>
    <img class="darc" src="D'ARC.png">

</footer>
</html>
