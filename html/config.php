<?php
date_default_timezone_set('America/Toronto');
require("DB/DBconfig.php");
$conn = new mysqli(servername, username, password,dbname);
$sql = "select * from allgroups";
try{		   
	$result=$conn->query($sql);
	$grouparr=[];
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$grouparr[$row["groupid"]] = $row["groupname"];
		}	
	}
}catch(Exception $e){
	echo "Please create DB by 'DB/CreateDB.php' ";
}
?>
