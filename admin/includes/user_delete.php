<?
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