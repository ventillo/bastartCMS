<meta name="description" content="<? site_data($db, 'meta_description'); ?>">
<meta name="keywords" content="<? site_data($db, 'meta_keywords'); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="author" content="<? site_data($db, 'meta_author'); ?>">
<meta http-equiv="Cache-Control" content="no-store">
<link rel="icon" href="./favicon.ico">
<title><? site_data($db, 'meta_description'); ?></title>

<!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="./js/html5shiv.js"></script>
    <script src="./js/respond.min.js"></script>
<![endif]-->

<?

if(isset($_GET['id'])){
  switch ($page) {
    case 'home':
    echo '<link href="./css/cover.css" rel="stylesheet">';
      break;
    default:
    echo '<link href="./css/logo-nav.css" rel="stylesheet">';
  }
}
else{
  echo '<link href="./css/cover.css" rel="stylesheet">';
}

echo '<link href="./css/footer.css" rel="stylesheet">';

?>

<style>
body{
background: url(<? site_data($db,'background'); ?>) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>

