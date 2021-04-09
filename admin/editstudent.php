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
       <div class="col-md-6 offset-md-3">
        <?php if(isset($success)){echo '<p class="alert alert-success" role="alert col-sm-4 offset-sm-3">'.$success.'</p>';}?> 
        <?php if(isset($error)){echo '<p class="alert alert-danger" role="alert col-sm-4 offset-sm-3">'.$error.'</p>';}?> 




 




                   
<?php

if(isset($_GET['edit'])){

  $id=$_GET['edit'];




 
 

if (isset($_POST['update'])) {


   
      $roll=       $_POST['roll'];      
      $class=          $_POST['class'];    

      $name=          $_POST['name'];
      $fname=        $_POST['fname'];       
      $mname= $_POST['mname'];   
      $phone=$_POST['phone']; 
       

     if($_FILES['photo']['name'] == ""){
     $insertMentorInfo = "UPDATE students SET roll='$roll', class='$class',name='$name', fname='$fname',mname='$mname',phone='$phone'   WHERE id='$id' ";


     }else{
      $photo=    $_FILES['photo']['name'];
      $profile_img_temp= $_FILES['photo']['tmp_name'];
      move_uploaded_file($profile_img_temp, 'images/student/'.$photo);

 
        $insertMentorInfo = "UPDATE students SET roll='$roll', class='$class',name='$name', fname='$fname',mname='$mname',phone='$phone' ,photo='$photo' WHERE id='$id' ";
     }
 

       

      


   $updatementor=mysqli_query($db,$insertMentorInfo);
   
   if (!$updatementor) {
     die("Faild".mysqli_error($updatementor));
   }else{
    header("Location: allstudent.php");
   }
      
 
    
}

 







  $mentorInfo="SELECT * FROM students WHERE id = '$id'";
  $mntrinfo= mysqli_query($db,$mentorInfo);

  while ($row=mysqli_fetch_assoc($mntrinfo)) {
       
  

?>







 


                   <!-- <?php


                //      if(isset($_GET['edit'])){
                //       $id=$_GET['edit'];

                // $query="SELECT * FROM students WHERE id='$id'";
                //  $all_user=mysqli_query($db,$query);

                //      $i=1;
                //  while($row=mysqli_fetch_assoc( $all_user ) ){
                //   $id=$row['id'];
                //   $roll=$row['roll'];
                //   $class=$row['class'];
                //   $name=$row['name'];
                //   $fname=$row['fname'];
                //   $mname=$row['mname'];
                //   $phone=$row['phone'];
                //   $photo=$row['photo'];
                //   // $avater=$row['avater']; 
                //   // $joindate=$row['joindate'];
                //   // $user_role=$row['user_role'];
                //    $i++;
                //  }
                 
                   
               // }
               // ?>        -->      

      <form action="" method="POST" enctype="multipart/form-data" >
          <div class="form-group">


          <label>Roll Number:</label>
         
          <input type="text" name="roll"  value="<?php echo $row['roll'];?>"  class="form-control " autocomplete="off"  pattern="[0-9]{4}">
           
        </div>
        <div class="form-group  ">
          <label>Class: </label>
         
           <select name="class" class="form-control">
              
             <option>class one</option>
             <option>class two</option>
             <option>class three</option>
             <option>class four</option>
             <option>class five</option>

           </select>
          
        </div>
        <div class="form-group">


          <label>Full Name:</label>
         
          <input type="text" name="name"  value="<?php echo $row['name'];?>"  class="form-control " autocomplete="off"  >
           
        </div>
        <div class="form-group  ">
          <label>Fathers Name:</label>
         
          <input type="text" name="fname"  value="<?php echo $row['fname'];?>"  class="form-control " autocomplete="off"   >
          
        </div>
         <div class="form-group  ">
          <label>Mothers Name:</label>
         
          <input type="text" name="mname"  value="<?php echo $row['mname'];?>"  class="form-control " autocomplete="off"   >
          
        </div>
        <div class="form-group  ">
          <label>Phone:</label>
         
          <input type="text" name="phone"  value="<?php echo $row['phone'];?>"  class="form-control " autocomplete="off"   >
          
        </div>
        <div class="form-group  ">
          <label>Photo:</label>        
          <img src="../images/student/<?php echo $row['photo'];?>" height="40px" width="40px">
          <input type="file"  name="image">

        </div>
        <div class="form-group  ">
               
          <input type="submit" class="btn btn-primary pull-right" value="Add" name="update" >
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
<!--  <?php
                   


                  // if(isset($_POST['update'])){
                    
                  //   $roll=$_POST['roll'];
                  //   $class=$_POST['class'];
                  //   $name=$_POST['name'];
                  //   $fname=$_POST['fname'];
                  //   $mname=$_POST['mname'];
                  //   $phone=$_POST['phone'];
                     
                   
                    


                   

            //         if($_FILES['image']['name'] == ""){


            //           $query="UPDATE students SET roll='$roll',class='$class',name='$name',fname='$fname',mname='$mname',phone='$phone' WHERE id='$id' ";
                       
            //         }
            //          else{

            //            $image=$_FILES['image']['name'];
            //           $image_tmp=$_FILES['image']['tmp_name'];
            //           move_uploaded_file($image_tmp,'../images/student/'.$image); 
            //           $query="UPDATE students SET roll = '$roll',class='$class',name='$name',fname='$fname',mname='$mname',,mname='$mname'  ,photo='$image' WHERE id='$id' ";
 
            //         }
            //         $edituser=mysqli_query($db,$query);
                     
            //          if($edituser){
            //   header("Location:allstudent.php");
            // }else{
            //   die("Database Not Connected".mysqli_error($db));
            // }
            
              

                    
//}

            // ?>   -->    
                   

           
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