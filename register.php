<?php
  require('connection.php');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phonenumber = $_POST['phonenumber'];
  $radio = $_POST['radio'];
  $repair = $_POST['repair'];

  if ($_POST['submit']) {
  $ok = true;

  if (!isset($_POST['username']) || $_POST['username'] == '') {
    $ok = false;
    $userNameNotSet = "Du måste fylla i ditt användarnamn";
    echo "japp";
  }
  if (!isset($_POST['password']) || $_POST['password'] == '') {
    $ok = false;
    $passwordNotSet = "Du måste fylla i ett lösenord";
    echo "japp1";
  }
  if (!isset($_POST['name']) || $_POST['name'] == '') {
    $ok = false;
    $nameNotSet = "Du måste fylla i ett lösenord";
    echo "japp2";
  }
  if (!isset($_POST['address']) || $_POST['address'] == '') {
    $ok = false;
    $addressNotSet = "Du måste fylla i ett lösenord";
    echo "japp3";
  }
  if (!isset($_POST['phonenumber']) || $_POST['phonenumber'] == '') {
    $ok = false;
    $phoneNumberNotSet = "Du måste fylla i ett lösenord";
    echo "japp4";
  }
  if (!isset($_POST['radio'])) {
    $ok = false;
    $accessNotSet = "Du måste välja användarnivå";
    echo "japp5";
  }
  if ($ok) {
    //akta sql injektion
    $sqlInjection = sprintf(
    "INSERT INTO users (userName, passWord, name, address, phoneNumber, accessLevel, repairMan)
    VALUES ('{$username}', '{$password}', '{$name}', '{$address}', '{$phonenumber}', '{$radio}', '{$repair}')",
    mysqli_real_escape_string($connect, $username),
    mysqli_real_escape_string($connect, $password),
    mysqli_real_escape_string($connect, $name),
    mysqli_real_escape_string($connect, $address),
    mysqli_real_escape_string($connect, $phonenumber),
    mysqli_real_escape_string($connect, $radio),
    mysqli_real_escape_string($connect, $repair));

    mysqli_query($connect, $sqlInjection);
    header('Location: register-successful.php');
  }
}

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
 <?php readfile('_navbar.php'); ?>
  <div class="container-fluid">
    <section id="about" class="row">
      <div class="fill-screen" style="background-image: url(content/images/lagning.jpg)">
        <div class="register">
          <h2>Fyll i din information</h2>
            <form method="post" action="register.php" name="userinfo">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon">@</span>
                <input type="text" class="form-control" placeholder="Användarnamn" aria-describedby="basic-addon" name="username">
                <input type="password" class="form-control" placeholder="Lösenord" aria-describedby="basic-addon" name="password">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon">info</span>
                <input type="text" class="form-control" placeholder="Namn" name="name">
                <input type="text" class="form-control" placeholder="Adress" name="address">
                <input type="text" class="form-control" placeholder="Telefonnummer" name="phonenumber">
              </div>
              <div class="input-group">
                <label><input type="radio" value="one" name="radio">Gratiskonto</label><br>
                <label><input type="radio" value="2" name="radio">Prenumeration, 29kr/mån</label><br>
                <label><input type="radio" value="3" name="radio">Prenumeration, 69kr/mån</label><br>
                <label><input type="checkbox" value="4" name="repair">Jag vill vara reparatör</label>
              </div>
              <button type="submit" class="btn btn-default" value="yes" name="submit" id="submitBtn">Registrera</button>
            </form>
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
