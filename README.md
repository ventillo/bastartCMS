#bastartCMS
A lightweight CMS based on bootstrap

##INSTALLATION

1. Copy the contents of this directory AS IS to your desired web folder
--------------------------------------------------------------------------------
2. Modify the file Your_web_folder/admin/includes/dbconnect.php to suit your 
   connection details, mostly, these need to be modified:
       
       $dbUser     = "database_username";   //Database User Name
       $dbPass     = "database_password";   //Database Password
       $dbDatabase = "database_name"; //Database Name
--------------------------------------------------------------------------------
3. Go to http://your_site/admin/setup.php
   Observe a lot of debugging messages, but pay attention to the bold and big 
   and RED. Write down the master reset password, you might need it. 
   The initial setup should read: 
   
   TABLE users_table DOES NOT EXIST - Creating...

   And additional tables. If any errors occur, please give me a shout.
--------------------------------------------------------------------------------
4. You're done, now you can login to the ADMIN section with: admin / changeme
   Where you can change the properties of your admin user or create others.
--------------------------------------------------------------------------------
5. It is desireable to fill in the "Site settings" section.
--------------------------------------------------------------------------------