<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<link href="css/main.css" rel="stylesheet" type="text/css">
	</head>
	<body  style="background-color:#A8FFFF;">
		<div class="container">
		<?php
		require("config.php");
		require("include/header.php")
		?>
		</div>
		<br>
		<?php
		$sql = "select * from users";
		$result=$conn->query($sql);
		if ($result->num_rows > 0){			
		?>
		<div id="colvis"></div>
			<table id="myTable" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th onclick="sortTable(0)">userid</th> 
						<th onclick="sortTable(1)">email</th>
						<th onclick="sortTable(2)">name</th>
						<th style="color:grey;"onclick="sortTable(3)">phone</th>
						<th onclick="sortTable(4)">created_by</th>
						<th onclick="sortTable(5)">created_date</th>	
						<th onclick="sortTable(6)">updated_by</th>		
						<th style="color:grey;"onclick="sortTable(7)">updated_date</th>	
						<th style="color:grey;"onclick="sortTable(8)">Groups</th>		
						<th style="color:grey;"> Admin</th>	
						<th style="color:grey;"> Delete</th>			
					</tr>
				</thead>
				<tbody>
				<?php
				while($row = $result->fetch_assoc()){
					$tgroupnamearr="";
					if($row["groupids"]){
						$grouparrv = explode(",",$row["groupids"]);
						$groupnamearr = [];
						if(is_array($grouparrv)){
							foreach( $grouparrv as $k => $v){
								$groupnamearr[] = $grouparr[$v];
							}			
						}else{
							$tgroupnamearr = $row["groupids"];
						}
					$tgroupnamearr = implode(",",$groupnamearr);
					}						
				?>		
					<tr>   
						<td align="center"> <?php echo $row["userid"];?> </td>
						<td align="center"> <?php echo $row["email"];?> </td>
						<td align="center"> <?php echo $row["name"];?> </td>
						<td align="center"> <?php echo $row["phone"];?> </td>		
						<td align="center"> <?php echo $row["created_by"];?> </td>
						<td align="center"> <?php echo $row["created_date"];?> </td>
						<td align="center"> <?php echo $row["updated_by"];?> </td>
						<td align="center"> <?php echo $row["updated_date"];?> </td>		
						<td align="center"> <?php echo $tgroupnamearr?$tgroupnamearr:"";?> </td>
						<td align="center"><a href="CreateUser.php?action=edit&id=<?php echo $row['userid'];?>&username=<?php echo $row['name'];?>">Edit</a></td> 
						<td align="center">
							<form  enctype="multipart/form-data"  method="post" action="index.php">			
								<input id="deleteid" type="number" name="deleteid" value="<?php echo $row["userid"];?>" style="display:none;">			
								<input id="delete" type="submit" value="delete" name="delete"  > 
							</form>
						</td> 				
					</tr>
		<?php
        }
		?>
			</tbody>
		</table>
	<?php      
     }
	 ?>
 </body>
</html>
<?php
If( ISSET($_POST['deleteid']) and ISSET($_REQUEST['delete'])  ){	
    $sql = "DELETE FROM users WHERE userid=".$_REQUEST['deleteid'];	
try{		   	
    $conn->query($sql);
?>
<script>
location.href = "index.php";
</script>
<?php	
}catch (Exception $e){
	header('Location:index.php');	
}	
    mysqli_close($conn);
}
?>
<script>
var count=0;
$(document).ready(function() {
var table = $('#myTable').DataTable();
	$("#myTable thead th").each( function ( i ) {
		var name = table.column( i ).header();
		var spanelt = document.createElement( "button" );
		spanelt.style.padding="5px 25px";
		spanelt.style.color="black";
		spanelt.style.align="center";
		spanelt.innerHTML = name.innerHTML;	
		$(spanelt).addClass("colvistoggle");
		$(spanelt).attr("colidx",i);	
		$(spanelt).on( 'click', function (e) {
			count++;
			e.preventDefault(); 
			var column = table.column( $(this).attr('colidx') );
			column.visible( ! column.visible() );
		});
		$("#colvis").append($(spanelt));
	});
} );
</script>


