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
     <link rel="stylesheet" href="route.css">
<?php
$sql= new mysqli('localhost','root', '', 'digitrack' );

                                                        if($sql->connect_error)

                                                            { die("connection failed:". $sql->connect_error);
                                                      }
    
   $query=$sql->query("select * from bus");
    if ($query!=TRUE)
{
    echo "error".$sql->error;
}
  
        
  ?>        
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
    <h1>Buses</h1>
</div>
<div style="width:100%; margin-top:17px;">
  <!--nav ends here-->
</div>
</div>
    <div class="container well base">

                                    <?php
                                            if($query!==FALSE)
                                                    {
                                                        while($row = mysqli_fetch_array($query))
                                                                 {
                                                             echo " <div class=\"well cards\"> <h1>"
                                                             .$row["bus_no"]."</h1>";
                                                        

                                                                echo "<p>".$row["route_id"]."</p></div>";





                                                                 }
                                                                                mysqli_free_result($query);
                                                     }




                                    ?>





    </div>
    <a href="buscreator.php" ><button class="btn btn-primary" id="but">Change</button></a>
</body>        <hr style="border-color:#ecaa0b; width:90vw;">

    <footer>
    <img class="darc" src="D'ARC.png">
    
</footer>
</html>
