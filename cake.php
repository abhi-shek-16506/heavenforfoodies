<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body><center>
  <table>            
            <tr><center> <input type="text" name="txt" id="txt" value="cust no" disabled/><input type="text" name="txt" id="txt" value="name" disabled/><input type="text" name="txt" id="txt" value="item name " disabled/><input type="text" name="txt" id="txt" value="item quantity " disabled/></center>
        </tr>
        </table>
  <?php
  {
    $con = mysqli_connect("localhost","root","","asbackes");
    mysqli_select_db($con,"asbackes");
        $query="SELECT * FROM `custumer` ";
        $sqlqueryfire = mysqli_query($con,$query);
        
        while($query_run=mysqli_fetch_array($sqlqueryfire))
        {            
                      ?><center>
                     <table><tr>
                    <input type="text" name="txt" id="txt"  value="<?php echo $query_run['cphone'];?>" disabled/>                     
                    <input type="text" name="txt" id="txt" value="<?php echo $query_run['cname']; ?>" disabled/>
                    <input type="text" name="txt" id="txt" value="<?php echo $query_run['iname'];?>" disabled />
                    <input type="text" name="txt" id="txt" value="<?php echo $query_run['iqty'];?>" disabled />
                  </tr>  
                </table></center>
                <?php
                  }
        ?>
       
  <?php       
  }
?>
    <form action="" method="post">
<table>
 
 <tr><td>enter cust number</td><td><input type="text" name="cname" id="cname" Required/></td></tr>
</table> <center>  <button class="btn btn-outline-primary" name="fetch" type="submit"> <a href="adminmenu.php"> back</a></button>   </center>
<input type="submit" name="save" Value="SUBMIT"/>
</form>
</center>   
<?php
if(isset($_POST['save']))
{
  $con = mysqli_connect("localhost","root","","asbackes");
  $id=$_POST['cname'];
  $j=0;
  $query1="SELECT * FROM custumer WHERE cphone='$id' ";
  $query_run=mysqli_query($con,$query1);
        while($row =mysqli_fetch_array($query_run))
        {
          $j=$j+$row['itotal']
            ?><center>
            <form action="adminmenu.php" method="post">
            <div class="col-md-6">
         <div class="form-group">
         <table>
         <tr><td><input type="text" name="txti" id="txt" value="<?php echo $row['cphone']; ?>" disabled/></td>
          <td><input type="text" name="txtn" id="txt" value="<?php echo $row['cname']; ?>" disabled/></td>
          <td><input type="text" name="txtp" id="txt" value="<?php echo $row['iname'];?>" disabled/></td>          
          <td><input type="text" name="txtp" id="txt" value="<?php echo $row['iprice'];?>" disabled/></td>         
          <td><input type="text" name="iqty" id="iqty" value="<?php echo  $row['iqty']?>" disabled/></td>
          <td><input type="text" name="txtt" id="txtt" value="<?php echo $row['itotal']?>" disabled/></td></tr>
          </table>
        </div>
      </div>      
      <?php
      $q=mysqli_query($con,"DELETE FROM custumer where `cphone`=".$row['cphone']);
      if($q)
      {
        ?>

<?php
       
      }
      else
      {
        echo"by";
      }
        }
        echo"total is".$j;
        
}
?>
<input type="submit" value="CONFIRM" name="con">
</form>
</center>
</form>
</center>
<?php
 if(isset($_POST['con']))
 {
  
 }
?>

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