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
  <body>
    <h1>Hello, world!</h1>

    <div class="cols-sm-l2 form-group">
    <label for="sel" class="abhi">select cookies</label>
    <select name="cookies" id="sel" class="form-control">
        <?php      
        $con=mysqli_connect("localhost","root");
        mysqli_select_db($con,"asbackes");
        $query="SELECT * FROM `items` ";
        $sqlqueryfire = mysqli_query($con,$query);
        while($product=mysqli_fetch_array($sqlqueryfire))
        {
          ?>
        <option id="<?php echo $product['item_namme'];?>" value="<?php echo $product['item_namme'];?>"><?php echo $product['item_namme'];  ?></option>
        <?php  
  }
?>
    </select>
  </div>  
   <form action="" method="post">
   <div class="col-md-6">
             <div class="form-group">
              <input type="text" name="price" id="price" value="" placeholder="enter quantity"/>
            </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
              <input type="text" name="text" id="text" value="" placeholder="item"/>
            </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
              
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="submit" class="btn btn-danger" name="fetch1">ADD</button>
  <button type="submit" class="btn btn-warning"><a href="adminmenu.php">GO BACK</a></button>
  <button type="button" class="btn btn-outline-light"><a href="printbill.php"> CONFIRM</a></button> 
</div>
            </div>
          </div>
</form>
<?php
  if (isset($_POST['fetch1'])) {

    $con2 = mysqli_connect("localhost","root","","asbackes");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  $id1=$_POST['text'];
  $query2="SELECT * FROM ITEMS WHERE item_namme='$id1' ";
  $query_run1=mysqli_query($con2,$query2);
 
    $qry1 = mysqli_fetch_array($query_run1, MYSQLI_ASSOC);
    $a=$qry1['price']*$_POST['price'];
    $query4="SELECT * FROM BILL ";
  $query_ru3=mysqli_query($con,$query4);
  $compare=mysqli_fetch_array($query_ru3);
    if ($_POST['text']==$compare['itemname']) {
      echo"please check entry";
    }
    else
    {
      $upqry = mysqli_query($con2,"INSERT INTO `BILL`(`itemname`,`price`,`quantity`,`total`) VALUES('".$_POST['text']."','".$qry1['price']."','".$_POST['price']."','".$a."')")or die(mysqli_error($con));
      if($upqry){
        
        echo $_POST['text']." total=".($qry1['price']*$_POST['price']);
      }else{
        echo "something went wrong";
      }
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
          <tr><td><input type="text" name="txtn" id="txt" value="<?php echo $row['itemname']; ?>"  disabled /></td>
          <td><input type="text" name="txtp" id="txtp" value="<?php echo $row['price'];?>" disabled/></td>
          <td><input type="text" name="iqty" id="iqty" value="<?php echo  $row['quantity']?>" disabled/></td>
          <td><input type="text" name="txtt" id="txtt" value="<?php echo  $row['total']?>" disabled/></td></tr>
          </table>
        </div>
      </div>
      <?php       
      }
      echo"total=".$j;
}}
?> 

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