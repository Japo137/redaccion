<?php
  include_once 'includes/user.php';
  include_once 'includes/user_session.php';

  $userSession = new UserSession();
  $user = new User();

  /*if(isset($_SESSION['user'])){
    //echo "hay session";

      $user->setUser($userSession->getCurrentUser());
      include_once 'vistas/Home2.php';
      include_once 'index.php';



  }else*/ if(isset($_POST['username']) && isset($_POST['password'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];


    if($user->userExists($userForm,$passForm) || $user->userExistsDoc($userForm,$passForm)){
      //echo "usuario validado";
      $userSession->setCurrentUser($userForm);

      $user->setUser($userForm);
      $user->setUserDoc($userForm);

      if($user->getTypeUser()=="alumno"){
        include_once 'vistas/home.php';
      }else{
          include_once 'vistas/home2.php';
      }


    }else {
    // echo "nombre de usuario y/o incorrecto";
      $errorLogin = "Nombre de usuario y/o password es incorrecto";
      include_once 'vistas/login.php';
    }
  }else {
  //  echo "login";
    include_once 'vistas/login.php';
  }


 ?>
