<?

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require './functions.php';
require './dbconnect.php';
if(isset($_GET['delete'])) $username = $_GET['delete'];

echo "Deleting $username";
$result_error = delete_user($db,$username);
if(!$result_error) {
  echo "I'll just reheader";
  header("Location: ../?error=$result_error&action=delete");
}


?>