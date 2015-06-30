<? 
$all_users = list_users($db);
if(isset($_GET['error'])) $error = $_GET['error'];
?>


<h2 class="sub-header">Users</h2>
<div class="table-responsive">
  <table class="table table-striped">
  <thead>
  <tr>
    <th>Username</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  <? 
    foreach($all_users as $user_row){
      echo "<tr>" ;
      echo "<td>$user_row->username</td><td><a href=\"./includes/user_delete.php?delete=$user_row->username\" name=\"Delete\">Delete</a> / <a href=\"./?section=user_profile&user=$user_row->username\">Edit</a></td>"; 
      echo "</tr>" ;  
    }
?>
</tbody>
</table>
<? 
 if (isset($_GET['error'])){ 
   $error = $_GET['error'];
   if ($error == '0') printf('<button type="button" class="btn btn-success"><a href="./">OK</a></button>');
   if ($error != '0') printf('<button type="button" class="btn btn-warning"><a href="./">ERROR: %s</a></button>',$error); 
 }
?>
<form action="./includes/user_add.php" role="form" method="post">
  <div class="form-group">
    <label for="new_username">New Username:</label>
    <input type="text" class="form-control" id="new_username" name="new_username" value="">
    <br>
    <button type="submit" class="btn btn-default">Add User</button>
  </div>
</form>
</div>

 <h1 class="page-header">Dashboard</h1>
   <div class="row placeholders">
    <div class="col-xs-6 col-sm-3 placeholder">
      <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
      <h4>Label</h4>
      <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
      <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
      <h4>Label</h4>
      <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
      <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
      <h4>Label</h4>
      <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
      <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
      <h4>Label</h4>
      <span class="text-muted">Something else</span>
    </div>
  </div>

        