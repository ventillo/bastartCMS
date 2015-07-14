<!DOCTYPE html>
<?
require './includes/dbconnect.php';
require './includes/functions.php';
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
?>
<div><a href="./">Back to ADMIN section</div>
</div>
</body
</html>