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
 			 	<h1 ><i class="fa fa-tachometer-alt  text-primary"> Add Student</i> <small>Staticthis Area</small></h1>
 			 	<ol class=" breadcrumb colorr" style="background: rgb(105 111 117 / 25%);">
 			 		<li class="active "><i class="fas fa-users"></i> Users</li>
 			 	</ol>


        <div class="row">
       <div class="col-md-12  ">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Roll</th>
                <th>Photo</th>
                <th>Class</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Phone</th>
                <th>Join Date</th>
                <th >Action</th>
            </tr>
        </thead>
        <?php


      $query="SELECT * FROM students";
    $all_users=mysqli_query($db,$query);
    while($row=mysqli_fetch_assoc( $all_users) ){
          $id = $row['id'];
          $roll=$row['roll'];
          $class=$row['class'];
          $name=$row['name'];
          $fname=$row['fname'];
          $mname=$row['mname'];
          $phone=$row['phone'];
          $photo=$row['photo'];
          $date_time=$row['date_time'];
      


?>
        <tbody>
            <tr>
               <td><?php echo $roll; ?></td>
               <td><img src="../images/student/<?php echo $photo;?>"   style=" width:70px;
                      height: 70px;
                      border-radius: 50%;
                        border:3px solid #eee;"></td>
                <td><?php echo $class; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $fname; ?></td>
                <td><?php echo $mname; ?></td>
                <td><?php echo $phone; ?></td>
                <td><?php echo date('d-M-Y',strtotime($date_time)) ;?></td> 
                <td > <a href="editstudent.php?edit=<?php echo $id;?>" title=""class="btn btn-xs btn-warning">Edit</a>  
                <a href="allstudent.php?delete=<?php echo $id;?>" title=""class="btn btn-xs btn-danger">Delete</a> </td>
                
                    </tr>
             
        </tbody>
      <?php }?>
        <tfoot>
            <tr>
                <th>Roll</th>
                <th>Photo</th>
                <th>Class</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Phone</th>
                <th>Join Date</th>
            </tr>
        </tfoot>
    </table>
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
      $deleteInfo="DELETE FROM  students WHERE  id='$id'";
      $deletusersInfo= mysqli_query($db,$deleteInfo);
      if ($deletusersInfo) {
         header("Location:allstudent.php");
      }

    }
     

?>








 <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	 
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="../js/jquery-3.5.1.js" type="text/javascript"></script>
<script src="../js/jquery.dataTables.min.js" type="text/javascript"  ></script>

<script src="../js/script.js" type="text/javascript"  ></script>	
<?php ob_end_flush(); ?>
</body>
  
</html>