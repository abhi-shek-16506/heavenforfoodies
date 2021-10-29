<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

div.bg-light{
  font-family: 'Times New Roman', Times, serif;
      color: black;
     position: relative;
  top: 80%;
  left: 40%;
      font-variant-position: normal;
      top: 100%;
}

.form-controll
{
  top: 60%;
  left: 60%;
}
</style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <form action="#" method="POST" enctype="multipart/form-data">
  <div class="bg-light p-5 rounded">
    <div class="card" style="width: 18rem;">
           <div class="mb-3">            
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER THE EMPLOYEEITEM NAME</label>
            <input type="TEXT" class="form-control" id="INAME" name="ENAME">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER SALERY</label>
            <input type="TEXT" class="form-control" id="INAME" name="ESAL">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER ADDRESS <ADDress></ADDress></label>
            <input type="TEXT AREA" class="form-control" id="INAME" name="ADD">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER phone number</label>
            <input type="PHONENUMBER" class="form-control" id="INAME" name="PHONE">
          </div>
          <input type="submit" name="save" Value="SUBMIT" >
          <input type="reset" name="reset" Value="RESET" >
          <button type="submit1" class="btn btn-outline-success" ><a href="adminmenu.php"> GO TO MENU</a></button>      
    </div>
  </div>
  
  <?php
if(isset($_POST['save']))
{
  $con = mysqli_connect("localhost","root","","asbackes");
if(mysqli_connect_errno())
{
  echo"failed to connect". mysqli_connect_error();
  exit();
}else{
  $q1= mysqli_query($con,"INSERT INTO EMPLOYEE(`ename`,`sal`,`address`,`num`) VALUES ('".$_POST['ENAME']."','".$_POST['ESAL']."','".$_POST['ADD']."','".$_POST['PHONE']."')")or die(mysqli_error($con));
  
}
if ($q1) {
	echo "data uploaded";
  $id=$_POST['ENAME'];
$query1="SELECT * FROM ITEMS WHERE item_namme='$id' ";
$query_run=mysqli_query($con,$query1);
      while($row =mysqli_fetch_array($query_run))
      {
          ?> 
          <div class="col-md-6">
       <div class="form-group">
        <input type="text" name="txt" id="txt" value="<?php echo $row['ename']; ?>" placeholder="hyy"/>
      </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
        <input type="text" name="txt" id="txt" value="<?php echo $row['eid']; ?>" placeholder="hyy"/>
      </div>
    </div>
    <div class="col-md-6">
       <div class="form-group">
        <input type="text" name="txt" id="txt" value="<?php echo $row['sal'];?>" placeholder="hyy"/>
      </div>
    </div>
    <?php
      }

}
  ?>
  <?php
}else{
	echo "data Not uploaded";
}

 ?>
  </div>  
  </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>