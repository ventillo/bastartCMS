<?
require './functions.php';
require './dbconnect.php';
if(isset($_POST['new_site_page_id'])) $site_page_id = $_POST['new_site_page_id'];

echo "Adding $site_page_id";
$result_error = add_site_page($db,$site_page_id);
if(!$result_error) {
  echo "I'll just reheader";
  header("Location: ../?section=site_pages&error=$result_error&action=add");
}


?>