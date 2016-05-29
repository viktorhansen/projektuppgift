<?php


 ?>



<head>
  <title>BikeNow</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href="content/css/bootstrap.min.css" rel="stylesheet" />
  <link href="content/css/style.css" rel="stylesheet" />
</head>

<body>
  <?php readfile('_navbar.php');  ?>

  <div class="container-fluid">
    <section id="about" class="row">
      <div class="fill-screen" style="background-image: url(content/images/lagning.jpg)">
        <div class="register">
          <h2>Registreringen lyckades!</h2>
          <h3>Tryck för att återgå till startsidan och logga in</h3>
          <a href="index.php">
            <button type="button" class="btn btn-default">Logga in</button>
          </a>
        </div>
      </div>
    </section>
  </div>

  <?php readfile('_footer.php'); ?>

  <script src="content/js/jquery-1.12.2.min.js"></script>
  <script src="content/js/bootstrap.min.js"></script>
  <script src="content/js/classie.js"></script>
  <script src="content/js/cbpAnimatedHeader.js"></script>
  <script src="content/js/scrolling.js"></script>
  <script src="content/js/script.js"></script>

</body>
</html>
