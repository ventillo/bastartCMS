<!DOCTYPE html>
<?
session_start();
require './includes/functions.php';
require './includes/dbconnect.php';
$user = $_SESSION['username'];
$user_array_info = current_user($db,$user);
$fname = $user_array_info['fname'];
$lname =  $user_array_info['lname'];
if(isset($_GET['section'])) $section = $_GET['section'];
else $section = 'admin_dashboard';
$baseUrl = 'http://example.com/ckfinder/files/';
?>
<html lang="en">
  <head>     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-store">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Administration section of a BastArt presentation">
    <meta name="author" content="Ventil">
    <link rel="icon" href="../favicon.ico">

    <title>BastArtistic page administration - BACMS</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<? site_data($db, 'site_path'); ?>tinymce/tinymce.min.js"></script>
    <script>
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons | responsivefilemanager ", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],
   image_advtab: true ,
   
   external_filemanager_path:"/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},
   relative_urls: false
 }); 

    </script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">Main Page</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">Dashboard<span class="sr-only">(current)</span></a></li>
            <li><a href="./?section=site_pages">Site Pages</a></li>
            <li><a href="./?section=blog_posts">Blog Posts</a></li>
            <li><a href="./?section=gallery_items">Gallery</a></li>
            <li><a href="./?section=site_settings">Settings</a></li>
            <li><a href="./?section=user_profile">Profile</a></li>
            <li><a href="./?ad=logout"><? echo $user; ?> (LOGOUT)</a></li>
          </ul>
          <!-- <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!-- <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="./">Dashboard<span class="sr-only">(current)</span></a></li>
            
            
            
          </ul> 
          <ul class="nav nav-sidebar">
            <li><a href="">TODO</a></li>
            <li><a href="./">Blog settings</a></li>
            <li><a href="./">Gallery settings</a></li>
            <li><a href="./">Themes?God forbid</a></li>
            <li><a href="./?section=about">About</a></li>
          </ul>
        </div> -->
        <!-- This is where the fun begins -->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <? include './includes/'.$section.'.php'; ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
