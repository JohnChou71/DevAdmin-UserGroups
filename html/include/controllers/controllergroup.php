<?php
If(ISSET($_POST['submit'])){
require("config.php");
$created_date = date ('Y-m-d H:i:s');
$groupname = $_POST['groupname'];
$created_by = $_POST['created_by'];
$sql = "INSERT INTO allgroups (groupname, created_by,created_date,updated_by,updated_date)
           VALUES ( '$groupname' , '$created_by' , '$created_date' ,'$created_by','$created_date')";	  
try{		   
    $conn->query($sql);
?>	
<script>
	document.getElementById("submit").value="Insert Group successfully!";
	document.getElementById("submit").disabled = true;	
</script>	
<?php	
}catch (Exception $e){
?>
<script>
document.getElementById("submit").value="Group Exists! Please try again!";
	document.getElementById("submit").disabled = true;
</script>
<?php
}
?>
<script>
function insertok(k="",v=""){
	if( !v || !k ){return;}
	document.getElementById(k).value=v;
	document.getElementById(k).readOnly = true;
	document.getElementById(k).disabled = true;
}
<?php
foreach($_POST as $k => $v){
	if($k=="submit"){ continue; }
?>
var k="<?php echo $k; ?>";
var v="<?php echo $v; ?>";
insertok(k,v);
<?php
}
?>
</script>
<?php
mysqli_close($conn);
}
?>
