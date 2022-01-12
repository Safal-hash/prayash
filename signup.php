<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
</head>

<body style="background-color:#121212;">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="#" style="font-family: 'The Nautigal', cursive; font-size: 35px;">Prayash</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form class="d-flex d-lg-none">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li>
                        <span class="nav-link d-lg-none">LogIn</button></span>
            
                    </li>
                    <li>
                        <span class="nav-link d-lg-none">SignUp</button></span>
                    </li>
                    <li class="nav-item">
                        
                    </li>

                </ul>
            </div>
            <form class="d-none d-lg-flex mx-4">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Search</button>
              </form>
              


            <span><a class="text-decoration-none" href=""><button class="btn btn-outline-primary d-none d-lg-block mx-2 ">LogIn</button></a></span>
            <span><a class="text-decoration-none" href=""><button class="d-none d-lg-block btn btn-outline-primary mx-3">SignUp</button></a></span>

        </div>
    </nav>
<div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$email = $_POST['email'];
$pass = $_POST['password'];
$uname = $_POST['username'];

echo $email;

/*$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO user (Email, username, Password)
VALUES ('$email', '$uname','$pass' )";

if (mysqli_query($conn,$sql)){
    echo "values added succesfully";
}
else{
    echo "tujhse nahi hoga lawdeya";
}*/

?>

<div class="footer-copyright text-center py-3 text-warning">© 2021 Copyright: Prayash

    </div>
 <!-- JavaScript Bundle  -->


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    </body>
</html>   