<?php
  require('connection.php');

  if (isset($_POST['logout'])) {
    session_start();
    session_destroy();
    header('Location: index.php');
  }

  ?>


<header id="top">
  <nav class="navbar navbar-inverse navbar-fixed-top cbp-af-header" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#top">
          <img src="content/images/bikenow.png" />
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <form class="" action="_navbarlogin.php" method="post">
            <button type="name" class="btn btn-default" name="logout"><li>Logga ut</li></button>
          </form>
        </ul>
      </div>
    </div>
  </nav>
</header>
