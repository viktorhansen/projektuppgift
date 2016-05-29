<?php
  $user = 'root';
  $password = 'root';
  $db = 'BikeNow';
  $host = 'localhost';
  $port = 3306;

  $link = mysqli_init();
  $connect = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
  );
  if (isset($_POST['submit'])) {
  $ok = true;

  if (!isset($_POST['username']) || $_POST['username'] === '') {
    $ok = false;
    $userNameNotSet = "Du måste fylla i ditt användarnamn";
  }
  if (!isset($_POST['password']) || $_POST['password'] === '') {
    $ok = false;
    $passwordNotSet = "Du måste fylla i ett lösenord";
  }
  if (!isset($_POST['namn']) || $_POST['namn'] === '') {
    $ok = false;
    $nameNotSet = "Du måste fylla i ett lösenord";
  }
  if (!isset($_POST['address']) || $_POST['address'] === '') {
    $ok = false;
    $addressNotSet = "Du måste fylla i ett lösenord";
  }
  if (!isset($_POST['phonenumber']) || $_POST['phonenumber'] === '') {
    $ok = false;
    $phoneNumberNotSet = "Du måste fylla i ett lösenord";
  }
  if (!isset($_POST['access']) || $_POST['access'] === '') {
    $ok = false;
    $accessNotSet = "Du måste välja användarnivå";
  }
  if ($ok) {
    //akta sql injektion
    $sqlInjection = sprintf(
    "INSERT INTO users (userName, passWord, name, address, phoneNumber, accessLevel, repairMan)
    VALUES ('username, password, name, address, phonenumber, access, repair')",
    mysqli_real_escape_string($db, 'username'),
    mysqli_real_escape_string($db, 'password')
    mysqli_real_escape_string($db, 'name')
    mysqli_real_escape_string($db, 'address')
    mysqli_real_escape_string($db, 'phonenumber')
    mysqli_real_escape_string($db, 'access')
    mysqli_real_escape_string($db, 'repair'));
    )
    mysqli_query($db, $sqlInjection);
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
  <?php readfile('_navbar.php');  ?>

  <div class="container-fluid">
    <section id="about" class="row">
      <div class="fill-screen" style="background-image: url(content/images/lagning.jpg)">
        <div class="register">
          <h2>Fyll i din information</h2>
            <form method="post" name="loginfo" class="input-group">
              <span class="input-group-addon" id="basic-addon">@</span>
              <input type="text" class="form-control" placeholder="Användarnamn" aria-describedby="basic-addon" name="username">
              <input type="text" class="form-control" placeholder="Lösenord" aria-describedby="basic-addon" name="password">
            </form>

            <form method="post" name="userinfo" class="input-group">
              <span class="input-group-addon" id="basic-addon">Info</span>
              <input type="text" class="form-control" placeholder="Namn" aria-describedby="basic-addon" name="name">
              <input type="text" class="form-control" placeholder="Adress" aria-describedby="basic-addon" name="address">
              <input type="text" class="form-control" placeholder="Telefonnummer" aria-describedby="basic-addon" name="phonenumber">
            </form>
            <form method="post" name="userlvl">
              <div class="access">
                <label>
                  <input type="radio" value="1" name="access">
                  Gratiskonto
                </label>
                <label>
                  <input type="radio" value="2" name="access">
                  Prenumeration, 29kr/mån
                </label>
                <label>
                  <input type="radio" value="3" name="access">
                  Prenumeration, 69kr/mån
                </label><br>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="1" name="repair">
                    Jag vill vara reparatör
                  </label>
                </div>
              </div>
            </form>
            <button type="button" class="btn btn-default" name="submit" id="submitBtn">Registrera</button>
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
