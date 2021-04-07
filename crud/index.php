<?php
$servername="localhost";
$username="root";
$password="";
$database="dbnotes";

//establish connection
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
    echo "<br>connection established success";
}
else
{
    echo "<br>connection failed...! Try Again";
}


if($_SERVER['REQUEST_METHOD']=="POST")
{
    $title=$_POST["title"];
    $desc=$_POST["desc"];


$sql="INSERT INTO `note_master` (`title`, `dsc`) VALUES ('$title', '$desc')";
$result=mysqli_query($conn,$sql);

if($result)
{
    echo "<br>inserted success";
}
else
{
    echo "<br>not success".mysqli_error($conn);
}

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>i-Notes: Made Easy</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">i-Notes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <h2>Add Note</h2>
        <form action="/cwsphp/crud/index.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Note Description</label>
                <textarea  type="text" class="form-control" id="desc" name="desc" style="height: 100px"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>




        <!-- Creating Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr No`</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
    $sql="SELECT * FROM `note_master`";
    $result=mysqli_query($conn,$sql);

    if(!$result)
    {
        echo "<br>Problem in query...!".mysqli_connect_error();
    }

    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>
        <th scope='row'>".$row['sno']."</th>
        <td>".$row['title']."</td>
        <td>".$row['dsc']."</td>
        <td>Action</td>
    </tr>";
        // echo "<br> NO is".$row['sno'].".Title is".$row['title']." Description is".$row['dsc'].$row['dt'];
        // echo "<br>";
    }

    ?>

                

            </tbody>
        </table>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>