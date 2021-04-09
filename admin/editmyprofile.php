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
        <h1 ><i class="fa fa-tachometer-alt  text-primary"> Edit</i> <small>Profile</small></h1>
        <ol class=" breadcrumb colorr" style="background: rgb(105 111 117 / 25%);">
          <li class="active "><i class="fas fa-users"></i> Users</li>
        </ol>


        <div class="row">
       <div class="col-md-6 offset-md-3">
        <?php if(isset($success)){echo '<p class="alert alert-success" role="alert col-sm-4 offset-sm-3">'.$success.'</p>';}?> 
        <?php if(isset($error)){echo '<p class="alert alert-danger" role="alert col-sm-4 offset-sm-3">'.$error.'</p>';}?> 


 
 <?php

if(isset($_GET['edit'])){

  $id=$_GET['edit'];




 
 

if (isset($_POST['update'])) {


   
      $name=       $_POST['name'];      
      $email=          $_POST['email'];    

       
    

 
        $insertMentorInfo = "UPDATE users SET name='$name', email='$email' WHERE id='$id' ";
       

       

      


   $updatementor=mysqli_query($db,$insertMentorInfo);
   
   if (!$updatementor) {
     die("Faild".mysqli_error($updatementor));
   }else{
    header("Location: myprofile.php");
   }
      
 
    
}

 







  $mentorInfo="SELECT * FROM users WHERE id = '$id'";
  $mntrinfo= mysqli_query($db,$mentorInfo);

  while ($row=mysqli_fetch_assoc($mntrinfo)) {
       
  

?>

 

      <form action="" method="POST" enctype="multipart/form-data" >
           
        <div class="form-group">


          <label>Full Name:</label>
         
          <input type="text" name="name"  value="<?php echo $row['name'];?>"  class="form-control " autocomplete="off"  >
           
        </div>
         
        <div class="form-group  ">
          <label>Email:</label>
         
          <input type="text" name="email"  value="<?php echo $row['email'];?>"  class="form-control " autocomplete="off"   >
          
        </div>
         
        <div class="form-group  ">
               
          <input type="submit" class="btn btn-primary pull-right" value="Update" name="update" >
        </div>

    
         </form> 

 
 
         <?php
 }

};

?>



       </div> 
        
      </div>
      
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


<?php ob_end_flush(); ?>
</body>
  
</html>