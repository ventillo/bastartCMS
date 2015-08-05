<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<? 
  session_start();
  require './admin/includes/functions.php';
  require './admin/includes/dbconnect.php';
  $page = $_GET['id'];
  $logged = $_SESSION['logged'];
  $username = $_SESSION['username'];
?>
<head>
<? require './include/html_header.php'; ?>
</head>

<body>
<? 
#---------------------Site body begins here-------------------------------------

if(isset($_GET['id'])){
  switch ($page) {
    case 'home':
      include './include/home.php';
      break;
    default:
      include './include/site_page.php';
  }
}
else{
  include './include/home.php'; // landing page
}
#-----------Footer begins here--------------------------------------------------
require './include/footer.php'; 

?>
</body>
</html>
