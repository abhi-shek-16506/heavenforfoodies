<html>
<head><title></title></head>
<body>
    <center><h2>
        Bill
    </h2><form action="" method="post">
    <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER THE NAME</label>
            <input type="TEXT" class="form-control" id="INAME" name="INAME">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER THE PHONE NUMBER</label>
            <input type="TEXT" class="form-control" id="INAME" name="IIPRI">
          </div>
          <button type="submit" class="btn btn-danger" name="fetch1">ADD</button>
    <?php
    if(isset($_POST['fetch1']))
    {
      $con1 = mysqli_connect("localhost","root","","asbackes");
      $j=0;
      $query1="SELECT * FROM BILL ";
      $query_run=mysqli_query($con1,$query1);
      $query3="SELECT * FROM bill";
      $qry=mysqli_query($con1,$query3);
      while($product=mysqli_fetch_array($qry))
            {
      $j=$product['total']+$j;}
      ?>
                <table>            
                <tr><center> <input type="text" name="txt" id="txt" value="item name" disabled/><input type="text" name="txt" id="txt" value="price" disabled/><input type="text" name="txt" id="txt" value="quantity " disabled/><input type="text" name="txt" id="txt" value="total " disabled/></center>
            </tr>
            </table>
                <?php
            while($row =mysqli_fetch_array($query_run))
            {
                ?><center>
                <form action="cbill.php" method="post">
                <div class="col-md-6">
             <div class="form-group">
             <table>
              <tr>         
              <tr><td><input type="text" name="txtn" id="txtn" value="<?php echo $row['itemname']; ?>"  disabled /></td>
              <td><input type="text" name="txtp" id="txtp" value="<?php echo $row['price'];?>" disabled/></td>
              <td><input type="text" name="iqty" id="iqty" value="<?php echo  $row['quantity']?>" disabled/></td>
              <td><input type="text" name="txtt" id="txtt" value="<?php echo  $row['total']?>" disabled/></td></tr>
              </table>
            </div>
          </div>
          <?php       
         ?>
    </form>
    </center> 
    <?php
  $con = mysqli_connect("localhost","root","","asbackes");
        {
             $query = mysqli_query($con,"INSERT INTO custumer(`cphone`, `cname`, `iname`, `iprice`,`iqty`, `itotal`) VALUES ('".$_POST['IIPRI']."','".$_POST['INAME']."','".$row['itemname']."','".$row['price']."','".$row['quantity']."','".$row['total']."')")or die(mysqli_error($con));
          if ($query) {
          }else{
            echo "data Not uploaded";
          }
          ?> 
      <?php
     } 
    }
    echo"total=".$j;  
    $query4=mysqli_query($con,"DELETE FROM BILL");
}
?>
<br>
<form method="post" action="order.php">
            <input type="submit" value="back" name="con"/>
      </form>
    <form method="post" action="project.html">
        <input type="submit" name="submit" value="confirm"/>
    </form>
</body>
</html>
