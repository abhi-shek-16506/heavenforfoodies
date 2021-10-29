<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <style type="text/css">
    .container {
      position: relative;
      width: 200%;
      max-width: 1500px;
    }

    .container img {
      width: 100%;
      height: auto;
    }

    .container .btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background: transparent;
      color: white;
      font-weight: bold;
      font-family: serif;
      font-size: 25px;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    }

    .container .btn1 {
      position: absolute;
      top: 50%;
      left: 20%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background: transparent;
      color: white;
      font-size: 25px;
      font-weight: bold;
      padding: 12px 24px;
      font-family: serif;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    }

    .container .btn2 {
      position: absolute;
      top: 60%;
      left: 30%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background: transparent;
      color: white;
      font-size: 25px;
      font-weight: bold;
      padding: 12px 24px;
      font-family: serif;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    }

    .container .btn3 {
      position: absolute;
      top: 60%;
      left: 60%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background: transparent;
      color: white;
      font-size: 25px;
      font-weight: bold;
      padding: 12px 24px;
      font-family: serif;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    }

    a {

      animation: example 5s linear 2s infinite alternate;
      animation-direction: reverse;
      size: 50px;
      align-content: center;
    }

    .container .btn4 {
      position: absolute;
      top: 50%;
      left: 70%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background: transparent;
      color: white;
      font-size: 25px;
      font-weight: bold;
      padding: 12px 24px;
      font-family: serif;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    }

    .container .btn5 {
      position: absolute;
      top: 10%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background: transparent;
      color: white;
      font-size: 25px;
      font-weight: bold;
      padding: 12px 24px;
      font-family: serif;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    }
u{
  animation: example 5s linear 2s infinite alternate;
      animation-direction: reverse;
      color:"blue";
}
    .container .btn:hover,
    .btn1:hover,
    .btn2:hover,
    .btn3:hover,
    .btn4:hover,
    .btn5:hover {
      background-color: black;
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
  </style>
  <title>Hello, world!</title>
</head>
<body >
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stavkpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <div class="modal" tabindex="-1" id="adminModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-footer">
          <form method="" action="post">
            <div class="mb-3">
              <div id="emailHelp" class="form-text">Only admin can add number of employees to the company . Click yes if you are a admin</div>
            </div>            
            <button type="submit" class="btn btn-outline-danger" name="save" ><a href="admincheck.php">yes</a></button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  <div class="modal " tabindex="-1" id="custModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary"> <A href="cake.php">
              order </A></button>
          <button type="button" class="btn btn-outline-primary"><A href="viewhomedelivery.php">order(with home
              delivery</A></button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" tabindex="-1" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary"> <A href="edititem.php">
              EDIT DETAILS </A></button>
              <button type="button" class="btn btn-outline-primary"><A href="additem.php">ADD ITEM</A></button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <img class="bg-img" src="snacks.jpg" alt="Snow" style="width:100%">
    <button type="button" class="btn btn-outline" data-bs-toggle="modal" data-bs-target="#loginModal"><A href="#"><span> item</span></A> </button>
    <button type="button" class="btn1 btn-outline" data-bs-toggle="modal" data-bs-target="#custModal"><u><span>view(order)</span></u> </button>
    <button type="button" class="btn2 btn-outline" data-bs-toggle="modal" data-bs-target="#adminModal"><u><span>add employee</span></u></button>
    <button type="button" class="btn3 btn-outline"><span><a href="STOCK.PHP">view stock</a></span></button>
    <button type="button" class="btn4 btn-outline"><span><a href="bill.php">bill</a></span></button>
    <button type="button" class="btn5 btn-outline"><span><a href="project.html">logout</a></span></button>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>