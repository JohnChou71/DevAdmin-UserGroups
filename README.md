# devAdmin-users-groups
Environment ( Two different ways )
  a)By LAMP stack server
    Jsut copy the html folder files
  b)By Docker
    1.Install Docker Desktop (Windows)
    2.Install and enable WSL2
    3.Install your Linux distribution to Ubuntu
    4.Install Windows Terminal
    5. Using both Docker and compose services 
    6. Open Terminal to Ubuntu Tab
    7. Go to the Project folder ( under mnt path ) with docker-compose.yml
    8. Open Docker Desktop
    9. Run "docker compose up"

   PHP Version: 7.4.1
   MySQL: 8.0.33  
   Apache/2.4.38
   
Set up
   1. Define and set up the DB on  DB/DBconfig.php file.
   2. Run the http://localhost/createDB.php
   3. Go to the http://localhost/index.php with the existing users.
   4. Do the users and groups with CRUD functions by creating users or groups
   5. Users paging table and searching 
   
Demo pages
  http://localhost/index.php
  http://localhost/CreateUser.php
  http://localhost/CreateGroup.php
  http://localhost:5000/ ( only Docker )
  
Database
  http://localhost:5000/ ( only Docker )
  Database dump could be found on usergroupDB.sql file. 
  Related database manipulation files are under DB folder with createDB.php and dropDB.php files.
  A list view for users already exists is the index.php file.
  
