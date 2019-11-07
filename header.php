<?php

  session_start();

?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, intial-scale=1">
  <title>Hello World</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="index.php">
      <img src="images/insta.png" width="40" height="40" alt="" >
    </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="text-white nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="text-white nav-link" href="#">Portfolio</a></li>
      <li class="nav-item"><a class="text-white nav-link" href="#">About Me</a></li>
      <li class="nav-item"><a class="text-white nav-link" href="#">Contact</a></li>
    </ul>

    <?php
      if (isset($_SESSION['userId'])) {
        echo '<form action="includes/logout.inc.php" method="post">
        <button class="btn btn-sm btn-secondary my-2 my-sm-2" type="submit" name="logout-submit" >Logout</button></form><a class="text-white nav-link" href="#">Profile</a>';
      }
      else {
        echo '<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post" >
        <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/E-mail...">
        <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password...">
        <button class="btn btn-sm btn-secondary my-2 my-sm-0" type="submit" name="login-submit" >Login</button>
        </form><a class="text-white nav-link" href="signup.php">Signup</a>';
      }
    ?>
  </nav>
</header>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
