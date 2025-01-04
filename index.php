<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Puskesmas Sehat</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="./bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="./css/main.css" rel="stylesheet">
</head>

<body class="index-page">
  <!-- NAVBAR -->
  <header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-cente">
      <?php include_once 'navbar.php'; ?>
    </div>
  </header>

  <!-- HEADER -->
  <main class="main">
    <section id="hero" class="hero section light-background">
    <?php include_once 'header.php'; ?>
    </section>

    <!-- About Section -->
    <section id="about" class="about section light-background">
    <?php 
    $req = $_REQUEST['hal'];

    if(!empty($req)){
      include_once $req.'.php';
    }
    else{
      include_once 'home.php';
    }
    ?>
    </section>
    <!-- /About Section -->

  </main>

  <!-- FOOTER -->
  <footer id="footer" class="footer">
  <?php include_once 'footer.php'; ?>
  </footer>

</body>
</html>