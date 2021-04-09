 <?php
include '../dbcon.php';
include '../header.php';

?>
<?php

$query=mysqli_query($db,"SELECT * FROM students");
$student_count=mysqli_num_rows($query);
$query2=mysqli_query($db,"SELECT * FROM users");
$user_count=mysqli_num_rows($query2);

?>




 
   
 <div class="container">
 	<div class="row ">
 		<div class="col-md">
 			
 		</div>
 		<div class="col-md-9">
 			 <div class="content">
 			 	<h1 ><i class="fa fa-tachometer-alt  text-primary"> Dashboard</i> <small>Staticthis Area</small></h1>
 			 	<ol class=" breadcrumb colorr" style="background: rgb(105 111 117 / 25%);">
 			 		<li class="active "><i class="fa fa-tachometer-alt  "> </i> Dashboard</li>
 			 	</ol>
 			 	<div class="row">
 			 		<div class="col-md-4">
 			 			<div class="card bg-info  " style="padding: 20px;">
 			 				<div class="card-heading">
 			 					<div class="row"> 			 						
 			 						<div class="col-xs-3"><i class="fas fa-users fa-5x"></i>
 			 							 
 			 								<span style="font-size: 70px;padding: 55px;"><?php echo $user_count; ?></span>
 			 							 
 			 						</div>
 			 						<div class="clearfix">
 			 							
 			 						</div>
 			 						<div class="full-right">
 			 							All Users
 			 						</div>
 			 						<a href="../admin/allusers.php" title="" class="card-footer" style="    text-decoration: none;font-size: 20px;text-align: center;color: #521016;"><span>See all users <i class="fas fa-plus-circle"></i></span></a>
 			 						 
 			 					</div>
 			 				</div>
 			 			</div>
 			 		</div>
 			 		<div class="col-md-1">
 			 			
 			 		</div>
 			 		<div class="col-md-4">
 			 			<div class="card bg-info  " style="padding: 20px;">
 			 				<div class="card-heading">
 			 					<div class="row"> 			 						
 			 						<div class="col-xs-3"><i class="fas fa-users fa-5x"></i>
 			 							 
 			 								<span style="font-size: 70px;padding: 55px;"><?php echo $student_count; ?></span>
 			 							 
 			 						</div>
 			 						<div class="clearfix">
 			 							
 			 						</div>
 			 						<div class="full-right">
 			 							All Students
 			 						</div>
 			 						<a href="../admin/allstudent.php" title="" class="card-footer" style="    text-decoration: none;font-size: 20px;text-align: center;color: #521016;"><span>See all students <i class="fas fa-plus-circle"></i></span></a>
 			 						 
 			 					</div>
 			 				</div>
 			 			</div>
 			 		</div>
 			 	</div>
 			 </div>
 		</div>
 		
 		<div class="col-md">
 			
 		</div>
 		
 		
 	</div>
 	
 </div>
 <br>
 <br>
 <br>
 
 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	 
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="../js/jquery-3.5.1.js" type="text/javascript"></script>
<script src="../js/jquery.dataTables.min.js" type="text/javascript"  ></script>

<script src="../js/script.js" type="text/javascript"  ></script>	
<?php include '../footer.php'; ?>
</body>
 
</html>