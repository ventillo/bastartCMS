<?

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require './functions.php';
require './dbconnect.php';
if(isset($_POST['new_username'])) $username = $_POST['new_username'];

echo "Adding $username";
$result_error = add_user($db,$username);
if(!$result_error) {
  echo "I'll just reheader";
  header("Location: ../?error=$result_error&action=add");
}


?>