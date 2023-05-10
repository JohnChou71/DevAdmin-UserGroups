<?php
If(ISSET($_POST['submit']) || ISSET($_POST['update'])){
	$groupname = "";
	$created_date = date ('Y-m-d H:i:s');
if(ISSET($_POST['email'])){
	$email =$_POST['email'];
}
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$created_by = $_POST['created_by'];
if(ISSET($_POST['group'])){
	$group = $_POST['group'];
	if(is_array($group)):
	    foreach($group as $k=>$v){
		   $groupname = $grouparr[ $v ]."</BR>".$groupname;
		}
	$group = implode(",",$group);
	else:
	$group = $_POST['group']; 
	$groupname = $grouparr[ $group ];
	endif;
}else{
	$group='';	
}
$groupname = "Group: </BR>".$groupname;
if( ISSET( $_POST['submit']) ){	
	$sql = "INSERT INTO users (groupids, email, name, phone, created_by,created_date,updated_by,updated_date )
           VALUES ('$group','$email','$name','$phone','$created_by','$created_date','$created_by','$created_date' )";
}
if( ISSET( $_POST['update'] ) and ISSET($_REQUEST['id']) ){
?>
<script>
document.getElementById("created_by_label").innerHTML="updated_by";
document.getElementById("submit").style.display = "none";
document.getElementById("update").style.display = "block";
</script>
<?php
$user_id= $_REQUEST['id'];
$sql = "Update users set groupids='$group', name='$name',
  phone='$phone', updated_by='$created_by' where userid='$user_id' ";  
}
try{		   
    $conn->query($sql);
?>	
<script>
var groupsnames = "<?php echo $groupname; ?>";
if(document.getElementById("grouptext") !==null ){
	document.getElementById("grouptext").innerHTML = groupsnames;	
}
document.getElementById("submit").value="Insert User successfully!";
document.getElementById("update").value="Update User successfully!";		
document.getElementById("submit").disabled = true;
</script>
<?php	
}catch (Exception $e){
?>
<script>
document.getElementById("submit").value="User Exists! Please try again!";
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
	if($k=="submit" || $k=="group" ){ continue; }	
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
If(ISSET($_REQUEST['action']) and $_REQUEST['action']='edit' and !ISSET($_POST['update']) ){
$sql = "select * from users where userid=".$_REQUEST['id'];
$result=$conn->query($sql);
	if($result->num_rows > 0){
	 while($row = $result->fetch_assoc()){
?>
<script>
document.getElementById("email").value="<?php echo $row['email']; ?>";
	document.getElementById("email").readOnly  = true;
	document.getElementById("submit").style.display = "none";
	document.getElementById("update").style.display = "block";
document.getElementById("created_by_label").innerHTML="updated_by";
</script>
<?php			
		}
	}	
}
?>
