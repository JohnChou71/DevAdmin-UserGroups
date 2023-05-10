 <?php      
require("DBconfig.php");
$conn = new mysqli(servername, username, password);
$sql = "CREATE DATABASE IF NOT EXISTS ".dbname;
if($conn->query($sql) === TRUE){
	echo "Database created successfully";
	$conn = new mysqli(servername, username, password, dbname);
}else{
	echo "Error creating database: " . $conn->error;
}
#create user table
mysqli_set_charset($conn,"utf8");
$sql="ALTER DATABASE ".dbname." CHARACTER SET utf8 COLLATE utf8_general_ci";
$conn->query($sql);
$sql = "CREATE TABLE IF NOT EXISTS users (
	userid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	groupids VARCHAR(255),
	email VARCHAR(150) NOT NULL,
	name VARCHAR(50) NOT NULL,
	phone VARCHAR(50) NOT NULL,
	created_by INT(11) NOT NULL,
	created_date DATETIME NOT NULL,
	updated_by INT(11) NOT NULL,
	updated_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);
$sql="ALTER TABLE users ENGINE = InnoDB";
$conn->query($sql);
$sql="ALTER TABLE users MODIFY COLUMN groupids VARCHAR(255) COLLATE utf8mb4_bin;";
$conn->query($sql);
$sql = "CREATE UNIQUE INDEX IF NOT EXISTS email ON users (email)";
$conn->query($sql);
#create group table
$sql = "CREATE TABLE IF NOT EXISTS allgroups (
	groupid SMALLINT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	groupname VARCHAR(100) NOT NULL,
	created_by INT(11) NOT NULL,
	created_date DATETIME NOT NULL,
	updated_by INT(11) NOT NULL,
	updated_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);
$sql="ALTER TABLE allgroups ENGINE = InnoDB";
$conn->query($sql);
$sql = "CREATE UNIQUE INDEX IF NOT EXISTS groupname ON allgroups (groupname)";
$conn->query($sql);
#create allgroups
$sql = "INSERT INTO allgroups ( groupname, created_by,created_date,updated_by,updated_date )
     VALUES ('admin', '1','2019-02-01','1','2020-05-01')";
$conn->query($sql);
$sql = "INSERT INTO allgroups ( groupname, created_by,created_date,updated_by,updated_date )
     VALUES ('editor', '1','2019-02-01','1','2020-05-01')";
$conn->query($sql);
$sql = "INSERT INTO allgroups ( groupname, created_by,created_date,updated_by,updated_date )
     VALUES ('user', '1','2019-02-01','1','2020-05-01')";
$conn->query($sql);
#create users
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('admin@gmail.com','1', 'admin','6471235678','1','2019-01-01','1','2020-02-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Auser@gmail.com','3', 'userA','6477777777','1','2020-01-01','1','2021-02-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Aeditor@gmail.com','2','editorA','6478888888','1','2020-02-01','1','2021-03-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Buser@gmail.com','3','userB','6477777777','1','2020-01-01','1','2021-02-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Beditor@gmail.com','2','editorB','6478888888','1','2020-02-01','1','2021-03-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Cuser@gmail.com','3','userC','6477777777','1','2020-01-01','1','2021-02-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Ceditor@gmail.com','2','editorC','6478888888','1','2020-02-01','1','2021-03-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Duser@gmail.com','3','userD','6477777777','1','2020-01-01','1','2021-02-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Deditor@gmail.com','2','editorD','6478888888','1','2020-02-01','1','2021-03-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Euser@gmail.com','3','userE','6477777777','1','2020-01-01','1','2021-02-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Eeditor@gmail.com','2','editorE','6478888888','1','2020-02-01','1','2021-03-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Fuser@gmail.com','3','userF','6477777777','1','2020-01-01','1','2021-02-01')";
$conn->query($sql);
$sql = "INSERT INTO users ( email, groupids, name, phone, created_by,created_date,updated_by,updated_date )
     VALUES ('Feditor@gmail.com','2','editorF','6478888888','1','2020-02-01','1','2021-03-01')";
$conn->query($sql);
#close
$conn->close();
?>
	
	
	