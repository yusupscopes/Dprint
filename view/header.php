<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Dprint - Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style media="screen">
    #map{
      height: 400px;
      width: auto;
      background: grey;
    }
    #h2lokasi{
      margin-top: 0;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo">Dprint</a>
        <ul class="right hide-on-med-and-down">
          <?php if( !isset($_SESSION['user']) ){ ?>
            <li><a href="lokasi.php">Lokasi</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li>
          <?php }else{ ?>
            <li><a href="lokasi.php">Lokasi</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php } ?>

        </ul>
          <ul id="nav-mobile" class="side-nav">
              <li><a href="lokasi.php">Lokasi</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="login.php">Login</a></li>
          </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
