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
        background-color: black ;
      }
    span {
      animation: example 5s linear 2s infinite alternate;
      animation-direction: reverse;
      size: 50px;
      align-content: center;
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
    .btn5:hover {
      background-color: black;
    }
    </style>
  </head>
  <body><center>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
        <marque> <h2><span class="SAHANA"><center>welcome to AS FOODIES</center> </span></h2></marque>
        </div>
      </nav><center>
    <form action="#" method="post" enctype="multipart/form-data">
    <div class="bg-light p-5 rounded">
      <div class="card" style="width: 18rem;">
        <form action="/auth/login" method="POST">
  
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">enter id</label>
              <input type="text" class="form-control" id="text" name="text">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="Password" name="password">
            </div>
           
  
            <a href="project.html"><input type="submit" name="save" Value="SUBMIT"></a>
        </form>
      </div>
    </div>
   
    
    </div>
  </form>
  <?php
if (isset($_POST['save'])) {

	$con = mysqli_connect("localhost","root","","asbackes");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$qry = mysqli_query($con,"SELECT * FROM adminlogin where id=".$_POST['text']);
if (!$qry) {
	echo "Account nummber not found";
}else{
		$qry1 = mysqli_fetch_array($qry, MYSQLI_ASSOC);	
}
if($qry1['name']!=$_POST['password'])
{
  echo "incorrect password";
}
else
{?>
  <button type="submit1" class="btn btn-outline-success" ><a href="adminmenu.php"> Submit</a></button>
<?php
  if (isset($_POST['save'])) {

    session_start();
      $_SESSION['name'] = $_POST['text'];
    
    if (!isset($_SESSION['count'])) {
      $_SESSION['count'] = 1;
      echo "<b>".$_SESSION['name']."<b><br><br><br>";
      echo "This is your first visit";
    }else{
      $_SESSION['count']++;
  
      echo "<b>".$_SESSION['name']."<b><br><br><br>";
      echo "Your Visiting count is <b>".$_SESSION['count'];
  echo "correct password".$qry1['name'];
}}
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
    </center>
  </body>
</html>