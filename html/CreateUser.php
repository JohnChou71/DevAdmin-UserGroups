<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<?php require("config.php"); ?>
		<script>
		var  grouparrJS='<?php echo json_encode($grouparr); ?>';
		var grouparrjs = JSON.parse(grouparrJS);
		</script>
		<link href="css/main.css" rel="stylesheet" type="text/css">
	</head>
	<body  style="background-color:#A8FFFF;">
		<div class="container">
		<?php require("include/header.php") ?>
		</div>
			<form  enctype="multipart/form-data" id="form_id" method="post" action="">
				<fieldset style="padding: 1px 1px 1px 1px; background-color:#A8FFFF;">
					<h3 align="center" style="color:brown;" style="margin:1px;padding:1px;" >	 
					</h3>
					<Table align="center" border="1px" style="margin:"  >	  
						<tr>
							<td align="right">
								Email:
							</td>
							<td>
								<input id="email" required type="email" maxlength="50" name="email">
							</td>
						</tr>
						<tr>
							<td align="right">
								Name:
							</td>
							<td>
								<input id="name" required type="text" name="name" value="<?php echo isset($_REQUEST['username'])?$_REQUEST['username']:""?>">
							</td>
						</tr>		
						<tr>
							<td align="right">
								Phone:
							</td>
							<td>
								<input required id="phone" type="text" name="phone" placeholder="+1-xxx-xxx-xxxx">
							</td>
						</tr>
						<?php if($grouparr){ ?>
						<tr>
							<td id="grouptext" align="center" colspan="2">
								<label for="group">Groups</label>
								<br>
								<?php foreach($grouparr as $k => $v){ ?>
								<input class="group" type="checkbox" groupname="<?php echo $v; ?>" id="group<?php echo $k;?>" name="group[]" value="<?php echo $k; ?>">
								<label for="group<?php echo $k;?>"><?php echo $v; ?></label>
								<br>
							<?php	
							}
							?>
							</td>
						</tr>
						<?php	
						}	
						?>	
						<tr>
							<td id="created_by_label" align="right">
								Created_by_UserID:
							</td>
							<td>
								<input id="created_by" required type="number" name="created_by">
							</td>
						</tr>				   
						<tr>
							<td align="center" colspan="2" >
								<input id="submit" type="submit" value="submit" name="submit" > 
								<input id="update" type="submit" value="update" name="update" style="display:none;"> 
							</td>
						</tr>	
						<tr>
							<td   align="center" colspan="2" >
								<input type="button" onclick="location.href='index.php'" value="Back to User List Page" />
							</td>
						</tr>			   
				</Table>
			</fieldset>		  
		</form>
   </body>
</html>
<?php require("include/controllers/controlleruser.php") ?>