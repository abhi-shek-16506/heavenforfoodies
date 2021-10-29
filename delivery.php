<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <center>
          <form action="" method="post">enter the place
  <input type="text" id="text1" name="text1"/>
  <input type="submit" name="save" Value="SUBMIT">
  </form>
<?php
if(isset($_POST['save']))
{
    echo $_POST['text1'];
    $con=mysqli_connect("localhost","root","","asbackes");
    $del=mysqli_query($con,"SELECT * FROM `cust` WHERE adderss=".$_POST['text1']);
    if($del)
    {
    while(mysqli_fetch_array($del))
{?>
    <div class="col-md-6">
         <div class="form-group">
         <table>
         <tr><td><input type="text" name="txti" id="txt" value="<?php echo $del['cphone']; ?>" disabled/></td>
          <td><input type="text" name="txtn" id="txt" value="<?php echo $del['cname']; ?>" disabled/></td>
          <td><input type="text" name="txtp" id="txt" value="<?php echo $del['iname'];?>" disabled/></td>          
          <td><input type="text" name="txtp" id="txt" value="<?php echo $del['iprice'];?>" disabled/></td>         
          <td><input type="text" name="iqty" id="iqty" value="<?php echo  $del['iqty']?>" disabled/></td>
          <td><input type="text" name="txtt" id="txtt" value="<?php echo $del['itotal']?>" disabled/></td></tr>
          </table>
        </div>
      </div><?php
 $q=mysqli_query($con,"DELETE FROM cust where `cphone`=".$row['cphone']);
}
}
else
{
    echo"\n place not found";
}
}
?>

</center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>