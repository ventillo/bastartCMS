<?

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

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