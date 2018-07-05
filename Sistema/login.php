<?php


 /* TIPOS DE USUARIOS:
  * ADMINISTRADOR - 1
  * FUNCIONARIOS - 2
  * PACIENTE - 3
 */

 require_once 'assets/php/classes/classLogin.php';

 $classLogin = new classLogin();
  session_start();

 if(isset($_POST['login'])){

  $user = $_POST['email'];
  $senha = $_POST['senha'];

  $email =(string) $classLogin->indexEmail($user)->email;
  $senha =(string) $classLogin->indexEmail($user)->senha;
  ECHO $email;
  echo $senha;

  if($user == "" || $senha == ""){
    echo "<script>alert('Preencha todos os campos');</script>";
  }else if($email == $user && $senha == $senha){
    
    $idu=     $tipo = $classLogin->indexEmail($user)->id;
    $tipo = $classLogin->indexEmail($user)->type;
    $_SESSION['type'] = $tipo;
    $_SESSION['id']= $idu; 
      header('location:  dashboard.php');

  }else{
    echo "<script>alert('Login ou senha incorretos');</script>";
  }
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Padaria Pão de Mel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Lembre-me
                            </label>

                        </div>
                        <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
