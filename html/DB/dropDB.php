 <?php      
require("DBconfig.php");
$conn = new mysqli(servername, username, password);
$sql = 'DROP DATABASE '.dbname;
$conn->query($sql);
$conn->close();
echo "Drop database!"; 
?>
<br><br>
<a href="createDB.php" >
Create the DB!
</a>