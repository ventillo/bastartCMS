<?

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require './functions.php';
require './dbconnect.php';
if(isset($_GET['delete'])) $site_page_timestamp = $_GET['delete'];

echo "Deleting $site_page_timestamp";
$result_error = delete_site_page($db,$site_page_timestamp);
if(!$result_error) {
  echo "I'll just reheader";
  header("Location: ../?section=site_pages&error=$result_error");
}


?>