# devAdmin-users-groups
Environment
   1.Install Docker Desktop (Windows)
   2.Install and enable WSL2
   3.Install your Linux distribution to Ubuntu
   4.Install Windows Terminal
   5. Using both Docker and compose services 

   PHP Version: 7.4.1
   MySQL: 8.0.33  
   Apache/2.4.38
   
Set up
   1. Open Terminal to Ubuntu Tab
   2. Go to the Project folder ( under mnt path ) with docker-compose.yml
   3. Open Docker Desktop
   4. Run "docker compose up"
   5. Define and set up the DB on  DB/DBconfig.php file.
   6. Run the http://localhost/createDB.php
   7. Go to the http://localhost/index.php with the existing users.
   8. Do the users and groups with CRUD functions by creating users or groups
   9. Users paging table and searching 
   
Database
  Database dump could be found on usergroupDB.sql file. 
  Related database manipulation files are under DB folder with createDB.php and dropDB.php files.
  A list view for users already exists is the index.php file.
