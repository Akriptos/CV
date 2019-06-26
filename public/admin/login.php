<?php

session_start();

function is_email_valid(string $email): bool
{
    $pattern = '/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\..[a-zA-Z0-9]+$/';
    if (preg_match($pattern, $email)) {
      return true;
    }
    
    return  false;
}

// est-ce que j'ai un formulaire
if (count($_POST) === 2) {
  $adminEmail = "arthur.terville@gmail.com";
  $adminPassword = '87d805d9f703896ce77c5afc2b2150ead8a5d4c3';

  if (!is_email_valid($_POST['email'])) {
    die('Email invalide.');
  }
 
  // est-ce que mes logins sont valides
  if (
    $adminEmail === $_POST['email']
    && $adminPassword === sha1(md5('TOTO'.$_POST['password']))
  ) {
    $_SESSION['is_logged_in'] = true;
  
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/public/admin/index.php');
    exit();
  } else if(isset($errorMessage)) {
    $errorMessage = 'Mauvais indentifiant mec.';
  }
}

?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.5">
      <title>Login</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Custom styles for this template -->
      <link href="css/login.css" rel="stylesheet">
   </head>
   <body class="text-center">
     <div class="container">
      <?php if (isset($errorMessage)) { ?>
        <div class="row">
          <div class="col-md-4 mx-auto">
          <div class="alert alert-danger" role="alert">
            <?= $errorMessage; ?>
          </div>
        </div>
        </div>
      <?php } ?>

      <form novalidate="novalidate" action="http://cv/public/admin/login.php" method="POST" class="form-signin">
        <img class="mb-4" src="img/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Merci de vous identifier</h1>
        <label for="inputEmail" class="sr-only">Votre email</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Votre adresse email" required autofocus>
        <label for="inputPassword" class="sr-only">Votre mot de passe</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
        <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y'); ?></p>
      </form>
      </div>
   </body>
</html>