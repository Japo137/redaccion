<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dosis:400,800" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
  </head>
  <body class="bg">

    <div class="container-fluid ">
      <div class="row">
      <div class="col-12 col-md-4 col-sm-8 "></div>

        <div class="col-12 col-md-4 col-sm-8 ">

          <form class="conta-form" method="post">

            <h1 class="text-center title">Reading</h1>

              <div class="form-group">
                <label for="user">Username</label>
              <i class="glyphicon glyphicon-user"></i>
                <input type="text" class="form-control" id="user" name="username" placeholder="Username">
              </div>

              <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
              </div>

              <button type="submit" class="btn btn-primary btn-block mt-4" id="btn" >Enter</button>
              <a href="inicio.php" class="btn btn-success btn-block" id="btn" >Sign in</a>
              <div class="mt-4 text-center">
                <a href="" class="text-center ol" id="btn">Forgot password?</a><br>

                  <?php if(isset($errorLogin)){?>
                      <p class="mensaje" style="color:red; padding:5px; border-radius: 5px; background-color:#D1F2EB  ";> <?php echo $errorLogin  ?></p>

                <?php   }?>
              </div>

          </form>
      </div>
    </div>
  </div>

    <script src="js/jquery.slim.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
