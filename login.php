<?php
session_start();
ob_start();
include 'dbcon.php';
if(isset($_SESSION['login_id'] )){
header('Location: admin/admin.php');
}

?>

<?php

if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];


	$email_check = mysqli_query($db,"SELECT * FROM users WHERE email = '$email'");
	if(mysqli_num_rows($email_check) > 0){
           $row = mysqli_fetch_assoc($email_check);
           if($row['password'] == $password){
           	      $_SESSION['login_id'] = $row['id'];
                    header("Location:admin/admin.php ");
           }else{
                 $password_error="Wrong Password";
           }
	}else{
		$email_error="Wrong email id";
	}
}


 
 
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
<body class="jumbotron font-weight-bold"  >
	 
<div class="container">
		<div  >
			<a href="register.php" title=""class="btn btn-primary pull-right">Register</a>
			<a href="index.php" title=""class="btn btn-primary  ">Home</a>
		 
		</div>
		<br>
		<br>
		<h2 class="text-center">User Log In Form</h2>
		<div class="row">
			<div class="col-sm-4 offset-sm-4">
			<form action="" method="POST"  >
				<div class="form-group    ">
					<label   >Email</label>
				 
					<input type="email" name="email" required="required" placeholder="Enter your email"  class="form-control " autocomplete="off"  >
					
                  <span class="erroe"><?php if(isset($email_error)){echo $email_error;}?></span>
				</div>

				
				<div class="form-group    ">
					<label  >Password</label>
				 
					<input type="password" name="password" placeholder="Password"  class="form-control " autocomplete="off" id="myInput" required="required">
					<br>


					<!-- An element to toggle between password visibility -->
					<input class="p-5"type="checkbox" onclick="myFunction()">Show Password
                           <br>
					<span class="erroe"><?php if(isset($password_error)){echo $password_error;}?></span>
				</div>
				  <div class="form-group">
					 
					<input type="submit" name="login" value="Log In" class="btn btn-info">
					 


					 
				</div>

			   
			 
				 
					  
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
			<p class="text-center"><b> &copy2018-<?php echo date('Y');?>All Right Reserved.Khan Academy</b></p>
		</footer>
		
	</div>

	 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="js/jquery-3.5.1.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"  ></script>

<script src="js/script.js" type="text/javascript"  ></script>	
<?php
ob_end_flush();
?>
</body>
 
</html>