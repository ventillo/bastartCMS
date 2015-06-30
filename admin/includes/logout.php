<?
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