<?
if(isset($_GET['site_page'])){
  $id = $_GET['site_page'];
  $site_page_array_info = current_site_page($db,$id);
  $current_site_page_timestamp = $site_page_array_info['timestamp'];
  $title =  $site_page_array_info['title'];
  $current_site_page_timestamp = $site_page_array_info['timestamp'];
  $callout = $site_page_array_info['callout'];
  $meta_description = $site_page_array_info['meta_description'];
  $meta_keywords = $site_page_array_info['meta_keywords'];
  $content = $site_page_array_info['content']; 
  #var_dump($site_page_array_info);
}
?>

<h1 class="page-header">Static page editor</h1>
<h2 class="sub-header"><? echo $title; ?></h2>

<form action="./includes/site_pages_modify.php" role="form" method="post">
  <div class="form-group">
    <label for="id">Id</label>
    <input type="text" class="form-control" id="id" name="id" value="<? echo $id; ?>">
    <label for="timestamp">Created</label>
    <input type="text" class="form-control" id="timestamp_disp" name="timestamp_disp" value="<? echo $current_site_page_timestamp; ?>" disabled>
    <input type="hidden" class="form-control" id="timestamp" name="timestamp" value="<? echo $current_site_page_timestamp; ?>">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<? echo $title; ?>">
    <label for="callout">Callout</label>
    <input type="text" class="form-control" id="callout" name="callout" value="<? echo $callout; ?>">
    <label for="meta_description">Description (meta)</label>
    <input type="text" class="form-control" id="meta_description" name="meta_description" value="<? echo $meta_description; ?>">
    <label for="meta_keywords">Keywords (meta)</label>
    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="<? echo $meta_keywords; ?>">
    <label for="content">Content</label>
    <textarea type="text" class="form-control" id="content" name="content" rows="10"><? echo $content; ?></textarea>
    <br>
    <button type="submit" class="btn btn-default">Submit</button>
    <? 
    if (isset($_GET['error'])){ 
      $error = $_GET['error'];
      if ($error == '0') printf('<a href="./?section=site_pages_editor&site_page=%s"><button type="button" class="btn btn-success">OK</button></a>',$id);
      if ($error != '0') printf('<a href="./?section=site_pages_editor&site_page=%s"><button type="button" class="btn btn-warning">ERROR: %s</button></a>',$id,$error); 
    }
    ?>
</form>