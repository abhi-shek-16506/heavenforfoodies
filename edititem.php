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
    .a4s{
      position: relative;
    }
    </style>
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
        <option class="a4s" value="<?php echo $product['item_id'];?>"><?php echo $product['item_namme'];  ?></option>
        <?php  
  }
?>      
<?php
?>
    </select>
    <?php  
  {
    $con = mysqli_connect("localhost","root","","asbackes");
    mysqli_select_db($con,"asbackes");
        $query="SELECT * FROM `items` ";
        $sqlqueryfire = mysqli_query($con,$query);
        ?>
            <table>            
            <tr><center> <input type="text" name="txt" id="txt" value="item no" disabled/><input type="text" name="txt" id="txt" value="item name" disabled/><input type="text" name="txt" id="txt" value="price" disabled/></center>
        </tr>
        </table>
            <?php
        while($product=mysqli_fetch_array($sqlqueryfire))
        {
            $id=$product['item_namme'];
            $query1="SELECT * FROM ITEMS WHERE item_namme='$id' ";
            $query_run=mysqli_query($con,$query1);?>
            <?php
                  while($row =mysqli_fetch_array($query_run))
                  {
                      ?><center>
                     <table><tr>
                    <input type="text" name="txt" id="txt"  value="<?php echo $row['item_id'];?>" disabled/>
                    <input type="text" name="txt" id="txt" value="<?php echo $row['item_namme']; ?>" disabled/>                     
                    <input type="text" name="txt" id="txt" value="<?php echo $row['price']; ?>" disabled/>
                  </tr>  
                </table></center>
                <?php
                  }
        }
        ?>
       
  <?php       
  }
?>
  </div>  
  <form action="" method="post">
      <div class="row">
          <div class="col-md-6">
             <div class="form-group">
              <input type="text" name="txtn" id="txtn" placeholder="enter the name of cookies"/>
              <input type="text" name="txtp" id="txtp" placeholder="enter the nprice"/>
            </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
             <input type="submit" name="fetch" Value="update" />
              <button class="btn btn-outline-primary" name="fetch" type="submit"> <a href="adminmenu.html"> back</a></button>
            </div>
          </div>
      </div>
  </form>
  <?php
  
  if(isset($_POST['fetch']))
  {
    $con = mysqli_connect("localhost","root","","asbackes");
      $id=$_POST['txtn'];
      $query1="SELECT * FROM ITEMS WHERE item_namme='$id' ";
      if($query1)
      {
      $query_run=mysqli_query($con,$query1);
            while($row =mysqli_fetch_array($query_run))
            {
            $a=$_POST['txtp'];
              $q2=mysqli_query($con,"UPDATE ITEMS SET price=".$a."where item_name=".$row['item_namme']);
              if(!$q2)
              {

              }else{
              echo"updated";}
            }
                ?>

          <?php
            }
     
  }
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