 <?php
include '../dbcon.php';
include '../header.php';
?>
<?php


     if(isset($_POST['addstudent'])){
            $roll=$_POST['roll'];
             $class=$_POST['class'];
              $name=$_POST['name'];
            $fname=$_POST['fname']; 
              $mname=$_POST['mname'];             
            $phone=$_POST['phone'];

             

            $photo = explode('.',$_FILES['photo']['name']);
            $photo  = end($photo);
            $photo_name = $roll.$name.'.'.$photo;
        
             $result=mysqli_query($db,"INSERT INTO students (roll,class,name,fname,mname,phone,photo ) VALUES ('$roll','$class','$name', '$fname' ,'$mname','$phone','$photo_name'  )");
                    
             
                 if($result){
                         $success= "Data insert succesfully";
                      move_uploaded_file($_FILES['photo']['tmp_name'], '../images/student/'.$photo_name);
                   }else{
                        $error= "Data insert Error!";
                   }
             
            // if($addUser){
            //   header("Location:index.php");
            // }else{
            //   die("Database Not Connected".mysqli_error($db));
            // }


             
          }



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

      <form action="" method="POST" enctype="multipart/form-data" >
          <div class="form-group">


          <label>Roll Number:</label>
         
          <input type="text" name="roll"  placeholder="Enter your roll"  class="form-control " autocomplete="off"  pattern="[0-9]{4}">
           
        </div>
        <div class="form-group  ">
          <label>Class:</label>
         
           <select name="class" class="form-control" required="required">
             <option value="">Select</option>
             <option value="class one">class one</option>
             <option value="class two">class two</option>
             <option value="class three">class three</option>
             <option value="class four">class four</option>
             <option value="class five">class five</option>

           </select>
          
        </div>
        <div class="form-group">


          <label>Full Name:</label>
         
          <input type="text" name="name"  placeholder="Enter your name"  class="form-control " autocomplete="off" required="required" >
           
        </div>
        <div class="form-group  ">
          <label>Fathers Name:</label>
         
          <input type="text" name="fname"  placeholder="Fathers Name"  class="form-control " autocomplete="off" required="required" >
          
        </div>
         <div class="form-group  ">
          <label>Mothers Name:</label>
         
          <input type="text" name="mname"  placeholder="Mothers Name"  class="form-control " autocomplete="off" required="required" >
          
        </div>
        <div class="form-group  ">
          <label>Phone:</label>
         
          <input type="number" name="phone"  placeholder="Phone Number"  class="form-control " autocomplete="off"   >
          
        </div>
        <div class="form-group  ">
          <label>Photo:</label>        
          <input type="file" name="photo"required="required">
        </div>
        <div class="form-group  ">
               
          <input type="submit" class="btn btn-primary pull-right" value="Add" name="addstudent" >
        </div>

    
         </form> 
        
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

</body>
  
</html>