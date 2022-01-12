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
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Script&display=swap" rel="stylesheet">

</head>

<body style="background-color:#121212;">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Prayash</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>

                </ul>
            </div>
            <span><button class="btn btn-outline-primary mx-3">LogIn</button></span>
            <span><button class="btn btn-outline-primary ">SignUp</button></span>

        </div>
    </nav>


    <div class="d-none d-lg-block container  w-25">
        <form class="mt-4 text-primary  ">
            <div class="mb-3  ">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

            </div>
            <div class="mb-3  ">
                <label class="form-label">Username</label>
                <input type="username" class="form-control" id="username" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="text-center">
                <button type="submit" id="btn" class="btn btn-success ">Submit</button>
            </div>
        </form>
    </div>
    <div class="d-none d-md-block d-lg-none container  w-50">
        <form class="mt-4 text-primary  ">
            <div class="mb-3  ">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

            </div>
            <div class="mb-3  ">
                <label class="form-label">Username</label>
                <input type="username" class="form-control" id="username" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success ">Submit</button>
            </div>
        </form>
    </div>
    <div class="d-md-none container">
        <form class="mt-4 text-primary  ">
            <div class="mb-3  ">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

            </div>
            <div class="mb-3  ">
                <label class="form-label">Username</label>
                <input type="username" class="form-control" id="username" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success ">Submit</button>
            </div>
        </form>

    </div>
    </div>
    </div>
    <div class="footer-copyright text-center py-3 text-warning">© 2021 Copyright: Prayas

    </div>

    <!-- JavaScript Bundle  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <?php
   $a = rand(00000 , 999990);
   echo $a;
   ?>



</body>

</html>