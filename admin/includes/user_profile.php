<?
if(isset($_GET['user'])){
  $user = $_GET['user'];
  $user_array_info = current_user($db,$user);
  $fname = $user_array_info['fname'];
  $lname =  $user_array_info['lname'];
  $alien = true;
}
?>

<h1 class="page-header">User profile</h1>
<h2 class="sub-header">Current user: <? printf("%s %s (%s)",$fname,$lname,$user); ?></h2>

<form action="./includes/user_modify.php" role="form" method="post">
  <div class="form-group">
    <label for="user">Login / username:</label>
    <input type="text" class="form-control" id="user" name="user" value="<? printf("%s",$user); ?>" disabled>
    <input type="hidden" class="form-control" id="username" name="username" value="<? printf("%s",$user); ?>">
    <? if($alien){ ?><input type="hidden" class="form-control" id="alien" name="alien" value="true"> <? } ?>
    <label for="fname">First Name:</label>
    <input type="text" class="form-control" id="fname" name="fname" value="<? printf("%s",$fname); ?>">
    <label for="lname">Last Name:</label>
    <input type="text" class="form-control" id="lname" name="lname" value="<? printf("%s",$lname); ?>">
    <label for="pass">Password:</label>
    <input type="password" class="form-control" id="pass" name="pass">
    <label for="pass_confirm">Confirm password:</label>
    <input type="password" class="form-control" id="pass_confirm" name="pass_confirm">
    <br>
    <button type="submit" class="btn btn-default">Submit</button>
    <? 
    if (isset($_GET['error'])){ 
      $error = $_GET['error'];
      if ($error == '0') printf('<a href="./?section=user_profile&user=%s"><button type="button" class="btn btn-success">OK</button></a>',$user);
      if ($error != '0') printf('<a href="./?section=user_profile&user=%s"><button type="button" class="btn btn-warning">ERROR: %s</button></a>',$user,$error); 
    }
    ?>
  </div>
</form>