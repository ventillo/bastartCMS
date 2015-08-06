<div class="site-wrapper">
<div class="site-wrapper-inner">
<div class="cover-container">
<div class="masthead clearfix">
  <div class="inner-brand">
  
    <div class="masthead-brand">
      <div class="logo">
        <a href="<? site_data($db, 'site_path'); ?>"><img src="<? site_data($db,'logo'); ?>" name="logo" width="100" height="100"></a>
      </div>
      <div class="brand">
        <h3><a href="<? site_data($db, 'site_path'); ?>"><? site_data($db,'site_name'); ?></a></h3>
        <h5><? site_data($db, 'motto'); ?></h5>
      </div>
      <br style="clear:both;">
    </div>
  
  <nav class="menu">
    <ul class="nav masthead-nav brand">
    <? include './include/nav_menu.php'; ?>
  </nav>
  </div>
  </div>
  <div class="inner cover" style="scrolling:auto;">
    <h1 class="cover-heading"><? echo $page; ?></h1><p class="lead">Lorem</p><p class="lead">Fixum</p>
  </div>
  </div>
</div>
</div>