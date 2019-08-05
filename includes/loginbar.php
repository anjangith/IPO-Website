<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['login_user'])){
  $user_name = $_SESSION['login_user'];
}else{
    $user_name='';
}

?>





<nav class="navbar navbar-expand-lg navbar-light bg-primary navbar-static-top">
  <a class="navbar-brand text-white" href="#"><strong>TEJA</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="nav navbare">
      <a class="nav-item nav-link text-white ml-5"><img src="img/hand.png" class="img-circle" alt="Cinque Terre" width="45" height="45"><strong><?php echo $user_name?></strong></a>
      <a class="nav-item nav-link active text-white ml-5 mt-4" href="index.php"> HOME <span class="sr-only">(current)</span></a>
  	  <a class="nav-item nav-link active text-white ml-5 mt-4" href=""> IPO </a>
      <a class="nav-item nav-link active text-white ml-5 mt-4" href=""> RIGHTS </a>
  	  <a class="nav-item nav-link active text-white ml-5 mt-4" href=""> MERGER/DEMERGER </a>
      <a class="nav-item nav-link active text-white ml-5 mt-4" href=""> OTHERS </a>
      <a class="nav-item nav-link text-white ml-5" href="php/logout.php"><img src="img/user.png" class="img-circle" alt="Cinque Terre" width="45" height="45">LOGOUT</a>

    </div>
  </div>
</nav>





<!--
<nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo left"><h5>TEJA</h5></a>
      <ul id="nav-mobile" class="right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="logout.php">LOG OUT</a></li>
      </ul>
    </div>
  </nav>

--->
