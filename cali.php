<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Lectura-Calificaciones</title>
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/simple-sidebar.css" rel="stylesheet">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"> <img src="../img/user (2).png" class="user" alt=""> <label for="">claudio <br> 1° "A"</label> </div>
      <div class="list-group list-group-flush">
      <a href="index.php" class="list-group-item list-group-item-action bg-light meni"> <img src="../img/open-book.png"  alt=""> Lecturas</a>
        <a href="act.php" class="list-group-item list-group-item-action bg-light meni"> <img src="../img/jigsaw.png" alt=""> Actividades</a>
        <a href="cali.php" class="list-group-item list-group-item-action bg-light meni"> <img src="../img/evaluation.png" alt=""> Calificaciones</a>
        <a href="config.php" class="list-group-item list-group-item-action bg-light meni"> <img src="../img/wrench.png" alt=""> Configuracion</a>
       
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

    
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

        <button class="navbar-toggler-icon bn"  id="menu-toggle"> </button>

      </nav>

      <div class="container-fluid">
        <h1 class="mt-2">Calificaciones</h1>
 
        <div id="" class="container">
                        
                        <div class="row mt-4">

                            <div class="cardcali">
                            <p><b>Palbras leidas por minuto: </b> 80 </p> 
                                <p><b>Nivel de comprencion lectora:</b> </p> 
                            </div> <br>

                            <div class="cardreco mt-5">
                            <p><b>Recomendaciondes del profesor </b> </p> 
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit natus non ipsa nemo,
                                 dolore perferendis quos minus voluptatem eum sequi eveniet soluta, libero aut veniam suscipit sapiente, 
                                 fugit doloribus accusantium. </p> 
                            </div>  
                            
</div>
</div>

                  


      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
