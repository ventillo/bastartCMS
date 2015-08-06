<h1 class="page-header">Site Settings</h1>
<h2 class="sub-header"><? site_data($db, 'site_name'); ?></h2>

<form action="./includes/site_modify.php" role="form" method="post">
  <div class="form-group">
    <label for="site_name">Site Name</label>
    <input type="text" class="form-control" id="site_name" name="site_name" value="<? site_data($db, 'site_name'); ?>">
    <label for="site_path">Full path (including the trailing slash, e.g. http://bastart.us/)</label>
    <input type="text" class="form-control" id="site_path" name="site_path" value="<? site_data($db, 'site_path'); ?>">
    <label for="motto">Motto (Displayed beneath Site Name)</label>
    <input type="text" class="form-control" id="motto" name="motto" value="<? site_data($db, 'motto'); ?>">
    <label for="meta_description">Description (Meta - displayed in google search)</label>
    <input type="text" class="form-control" id="meta_description" name="meta_description" value="<? site_data($db, 'meta_description'); ?>">
    <label for="meta_author">Author (Meta)</label>
    <input type="text" class="form-control" id="meta_author" name="meta_author" value="<? site_data($db, 'meta_author'); ?>">
    <label for="meta_keywords">Keywords (Meta)</label>
    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="<? site_data($db, 'meta_keywords'); ?>">
    <label for="background">Background (Full path to background image)</label>
    <input type="text" class="form-control" id="background" name="background" value="<? site_data($db, 'background'); ?>">
  	<a data-toggle="modal"  href="javascript:;" data-target="#bg_browser" class="btn btn-default" type="button">Select</a><br>
    <label for="logo">Logo (Full path to logo 100x100px)</label>
    <input type="text" class="form-control" id="logo" name="logo" value="<? site_data($db, 'logo'); ?>">
  	<a data-toggle="modal"  href="javascript:;" data-target="#logo_browser" class="btn btn-default" type="button">Select</a><br>
    <!-- Bootstrap modal for file manager -->
    <div class="modal fade" id="logo_browser" style="width:100%; margin-left: auto; margin-right:auto;">
    <div class="modal-dialog" style="width: 90%;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">File browser</h4>
        </div>
        <div class="modal-body" style="padding:0px; margin:0px;">
          <iframe width="100%" height="600" src="../filemanager/dialog.php?type=2&field_id=logo'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll;"></iframe>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Bootstrap modal for bg manager -->
    <div class="modal fade" id="bg_browser" style="width:100%; margin-left: auto; margin-right:auto;">
    <div class="modal-dialog" style="width: 90%;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">File browser</h4>
        </div>
        <div class="modal-body" style="padding:0px; margin:0px;">
          <iframe width="100%" height="600" src="../filemanager/dialog.php?type=2&field_id=background'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll;"></iframe>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <button type="submit" class="btn btn-default">Submit</button>
    <? 
    if (isset($_GET['error'])){ 
      $error = $_GET['error'];
      if ($error == '0') printf('<a href="./?section=site_settings"><button type="button" class="btn btn-success">OK</button></a>');
      if ($error != '0') printf('<a href="./?section=site_settings"><button type="button" class="btn btn-warning">ERROR: %s</button></a>',$error); 
    }
    ?>
</form>