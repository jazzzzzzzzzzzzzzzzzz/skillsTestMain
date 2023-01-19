<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand my-1" href="#" style="color: white;">MiniBlog</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link m-2" aria-current="page" href="#" style="color: white;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card mx-auto w-75 text-center my-2 bg-light">
        <div class="card-header d-flex justify-content-start bg-light">
            Login
        </div>
        <div class="card-body w-100">
            <form action="../functions/loginProcess.php" method="POST">
                <input class="form-control" type="email" name="email" placeholder="Enter Email" /> <br>
                <input class="form-control" type="password" name="password" placeholder="Enter Password" /> <br>
                <div class="d-flex justify-content-start">
                    <button class="btn btn-success mx-2" type="submit" name="login">LOGIN</button>
                    <a class="btn btn-success" href="index.php" name="register">REGISTER</a>
                </div>
            </form>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>