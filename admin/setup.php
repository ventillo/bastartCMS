<?
include './includes/functions.php'

if(table_exists($db,'users_table')){
  echo OK;
}

#echo table_exists('users_table');
#echo table_exists('static_pages');
#echo table_exists('site_config');
#echo table_exists('blog_posts');
#echo table_exists('blog_config');

?>