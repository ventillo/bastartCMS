<?
require './functions.php';
require './dbconnect.php';

if(isset($_POST['site_path'])) $site_path = $_POST['site_path']; 
if(isset($_POST['site_name'])) $site_name = $_POST['site_name'];
if(isset($_POST['motto'])) $motto = $_POST['motto'];
if(isset($_POST['background'])) $background = $_POST['background'];
if(isset($_POST['logo'])) $logo = $_POST['logo'];
if(isset($_POST['meta_author'])) $meta_author = $_POST['meta_author'];
if(isset($_POST['meta_keywords'])) $meta_keywords = $_POST['meta_keywords'];
if(isset($_POST['meta_description'])) $meta_description = $_POST['meta_description'];

if ($site_path != ''){
  echo "Going to modify: $site_path $site_name $motto $background $logo $meta_author $meta_author $meta_keywords $meta_description";
  $result = update_site($db,$site_path,$site_name, $motto, $background, $logo, $meta_author, $meta_author, $meta_keywords, $meta_description);
  header("Location: ../?section=site_settings&error=$result");
}
elseif($pass == ''){
  header("Location: ../?section=site_settings&error=URL_empty");
}

?>