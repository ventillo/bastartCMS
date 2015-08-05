<?

header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

session_start();
if(!$_SESSION['logged']){
    header("Location: ./");
}
else {
  echo $_SESSION['logged'];
  $_SESSION['logged'] = False;
  header("Location: ./?ad=logout");
}
?>