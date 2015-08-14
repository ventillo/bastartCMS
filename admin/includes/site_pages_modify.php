<?

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require './functions.php';
require './dbconnect.php';

if(isset($_POST['id'])) $id = $_POST['id']; 
if(isset($_POST['timestamp'])) $timestamp = $_POST['timestamp'];
if(isset($_POST['title'])) $title = $_POST['title'];
if(isset($_POST['callout'])) $callout = $_POST['callout'];
if(isset($_POST['meta_description'])) $meta_description = $_POST['meta_description'];
if(isset($_POST['meta_keywords'])) $meta_keywords = $_POST['meta_keywords'];
if(isset($_POST['content'])) $content = $_POST['content'];


  echo "Going to modify: $id,$timestamp,$title,$callout,$meta_description,$meta_keywords,$content";
  $result = update_site_page($db,$id,$timestamp,$title,$callout,$meta_description,$meta_keywords,$content);
  header("Location: ../?section=site_pages_editor&error=$result&site_page=$id");




?>