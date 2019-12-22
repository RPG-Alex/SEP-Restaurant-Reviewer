<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

  <!--CUSTOM STYLES-->
  <link rel="stylesheet" media="all" href="<?php echo './styles.css' ?>" />
  
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

  <title><?php echo SITENAME; ?></title>

</head>

<body>

  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?php echo URLROOT; ?>">
      <img src="https://image.flaticon.com/icons/png/512/849/849588.png" width="35" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="<?php echo URLROOT; ?>" class="navbar-item">
        Home
      </a>

      <a href="<?php echo 'index.php?page=about';?>" class="navbar-item">
        About
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Something</strong>
          </a>
          <a href="<?php echo 'index.php?page=login' ?>"class="button is-light">
            Admin Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>
