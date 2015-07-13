<?
#dbconnect has to be called from the original file, this uses the already defined handles in dbconnect.php

function add_footer_login_links($logged_local,$username_local){
  if($logged_local) printf("Logged in %s (<a href=\"./admin/?ad=logout\">LOGOUT</a>)", $username_local); 
  printf(" :: Admin <a href=\"./admin/\">LOGIN</a>");
}
function site_data($db, $field){
  $query = "SELECT * FROM site_config";
  if($sql = $db->prepare($query)){
    #var_dump($sql);
    $sql->bind_result($site_path, $site_name, $motto, $background, $logo, $meta_author, $meta_keywords, $meta_description);
    $sql->execute();
    $sql->store_result();
    $sql->fetch();
  }
  $sql->close();
  switch($field){
  case 'site_name': 
    printf($site_name); 
    break;
  case 'site_path': 
    printf($site_path); 
	  break;
  case 'motto': 
    printf($motto); 
	  break;
  case 'background': 
    printf($background); 
	  break;
  case 'logo': 
    printf($logo); 
	  break;
  case 'meta_author': 
    printf($meta_author); 
	  break;
  case 'meta_keywords': 
    printf($meta_keywords); 
	  break;
  case 'meta_description': 
    printf($meta_description); 
	  break;
  }
}  

function static_page($db, $static_page_id){
  $query =  "SELECT * FROM static_pages WHERE id='$static_page_id' LIMIT 1"; 
  if($sql = $db->prepare($query)){
    #var_dump($sql);
    $sql->bind_result($id, $timestamp, $title, $callout, $meta_description, $meta_keywords, $content);
    $sql->execute();
    $sql->store_result();
    $sql->fetch();
  }
  $sql->close();
  return array('id'=>$id, 'timestamp'=>$timestamp, 'title'=>$title, 'callout'=>$callout, 'meta_description'=>$meta_description, 'meta_keywords'=>$meta_keywords, 'content'=>$content);
}


#return values are UNIX like. 0 is a good thing. Or in other words, returns 0 on success. Logical, but kinda messy for development though...
function update_user($db,$username,$password,$first_name,$last_name){
  $query = "UPDATE users_table SET password='$password', first_name='$first_name', last_name='$last_name', timestamp=NOW() WHERE username='$username' LIMIT 1";
  echo "<br>".$query."<br>";
  $result = "Error by default";
  if($db->query($query) === TRUE){
    echo "OK<br>";
    $result = 0;
    echo $result;
  }
  var_dump($db);
  $db = null;
  return $result; 
}

function update_site($db,$site_path,$site_name,$motto,$background,$logo,$meta_author,$meta_author,$meta_keywords,$meta_description){
  $query = "UPDATE site_config SET site_path='$site_path', site_name='$site_name', motto='$motto', background='$background', logo='$logo', meta_author='$meta_author', meta_author='$meta_author', meta_keywords='$meta_keywords', meta_description='$meta_description' LIMIT 1";
  echo "<br>".$query."<br>";
  $result = "Error by default";
  if($db->query($query) === TRUE){
    echo "OK<br>";
    $result = 0;
    echo $result;
  }
  var_dump($db);
  $db = null;
  return $result; 
}

function update_site_page($db,$id,$timestamp,$title,$callout,$meta_description,$meta_keywords,$content){
  $query = "UPDATE static_pages SET id='$id',timestamp='$timestamp',title='$title',callout='$callout',meta_description='$meta_description',meta_keywords='$meta_keywords',content='$content' WHERE timestamp='$timestamp'";
  echo "<br>".$query."<br>";
  $result = "Error by default";
  if($db->query($query) === TRUE){
    echo "OK<br>";
    $result = 0;
    echo $result;
  }
  var_dump($db);
  $db = null;
  return $result; 
}

function current_user($db,$username){
  $query = "SELECT password, first_name, last_name FROM users_table WHERE username='$username'";
  if($sql = $db->prepare($query)){
    $sql->bind_result($password,$first_name,$last_name);
    $sql->execute();
    $sql->store_result();
    $sql->fetch();
  }else 
  $sql->close();
  return array ('username' => $username, 'password' => $password, 'fname' => $first_name, 'lname' => $last_name); 
}

function current_site_page($db,$id){
  $query = "SELECT * FROM static_pages WHERE id='$id'";
  if($sql = $db->prepare($query)){
    $sql->bind_result($id,$timestamp,$title,$callout,$meta_desc,$meta_keywords,$content);
    $sql->execute();
    $sql->store_result();
    $sql->fetch();
  }else 
  $sql->close();
  return array ('id' => $id, 'timestamp' => $timestamp, 'title' => $title, 'callout' => $callout, 'meta_description' => $meta_desc, 'meta_keywords' => $meta_keywords, 'content' => $content); 

}

function list_users($db){
  $query =  "SELECT * FROM users_table"; 
  if($result = $db->query($query)){
  $row_num = 1;
    while ($row = $result->fetch_object()){
      $user_table[$row_num] = $row;
      $row_num++;
    }
  }
  $db = null;
  return $user_table;  
}

function list_site_pages($db){
  $query =  "SELECT * FROM static_pages"; 
  if($result = $db->query($query)){
  $row_num = 1;
    while ($row = $result->fetch_object()){
      $user_table[$row_num] = $row;
      $row_num++;
    }
  }
  $db = null;
  return $user_table;  
}

function add_user($db,$username){
  $query = "INSERT INTO users_table VALUES ( '$username', 'xxx', '', '', NOW())";
  echo "<br>".$query."<br>";
  $result = "Error by default";
  if($db->query($query) === TRUE){
    echo "OK<br>";
    $result = 0;
    echo $result;
  }
  var_dump($db);
  $db = null;
  return $result;
}

function add_site_page($db,$site_page_id){
  $query = "INSERT INTO static_pages VALUES ( '$site_page_id', NOW() , '$site_page_id', '', '', '', '')";
  echo "<br>".$query."<br>";
  $result = "Error by default";
  if($db->query($query) === TRUE){
    echo "OK<br>";
    $result = 0;
    echo $result;
  }
  var_dump($db);
  $db = null;
  return $result;
}

function delete_user($db,$username){
  $query = "DELETE FROM users_table WHERE username='$username' LIMIT 1";
  echo "<br>".$query."<br>";
  $result = "Error by default";
  if($db->query($query) === TRUE){
    echo "OK<br>";
    $result = 0;
    echo $result;
  }
  var_dump($db);
  $db = null;
  return $result;
}
function delete_site_page($db,$id){
  $query = "DELETE FROM static_pages WHERE id='$id' LIMIT 1";
  echo "<br>".$query."<br>";
  $result = "Error by default";
  if($db->query($query) === TRUE){
    echo "OK<br>";
    $result = 0;
    echo $result;
  }
  var_dump($db);
  $db = null;
  return $result;
}

function table_exists($table){
  $query = "SHOW TABLES LIKE '$table'";
  if($result = $db->query($query)){
    $row_num = $result->num_rows;
  }
  $db = null;
  if($row_num == 1) return true;
  else return false; 
}

?>