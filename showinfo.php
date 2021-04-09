<?php
ob_start();
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


<?php

   if(isset($_POST['show'])){
   	$class=$_POST['class'];
   	$roll=$_POST['roll'];
   	

    $result=mysqli_query($db,"SELECT * FROM students WHERE roll='$roll' and class='$class'");
    
    if(mysqli_num_rows($result)==1){
    	$row=mysqli_fetch_assoc($result);

    }else{ 
    	 
    	header("Location:index.php");
     }
   }

?>


		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<div class="table-responsive">
					
				 
	          <table class="table table-hover table-light table-bordered">
			    <tr>
			      <th>Photo:</th>
			      <td><img src="images/student/<?php echo  $row['photo'];?>" alt="" style="width: 100px;"></td>
			       
			    </tr>
			     
			    <tr>
			      <th>Roll:</th>
			      <td><?php echo  $row['roll'];?> </td>
			       
			    </tr>
			   
			    <tr>
			      <th>Name:</th>
			      <td><?php echo  $row['name'];?></td>
			       
			    </tr>
			    <tr>
			      <th>Class:</th>
			      <td><?php echo  $row['class'];?></td>
			       
			    </tr>
			    <tr>
			      <th>Father's Name:</th>
			      <td><?php echo  $row['fname'];?></td>
			       
			    </tr>
			     <tr>
			      <th>Mother's Name:</th>
			      <td><?php echo  $row['mname'];?></td>
			       
			    </tr>
			     <tr>
			      <th>Phone:</th>
			      <td><?php echo  $row['phone'];?></td>
			       
			    </tr>
			     
			  
			</table>
			    </div>
			    <a href="index.php" title="" class="btn btn-primary pull-right">Refresh</a>
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