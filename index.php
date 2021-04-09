<?php
 
include "dbcon.php";


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Khan Academy</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
     
	 
</head>
<body class="jumbotron  font-weight-bold">
	<div class="container">
		<div  >
			<a href="register.php" title=""class="btn btn-primary pull-right">Register</a>
		<a href="login.php" title=""class="btn btn-primary pull-right">Login</a>
		</div>
		<br>
		<br>
		<h2 class="text-center">Khan Academy</h2>
		<div class="row">
			<div class="col-sm-4 offset-sm-4">
			<form action="showinfo.php" method="POST"  >
			   
			 
				<table class="table table-border">
					<tr>
						<td colspan="22" class="text-center"><label>Student Information Table</label></td>
					</tr>
					<tr>
						<td><label>Choose Class</label></td>
						<td>
							<select name="class"class="form-control" required="required">
								<option value="">Choose Class</option>
								<option value="Class One">Class One</option>
								<option value="Class Two">Class Two</option>
								<option value="Class Three">Class Three</option>
								<option value="Class Four">Class Four</option>
								<option value="Class Five">Class Five</option>
							</select>
						</td>
					</tr>
					<tr>
						<td   ><label>Roll Number</label></td>
						<td><input type="text" class="form-control" placeholder="class roll" required="required" name="roll" pattern="[0-9]{4}"></td>
					</tr>
					<tr>
						 
						<td colspan="2" class="text-center"><input type="submit" class="btn btn-primary" value="Show Info" name="show"></td>
					</tr>
					 
				</table> 
				 </form> 
				
			</div>
			
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<footer>
			<p class="text-center"><b> &copy2018-<?php echo date('Y');?>All Right Reserved. Khan Academy</b></p>
		</footer>
		
	</div>


	 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="js/jquery-3.5.1.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"  ></script>

<script src="js/script.js" type="text/javascript"  ></script>	
</body>
 
</html>