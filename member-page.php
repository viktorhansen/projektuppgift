

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
  <?php readfile('_navbarlogin.php');  ?>

  <div class="container-fluid">
    <section id="about" class="row">
      <div class="fill-screen" style="background-image: url(content/images/lagning.jpg)">
        <div class="member">
          <div class="anmal col-md-6">
            <h4>Anmäl ett ärende</h4>
            <form class="" action="member-page.php" method="post">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon">Ärende</span>
                <input type="text-area" class="form-control" placeholder="Typ av skada" name="name">
                <input type="text" class="form-control" placeholder="Stadsdel" name="address">
                <textarea type="text" class="form-control" rows="3" placeholder="Meddelande till reparatör" name="message"></textarea>
              </div>
              <div class="input-group">
                <button type="button" class="btn btn-default" style="color:black;" name="button">Skicka</button>
              </div>
            </form>
          </div>
          <div class="forum col-md-6">
            <h4>Skriv ett inlägg</h4>
            <form class="" action="member-page.php" method="post">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon">Inlägg</span>
                <textarea type="text" rows="5" class="form-control" placeholder="Skriv ditt inlägg" name="name"></textarea>
              </div>
              <div class="input-group">
                <button type="button" class="btn btn-default" style="color:black;" name="button">Skicka</button>
              </div>
            </form>
          </div>
          <div class="anmal col-md-6">
            <h3>Dina aktiva ärenden</h3>
            <table class="table table-bordered">
              <tr>
                Ärendenummer
              </tr>
              <tr>
                Typ av skada
              </tr>
              <tr>
                Stadsdel
              </tr>
              <tr>
                Meddelande
              </tr>
              <tr>
                Status
              </tr>
              <tbody>
                <td>
                  hej
                </td>
                <td>
                  på dig
                </td>
                <td>
                  ha
                </td>
                <td>
                  adfasdf
                </td>
                <td>
asdfasf
                </td>
                <td>
                  adf
                </td>
              </tbody>
            </table>
          </div>
          <div class="forum col-md-6">
            <h3>Foruminlägg</h3>
          </div>
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
