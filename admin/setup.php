<!DOCTYPE html>
<?
require './includes/dbconnect.php';
require './includes/functions.php';
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.bastart.us/favicon.ico">

    <title>Initial setup</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">

    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
<?

if(table_exists($db,'users_table')) echo "<h2>TABLE users_table EXISTS!</h2><br>" ;
else {
  echo "<h2>TABLE users_table DOES NOT EXIST - Creating...</h2><br>" ;
  create_table($db,'users_table','username VARCHAR(50), password TEXT, first_name VARCHAR(50), last_name VARCHAR(50), timestamp DATE');
  add_user($db,'admin');
  $password = substr(hash('sha512',rand()),0,12);
  add_user($db,"reset_$password");
  echo "<h2 style=\"color:red;\">Your reset password is: reset_$password (write it down, it will not be displayed again)</h2>";
}
if(table_exists($db,'static_pages')) echo "<h2>TABLE static_pages EXISTS!</h2><br>" ;
else {
  echo "<h2>TABLE static_pages DOES NOT EXIST - Creating...</h2><br>" ;
  create_table($db,'static_pages','id varchar(128), timestamp timestamp, title text, callout text, meta_description text, meta_keywords text, content text');
}
if(table_exists($db,'site_config')) echo "<h2>TABLE site_config EXISTS!</h2><br>";
else {
  echo "<h2>TABLE site_config DOES NOT EXIST - Creating...</h2><br>" ;
  create_table($db,'site_config','site_path text, site_name text, motto text, background text, logo text, meta_author text, meta_keywords text, meta_description text');
}
if(table_exists($db,'blog_posts')) echo "<h2>TABLE blog_posts EXISTS!</h2><br>" ;
else {
  echo "<h2>TABLE blog_posts DOES NOT EXIST - Creating...</h2><br>" ;
  create_table($db,'blog_posts','title text, date timestamp, text text, author text, category text');
}
if(table_exists($db,'blog_config')) echo "<h2>TABLE blog_config EXISTS!</h2><br>";
else {
  echo "<h2>TABLE blog_config DOES NOT EXIST - Creating...</h2><br>" ;
  create_table($db,'blog_config','title text, callout text, meta_description text, met_keywords text');
}
if($_GET['reset']){
  $reset_user = $_POST['password'];
  $reset_user_from_db = get_reset_user($db,$reset_user);
  echo "$reset_user = $reset_user_from_db";
  if($reset_user == $reset_user_from_db){ #echo "$reset_user = $reset_user_from_db"; 
    drop_config($db);
    echo "DATABASE DROPPED, all settings wiped";
  } 
}
?>
<div><a href="./">Back to ADMIN section</a></div>
<form class="form-signin" action="setup.php?reset=1" method="post">
  <h2 class="form-signin-heading"><? echo $ad_message; ?></h2>
  <label for="inputPassword" class="sr-only">Reset Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Reset</button>
</form>

</div>
</body
</html>