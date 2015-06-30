<? 
$all_site_pages = list_site_pages($db);
if(isset($_GET['error'])) $error = $_GET['error'];

?>


<h2 class="sub-header">Users</h2>
<div class="table-responsive">
  <table class="table table-striped">
  <thead>
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Callout</th>
    <th>Description (meta)</th>
    <th>Keywords (meta)</th>
    <th>Date / Time</th>
    <th>Delete</th>
  </tr>
  </thead>
  <tbody>
  <? 
    foreach($all_site_pages as $site_page_row){
      echo "<tr>" ;
      echo "<td><a href=\"./?section=site_pages_editor&site_page=$site_page_row->id\">$site_page_row->id</a></td>";
      echo "<td>$site_page_row->title</td>"; 
      echo "<td>$site_page_row->callout</td>"; 
      echo "<td>$site_page_row->meta_description</td>"; 
      echo "<td>$site_page_row->meta_keywords</td>"; 
      echo "<td>$site_page_row->timestamp</td>";
      echo "<td><a href=\"./includes/site_pages_delete.php?delete=$site_page_row->id\">Delete</a></td>";
      echo "</tr>" ;  
    }
?>
</tbody>
</table>
<? 
 if (isset($_GET['error'])){ 
   $error = $_GET['error'];
   if ($error == '0') printf('<a href="./?section=site_pages"><button type="button" class="btn btn-success">OK</button></a>');
   if ($error != '0') printf('<a href="./?section=site_pages"><button type="button" class="btn btn-warning">ERROR: %s</button></a>',$error); 
 }
?>
<form action="./includes/site_pages_add.php" role="form" method="post">
  <div class="form-group">
    <label for="new_site_page_id">New Page ID:</label>
    <input type="text" class="form-control" id="new_site_page_id" name="new_site_page_id" value="">
    <br>
    <button type="submit" class="btn btn-default">Add New Static site</button>
  </div>
</form>
</div>

        