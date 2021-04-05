<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>PHP Form</title>
    
    </script>
  </head>
  <body>
  <div class="menu">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </div>

<?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $desc=$_POST['desc'];

    // echo $name."<br>";
    // echo $email;
  }

  // Connecting to Database
  $servername='localhost';
  $username='root';
  $password="";
  $database="dbform";

  //create connection
  $con=mysqli_connect($servername,$username,$password,$database);

  if($con)
  {
    echo "connection is success";
  }
  else
  {
    die("Sorry.. failed".mysqli_connect_error());
  }

  /// Submit data to sql and Execute Query
  $sql="INSERT INTO `f_tb1` (`name`, `email`, `dsc`,`dt`) VALUES ('$name', '$email', '$desc', current_timestamp());"
  $result= var_dump(mysqli_query($con,$sql));

  //success msg if inserted
  if($result)
  {
      echo "success";
  }
  else
  {
    echo "not success";
  }


?>


<h1>Contact for your Concern</h1>
<br>
  <div class="form">
  <form action="/cwsphp/18form.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <input type="textarea" name="desc" class="form-control" id="desc" cols="6" rows="5">
  </div>


  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  </div>



    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>