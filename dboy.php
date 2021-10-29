<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
    span.SAHANA {
        font-family: 'Times New Roman', Times, serif;
        text-decoration-color: crimson;
        color:chocolate;
        font-size: 100PX;
        font-variant-position: normal;
        animation: example 5s linear 2s infinite alternate;
        animation-direction: reverse;
      }
      @keyframes example {
      0% {
        color: red;
        left: 0px;
        top: 0px;
      }

      25% {
        color: yellow;
        left: 200px;
        top: 0px;
      }
      50% {
        color: blue;
        left: 200px;
        top: 200px;
      }

      75% {
        color: green;
        left: 0px;
        top: 200px;
      }

      100% {
        color: red;
        left: 0px;
        top: 0px;
      }
    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
        <marque> <h2><span class="SAHANA"><center>welcome to AS FOODIES</center> </span></h2></marque>
        </div>
      </nav><center><form action="" method="post">
  <input type="text" name="empid" id="empid" Required/><br>
  <input type="submit" name="save1" Value="SUBMIT" >
<?php
if(isset($_POST['save1']))
{
  $con = mysqli_connect("localhost","root","","asbackes");
  if(mysqli_connect_errno())
{
  echo"failed to connect". mysqli_connect_error();
  exit();
}else{
    $a=$_POST['empid'];
       $que = mysqli_query($con,"SELECT * FROM EMPLOYEE WHERE EID=".$a);
    if ($que) {?><br><?php echo"YOUR ORDERS ARE";?>
      </form>
  <table>            
            <tr><center> <input type="text" name="txt" id="txt" value="cust no" disabled/><input type="text" name="txt" id="txt" value="address" disabled/><input type="text" name="txt" id="txt" value="name" disabled/><input type="text" name="txt" id="txt" value="item name " disabled/><input type="text" name="txt" id="txt" value="item quantity " disabled/></center>
        </tr>
        </table><?php
         $query="SELECT * FROM `cust` ";
         $sqlqueryfire = mysqli_query($con,$query);
         
         while($query_run=mysqli_fetch_array($sqlqueryfire))
         {            
                       ?><center>
                      <table><tr>
                     <input type="text" name="txt" id="txt"  value="<?php echo $query_run['cphone'];?>" disabled/>                     
                     <input type="text" name="txt" id="txt"  value="<?php echo $query_run['address'];?>" disabled/>                     
                     <input type="text" name="txt" id="txt" value="<?php echo $query_run['cname']; ?>" disabled/>
                     <input type="text" name="txt" id="txt" value="<?php echo $query_run['names'];?>" disabled />
                     <input type="text" name="txt" id="txt" value="<?php echo $query_run['quantity'];?>" disabled />
                   </tr>  
                 </table></center>
         <?php
         }
         ?>
                 <form action="" method="post">
<table>

 <tr><td>enter cust number</td><td><input type="text" name="cname" id="cname" Required/></td></tr>
</table> 
<input type="submit" name="save" Value="SUBMIT"/>
</form>
</center>
<?php
        
        }
      }
    }?>
</center>
  <?php
                   if(isset($_POST['save']))
{
  $con1 = mysqli_connect("localhost","root","","asbackes");
  $id=$_POST['cname'];
  $j=0;
  $query1="SELECT * FROM cust WHERE cphone='$id' ";
  $query_run=mysqli_query($con1,$query1);
        while($row =mysqli_fetch_array($query_run))
        {
          $j=$j+$row['total'];
          
            ?><center>
            <form action="" method="post">
            <div class="col-md-6">
         <div class="form-group">
         <table>
         <tr><td><input type="text" name="txti" id="txt" value="<?php echo $row['cphone']; ?>" disabled/></td>
          <td><input type="text" name="txt" id="txt"  value="<?php echo $row['address'];?>" disabled/></td>
          <td><input type="text" name="txtn" id="txt" value="<?php echo $row['cname']; ?>" disabled/></td>
          <td><input type="text" name="txtp" id="txt" value="<?php echo $row['names'];?>" disabled/></td>          
          <td><input type="text" name="txtp" id="txt" value="<?php echo $row['price'];?>" disabled/></td>         
          <td><input type="text" name="iqty" id="iqty" value="<?php echo  $row['quantity']?>" disabled/></td>
          <td><input type="text" name="txtt" id="txtt" value="<?php echo $row['total']?>" disabled/></td></tr>
          </table>
        </div>
      </div>      
      <?php
     
      if($query_run)
      {
        $q=mysqli_query($con1,"DELETE FROM cust where `cphone`=".$row['cphone']);
        ?>
        <input type="submit" value="CONFIRM" name="con">
        </form>
        </center>
        <?php
       
      }
      echo"total is".$j;
 }
}
?>
<center>  <button class="btn btn-outline-primary" name="fetch" type="submit"> <a href="PROJECT.HTML"> back</a></button>   </center>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   
  </body>
</html>