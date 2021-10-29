<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
span.SAHANA {
      font-family: 'Times New Roman', Times, serif;
      text-decoration-color: crimson;
      color: chocolate;
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
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="paneer.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2><span class="SAHANA">welcome to AS FOODIES</span></h2>
          <p>
          </p>
          
        </div>
      </div>

      <div class="carousel-item">
        <img src="samosa.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2><span class="SAHANA">welcome to AS FOODIES</span></h2>
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="kachori.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2><span class="SAHANA">welcome to AS FOODIES</span></h2>          
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <form action="#" method="POST" enctype="multipart/form-data">
  <div class="bg-light p-5 rounded">
    <div class="card" style="width: 18rem;">
  
           <div class="mb-3">
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" Required>ENTER THE ITEM NAME</label>
            <input type="TEXT" class="form-control" id="INAME" name="INAME" Required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ENTER THE PRICE PER PLATE</label>
            <input type="TEXT" class="form-control" id="INAME" name="IIPRI">
          </div>
          
          <input type="submit" name="save" Value="SUBMIT" >
          <input type="reset" name="reset" Value="RESET" >
        <button type="submit1" class="btn btn-outline-success" ><a href="adminmenu.php"> GO TO MENU</a></button>       
    </div>
  </div>  
  <?php
if(isset($_POST['save']))
{
  $flag=0;
  $con = mysqli_connect("localhost","root","","asbackes");
if(mysqli_connect_errno())
{
  echo"failed to connect". mysqli_connect_error();
  exit();
}else{
  $query4="SELECT * FROM items ";
  $query_ru3=mysqli_query($con,$query4);
  while($compare=mysqli_fetch_array($query_ru3))
  {
    if ($_POST['INAME']==$compare['item_namme']) {
      $flag=1;
    }
}
    ?>
 <!-- $q1= mysqli_query($con,"INSERT INTO ITEMS(`item_namme`,`price`) VALUES ('".$_POST['INAME']."','".$_POST['IIPRI']."')")or die(mysqli_error($con));!-->
<?php
if ($flag=='0') {
	echo "data uploaded";
  $q1= mysqli_query($con,"INSERT INTO ITEMS(`item_namme`,`price`) VALUES ('".$_POST['INAME']."','".$_POST['IIPRI']."')")or die(mysqli_error($con));
 
}else{
	echo "data Not uploaded";
}
}
}

  ?>
    </select>
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