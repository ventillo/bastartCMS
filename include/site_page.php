    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<? site_data($db, 'site_path'); ?>">
                    <img src="<? site_data($db,'logo'); ?>" name="logo" width="100" height="100">
                </a>
            </div>
            <div class="navbar-brand-text"><a href="<? site_data($db, 'site_path'); ?>"><? site_data($db,'site_name'); ?></a> <br> <? site_data($db, 'motto'); ?></div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <? include "./include/nav_menu.php"; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<!-- Page Content -->
<div class="container textarea">
<div class="row">
<div class="col-lg-12">
<?

$page_blob = static_page($db, $page);
#var_dump($page_blob);
#echo "<h1>".$page_blob["title"]."</h1>";
echo "<h2 class=\"text-left\">".$page_blob["callout"]."</h2>";
echo "<br>";
#echo "<div class=\"container text\">";
echo $page_blob["content"];
#echo "</div>";
?>
</div>
</div>
</div>

