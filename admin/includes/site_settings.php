<h1 class="page-header">Site Settings</h1>
<h2 class="sub-header"><? site_data($db, 'site_name'); ?></h2>

<form action="./includes/site_modify.php" role="form" method="post">
  <div class="form-group">
    <label for="site_name">Site Name</label>
    <input type="text" class="form-control" id="site_name" name="site_name" value="<? site_data($db, 'site_name'); ?>">
    <label for="site_path">Full path</label>
    <input type="text" class="form-control" id="site_path" name="site_path" value="<? site_data($db, 'site_path'); ?>">
    <label for="motto">Motto</label>
    <input type="text" class="form-control" id="motto" name="motto" value="<? site_data($db, 'motto'); ?>">
    <label for="meta_description">Description</label>
    <input type="text" class="form-control" id="meta_description" name="meta_description" value="<? site_data($db, 'meta_description'); ?>">
    <label for="meta_author">Author</label>
    <input type="text" class="form-control" id="meta_author" name="meta_author" value="<? site_data($db, 'meta_author'); ?>">
    <label for="meta_keywords">Keywords</label>
    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="<? site_data($db, 'meta_keywords'); ?>">
    <label for="background">Background</label>
    <input type="text" class="form-control" id="background" name="background" value="<? site_data($db, 'background'); ?>">
    <label for="logo">Logo</label>
    <input type="text" class="form-control" id="logo" name="logo" value="<? site_data($db, 'logo'); ?>">
    <br>
    <button type="submit" class="btn btn-default">Submit</button>
    <? 
    if (isset($_GET['error'])){ 
      $error = $_GET['error'];
      if ($error == '0') printf('<a href="./?section=site_settings"><button type="button" class="btn btn-success">OK</button></a>');
      if ($error != '0') printf('<a href="./?section=site_settings"><button type="button" class="btn btn-warning">ERROR: %s</button></a>',$error); 
    }
    ?>
</form>