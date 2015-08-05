<?
$dbHost     = "127.0.0.1";  //Location Of Database usually its localhost
#$dbUser     = "spotoncz004";   //Database User Name
#$dbPass     = "Aerdna151289";   //Database Password
#$dbDatabase = "spotoncz03"; //Database Name
$dbUser     = "spotoncz005";   //Database User Name
$dbPass     = "Ventil6996";   //Database Password
$dbDatabase = "spotoncz04"; //Database Name

//Connect to the databasse
$db = new mysqli($dbHost, $dbUser, $dbPass, $dbDatabase);

if ($db->mysqli_connect_errno) {
  printf("Connect failed: %s\n", $db->mysqli_connect_error);
  exit();
}
?>