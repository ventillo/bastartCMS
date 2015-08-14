<?
  $all_site_pages = list_site_pages($db);
  foreach($all_site_pages as $site_page_row){
      echo "<li>" ;
      if ($page == $site_page_row->id) echo "<a href=\"./$site_page_row->id\" style=\"border-bottom:3px solid #900;\">$site_page_row->title</a>"; 
      else echo "<a href=\"./$site_page_row->id\">$site_page_row->title</a>";      
      echo "</li>";  
  }
?>


