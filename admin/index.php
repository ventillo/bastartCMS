<?
session_start();
if($_GET['ad'] == '') $ad_message = "Please Log in";
if($_GET['ad'] == 'error_id') $ad_message = "Wrong login / password";
if($_GET['ad'] == 'error_post') $ad_message = "Trouble loging in";
$logged = $_SESSION['logged'];

if($_GET['ad'] == 'logout'){ 
  $ad_message = "Logged out";
  $logout = true;
}


if(!$logged){
    require './includes/login.php';
    exit;
}
if($logged){
  if($logout) require './includes/logout.php';
  else require './admin_index.php';
  exit;
}
?>
