<?php
ini_set('display_errors', 0);
include('php/connect.php'); 
include('php/session.php');

?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a [routerLink]="['/home']" class="navbar-brand text-light float-right" href="#">CARTONAGEM TRINDADE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" >
              <a  href="home.php"  routerLinkActive='active' class="nav-link text-light" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a href="sensors.php" class="nav-link text-light" href="#">Sensors</a>
            </li>
            <li class="nav-item">
              <a href="history.php" class="nav-link text-light" href="#">History</a>
            </li>
            
            
          </ul>
          <ul class="navbar-nav" style="margin-right: 3%">
                <li><a id="3" href="php/logout.php" style="color: aliceblue;"></span> Logout</a></li>
          </ul>
        </div>
      </nav>