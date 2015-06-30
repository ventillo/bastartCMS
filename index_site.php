<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="">
<? 
  session_start();
  require './admin/includes/functions.php';
  require './admin/includes/dbconnect.php';
  $page = $_GET['id'];
  $logged = $_SESSION['logged'];
  $username = $_SESSION['username'];
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<? site_data($db, 'meta_description'); ?>">
    <meta name="author" content="<? site_data($db, 'meta_author'); ?>">
    <meta name="keywords" content="<? site_data($db, 'meta_keywords'); ?>">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title><? site_data($db, 'meta_description'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/cover_mod.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9] -->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- [endif]-->
  </head>
<style>
body{
background: url(../img/<? site_data($db,'background'); ?>) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
          <div class="masthead clearfix">
            <div class="inner_masthead">
            <div class="masthead-brand">
              <div class="logo">
                <a href="<? site_data($db, 'site_path'); ?>"><img src="./img/<? site_data($db,'logo'); ?>" name="logo" width="100" height="100"></a>
              </div>
              <div class="brand">
                <h3><a href="<? site_data($db, 'site_path'); ?>"><? site_data($db,'site_name'); ?></a></h3>
                <h5><? site_data($db, 'motto'); ?></h5>
              </div>
            </div>  
            <nav>
              <ul class="nav masthead-nav" style="float:right;border:1px solid white;">
                <li><a href="./blog">Blog</a></li>
                <li><a href="./work">Work</a></li>
                <li><a href="./darkroom">Darkroom</a></li>
                <li><a href="./booking">Booking</a></li>
                <li><a href="./photoedge">Offer / Nabídka</a></li>
                <li><a href="./contact">Contact</a></li>
              </ul>
            </nav>
            </div>
          </div>
         <div>          
          <div class="inner cover">
            <br>
            <img src="./img/bastart_logo_big.png"> <br> <br>
            <p class="lead">A different kind of Photography</p>
            <br>
            <p class="lead">
              <!-- <a href="#" class="btn btn-lg btn-default">Need more!</a> -->
            </p>
          </div>
          </div>
          <div class="mastfoot">
            <div class="inner">
              <p>SpotOn s.r.o.</p>
              <p>Štefánikova 59, 61200 Brno</p>
              <p>IC: 292 512 81 / DIC: CZ 292 512 81</p>
            </div>
          </div>
       </div>
    </div>
 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
