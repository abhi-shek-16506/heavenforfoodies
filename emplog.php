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
    
    <form action="#" method="post" enctype="multipart/form-data">
    <div class="bg-light p-5 rounded">
      <div class="card" style="width: 18rem;">
        <form action="/auth/login" method="POST">
  
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">enter id</label>
              <input type="text" class="form-control" id="text1" name="text1">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="num" name="num">
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

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$qry = mysqli_query($con,"SELECT * FROM employee where eid=".$_POST['text1']);

if (!$qry) {
	echo "Account nummber not found";
}else{
		$qry1 = mysqli_fetch_array($qry, MYSQLI_ASSOC);	
}
if($qry1['num']!=$_POST['num'])
{
  echo "incorrect password";
}
else
{
  ?><button type="submit1" class="btn btn-outline-success" ><a href="adminmenu.php"> Submit</a></button>
  <?php
  echo "correct password";
if (isset($_POST['save'])) {

	session_start();
		$_SESSION['name'] = $_POST['text1'];
	
	if (!isset($_SESSION['count'])) {
		$_SESSION['count'] = 1;
		echo "<b>".$_SESSION['name']."<b><br><br><br>";
		echo "This is your first visit";
	}else{
		$_SESSION['count']++;

		echo "<b>".$_SESSION['name']."<b><br><br><br>";
		echo "Your Visiting count is <b>".$_SESSION['count'];
	}
	
}}}
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