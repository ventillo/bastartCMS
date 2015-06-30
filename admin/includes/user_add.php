<?
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