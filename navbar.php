<?php require_once 'environment.php'; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <!--  Linket e listes se parenditur -->
  <a class="navbar-brand px-3" href="#">
    <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : SITE_TITLE ?>
  </a>

  <!-- buton per Toggle/Collapse  -->

  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#barNavigimi">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="barNavigimi">

    <ul class="navbar-nav flex-fill">

      <li class="nav-item">
        <a class="nav-link" href="index.php"> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="leksione.php"> Leksione </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="klasat.php"> About us </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="team.php"> Our Team </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html"> Contact </a>
      </li>

      <?php if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']){

      echo ' <li class="nav-item">
      <a class="nav-link" href="register.php"> Sign Up </a>
    </li>';}?>
     
    </ul>

    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ) { ?>
      <form class="form-inline my-2 my-lg-0" action="logout.php" method="get">
        <button class="btn btn-outline-success my-2 mx-4 my-sm-0" s type="submit">Log out</button>
      </form>
    <?php } else {  ?>
      <form class="form-inline my-2 my-lg-0" action="login.php" method="get">
        <button class="btn btn-outline-success my-2 mx-4 my-sm-0" s type="submit">Log in</button>
      </form>
  </div>

  <?php } ?>


</nav>