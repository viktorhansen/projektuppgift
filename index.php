<?php
  include('connection.php');
  session_start();

  if ($_POST['submit']) {
    include_once('connection.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT userId, userName, passWord FROM users WHERE userName = 'username' LIMIT 1";
    $query = mysql_query($connect, $sql);

    if ($query) {
      $row = mysqli_fetch_row($query);
      $userId = $row[0];
      $dbUserName = $row[1];
      $dbPassWord = $row[2];
    }

    if ($username == $dbUserName && $password == $dbPassWord) {
      $_SESSION['username'] = $username;
      $_SESSION['userId'] = $userId;
      header['Location: member-page.php'];
    }
    else {
      echo "Felaktigt användarnamn eller lösenord";
    }
  }

  ?>
<!DOCTYPE html>
<html>
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
      <div class="fill-screen" style="background-image: url(content/images/bike.jpg)">
        <div class="about-text">
          <div class="col-md-6">
            <h3>Vi gör ditt cyklande problemfritt!</h3>
            <p>
              Genom att försäkra dig via oss löser vi enkelt din punktering eller annat cykelrelaterat problem på plats.
            </p>
          </div>
          <div class="col-md-6">
            <h3>Anslut dig nu</h3>
            <p>
              Välj att antingen betala en fast månadskostnad eller en avgift för varje felavhjälpning.
            </p>
            <a href="#register"><button type="button" class="btn btn-default">Registrera dig här</button></a>
          </div>
        </div>
        <div class="login">
          <h2>Logga in</h2>
          <form action="index.php" method="POST" name="userlgn" class="input-group">
            <span class="input-group-addon" id="basic-addon">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon" name="username">
            <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon" name="password">
            <button type="button" class="btn btn-default" id="submit" name="submit">Logga in</button>
          </form>
        </div>
        <h1> <?php echo $username ?></h1>
      </div>
    </section>

    <section id="register" class="row">
      <div class="fill-screen fixed-attachment" style="background-image: url(content/images/punktering.jpg)">
        <div class="register-text">
          <h2>Gå med i BikeNow nu för ett problemfritt cyklande!</h2>
          <h3>Registrera dig som kund</h3>
          <p>
            Vill du försäkra dig via BikeNow registrerar du dig här
          </p>
          <a href="register.php"><button type="button" class="btn btn-default">Registrera</button></a>
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
