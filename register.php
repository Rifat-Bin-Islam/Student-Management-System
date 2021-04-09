<?php
include 'dbcon.php';
?>
 
<?php
if(isset($_POST['register'])){
	 
 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
 $rand=rand(1,1000000);
	$photo = explode('.',$_FILES['photo']['name']);
    $photo  = end($photo);
    $photo_name = $rand.'.'.$photo;

 
 if(!$name ==""){
  if(!$email ==""){
    if(!$password ==""){
       if(strlen($password)>7){
         if(!$cpassword == ""){
           if($password == $cpassword){
           	    
                $query=mysqli_query($db,"SELECT * FROM users WHERE email ='$email' ");
                 if(mysqli_num_rows($query)==0){
                   $result=mysqli_query($db,"INSERT INTO users (name, email, password, photo) VALUES ('$name','$email','$password','$photo_name')");
                    
                   if($result){
                         $success= "Data insert succesfully";
                      move_uploaded_file($_FILES['photo']['tmp_name'], 'images/user/'.$photo_name);
                   }else{
                        $error= "Data insert Error!";
                   }
                }else{
                      $email_exist= "This email already exist";
                }
		       }else{
		       $confirm_password_error= "Password not match";
		   }
			     }else{
			     $confirm_password_error= "Confirm Password fild is required";
			 }
		   }
		   else{
		   $password_length_error= "password must be 8 character";	
		}
		    }
		    else{
		    $password_error= "Password fild is required";
		}
		  }else{
		   $emai_error= "Email fild is required";
		}

		}else{
			$name_error= "Name fild is required";
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
			<a href="login.php" title=""class="btn btn-primary pull-right">Log In</a>
			<a href="index.php" title=""class="btn btn-primary  ">Home</a>
		 
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				 <?php if(isset($success)){echo '<p class="alert alert-success" role="alert col-sm-4 offset-sm-3">'.$success.'</p>';}?> 
			</div>
			<div class="col-sm-4 offset-sm-3">
				 <?php if(isset($error)){echo '<p class="alert alert-danger" role="alert col-sm-4 offset-sm-3">'.$error.'</p>';}?> 
			</div>
		</div>
		<h2 class="text-center">User Register Form</h2>
		<div class="row">

			<div class="col-md-6 offset-md-3">
			<form action="" method="POST" enctype="multipart/form-data" >
				 
				<div class="form-group">


					<label>Full Name:</label>
				 
					<input type="text" name="name"  placeholder="Enter your name"  class="form-control " autocomplete="off"  >
					<span class="erroe"><?php if(isset($name_error)){echo $name_error;}?></span>
				</div>
				<div class="form-group  ">
					<label>Email:</label>
				 
					<input type="email" name="email"  placeholder="Enter your email"  class="form-control " autocomplete="off"  >
					<span class="erroe"><?php if(isset($email_error)){echo $email_error;}?></span>
					<span class="erroe"><?php if(isset($email_exist)){echo $email_exist;}?></span>
				</div>
				<div class="form-group">
					<label>Password:</label>
				 
					<input type="password" name="password"  placeholder=" Password"  class="form-control " autocomplete="off"  >
					<span class="erroe"><?php if(isset($password_error)){echo $password_error;}?></span>
					<span class="erroe"><?php if(isset($password_length_error)){echo $password_length_error;}?></span>
				</div>
				<div class="form-group  ">
					<label>Confirm Password:</label>
				 
					<input type="password" name="cpassword"  placeholder="Confirm Password"  class="form-control " autocomplete="off"  >
					<span class="erroe"><?php if(isset($confirm_password_error)){echo $confirm_password_error;}?></span>
					 
					<span class="erroe"><?php if(isset($password_match_error)){echo $password_match_error;}?></span>
				</div>
				<div class="form-group  ">
					<label>Photo:</label>				 
					<input type="file" name="photo">
				</div>
				<div class="form-group  ">
					 		 
					<input type="submit" class="btn btn-primary pull-right" value="Register" name="register" >
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
</body>
 
</html>