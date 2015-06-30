<?
$username = $_POST['username'];
$pass = $_POST['password'];
 
if(isset($_POST['submit'])){
    require './dbconnect.php';
	
	$query = "SELECT * FROM users_table WHERE username = '".$username."' AND password = '".$pass."'";
	
    if($sql = $db->prepare($query)){

      $sql->bind_result($username, $pass, $fname, $lname, $tstamp);
      $sql->execute();
	    $sql->store_result();
    
      // Row count is different for different databases
      // Mysql currently returns the number of rows found
      // this could change in the future.
      if($sql->num_rows() == 1){
        $sql->fetch();
        $sql->close();
		$db->close();
		session_start();
        $_SESSION['username'] = $username;
        $_SESSION['fname']    = $fname;
        $_SESSION['lname']    = $lname;
        $_SESSION['logged']   = TRUE;
        header("Location: ../"); // Modify to go to the page you would like
		exit;
      }else{
	      $sql->close();
		  $db->close();
        header("Location: ../?ad=error_id");
        exit;
      }
	}
}
else{ //If the form button wasn't submitted go to the index page, or login page
    $sql->close();
	  $db->close();
    header("Location: ../?ad=error_post");
    exit;
} 