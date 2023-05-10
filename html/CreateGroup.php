<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="css/main.css" rel="stylesheet" type="text/css">
	</head>
	<body  style="background-color:#A8FFFF;">
		<div class="container">
		<?php require("include/header.php")?>
		</div>
		<form  enctype="multipart/form-data" id="form_id" method="post" action="">
		  <fieldset style=" padding: 1px 1px 1px 1px; background-color:#A8FFFF;">
			<h3 align="center" style="color:brown;" style="margin:1px;padding:1px;" >	 
			</h3>
			 <Table align="center" border="1px" style="margin:"  >	  
			   <tr>
			     <td align="right">
					Groupname:
				 </td>
			     <td>
					<input id="groupname" required type="text" maxlength="50" name="groupname">
				 </td>
			   </tr>
		       <tr>
			     <td align="right">
					Created_by_UserID:
				 </td>
			     <td>
					<input id="created_by" required type="number" name="created_by">
				 </td>
			   </tr>
			   <tr>
			     <td align="center" colspan="2" >
				   <input id="submit" type="submit" value="submit" name="submit" > 
				 </td>
			   </tr>	
			   <tr>
			     <td align="center" colspan="2" >
					<input type="button" onclick="location.href='index.php'" value="Back to User List Page" />
				 </td>
			   </tr>			   
			</Table>
		 </fieldset>		  
    </form>
   </body>
</html>
<?php require("include/controllers/controllergroup.php") ?>