 <?php
 ob_start();
include '../dbcon.php';
include '../header.php';
?>



  
 <div class="container">
 	<div class="row ">
 		<div class="col-md-2">
 			
 		</div>
 		<div class="col-md-10">
 			 <div class="content">
 			 	<h1 ><i class="fa fa-tachometer-alt  text-primary"> All Users</i> <small>Staticthis Area</small></h1>
 			 	<ol class=" breadcrumb colorr" style="background: rgb(105 111 117 / 25%);">
 			 		<li class="active "><i class="fas fa-users"></i> Users</li>
 			 	</ol>

                  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
                 	 	<th scope="col">Name</th>
                 	 	<th scope="col">Email</th>
                 	 	<th scope="col">Photo</th>
                 	 	<th scope="col">Join Date</th>
                    <th scope="col">Action</th>
    </tr>
  </thead>
 
 			 	 
                  
                 	 
<?php
$i=1;
$query="SELECT * FROM users";
    $all_users=mysqli_query($db,$query);
    while($row=mysqli_fetch_assoc( $all_users) ){
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];         
           
          $photo=$row['photo'];
          $date_time=$row['date_time'];



?>
 <tbody>
    <tr>
     <td scope="row"><?php echo $i; ?></td>
                 	 	<td><?php echo  $name; ?></td>
                 	 	<td><?php echo $email; ?></td>
                 	 	<td> <img src="../images/user/<?php echo $photo;?>"   style=" width:70px;
                      height: 70px;
                      border-radius: 50%;
                        border:3px solid #eee;"></td>
       
                 	 	<td><?php echo date('d-M-Y',strtotime($date_time)) ;?></td>
                  <td > <a href="" title=""class="btn btn-xs btn-warning">Edit</a>  
                <a href="allusers.php?delete=<?php echo $id;?>" title=""class="btn btn-xs btn-danger">Delete</a> </td> 
    </tr>

                         



 			 	<?php $i++;}?>
 			 </div>
 		</div>
 		
 		 
 		
 	</div>
 	
 </div>
 <br>
 <br>
 <br>
 
  
  
<?php


    if (isset($_GET['delete'])) {
      

      $id= $_GET['delete'];
      $deleteInfo="DELETE FROM  users WHERE  id='$id'";
      $deletusersInfo= mysqli_query($db,$deleteInfo);
      if ($deletusersInfo) {
         header("Location:allusers.php");
      }

    }
     

?>











<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	 
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="../js/jquery-3.5.1.js" type="text/javascript"></script>
<script src="../js/jquery.dataTables.min.js" type="text/javascript"  ></script>

<script src="../js/script.js" type="text/javascript"  ></script>	
<?php ob_end_flush(); ?>
</body>
  
</html>