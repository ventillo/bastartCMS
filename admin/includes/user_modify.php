<?

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require './functions.php';
require './dbconnect.php';

if(isset($_POST['username'])) $username = $_POST['username']; 
if(isset($_POST['fname'])) $fname = $_POST['fname'];
if(isset($_POST['lname'])) $lname = $_POST['lname'];
if(isset($_POST['pass'])) $pass = $_POST['pass'];
if(isset($_POST['pass_confirm'])) $pass_confirm = $_POST['pass_confirm'];
if(isset($_POST['alien'])) $alien = $_POST['alien'];

if ($pass != '' && $pass == $pass_confirm){
  echo "Going to modify: $username - $fname - $lname - $pass / $pass_confirm";
  $result = update_user($db,$username,$pass,$fname,$lname);
  if($alien) header("Location: ../?section=user_profile&error=$result&user=$username");
  else header("Location: ../?section=user_profile&error=$result");
}
elseif($pass == ''){
  if($alien) header("Location: ../?section=user_profile&error=Passwords cannot be empty&user=$username");
  else header("Location: ../?section=user_profile&error=Passwords cannot be empty");
}
elseif($pass != $pass_confirm){
  if($alien) header("Location: ../?section=user_profile&error=Passwords do not match&user=$username");
  else header("Location: ../?section=user_profile&error=Passwords cannot be empty");
} 


?>