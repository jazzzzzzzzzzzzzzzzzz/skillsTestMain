
<?php
session_start();
?>

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
                        <a class="nav-link m-2" aria-current="page" href="loginPage.php" style="color: white;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<h4 class="text-center mt-3 fw-normal">Registration</h4>
    <div class="card mx-auto w-75 text-center my-2 bg-light">
        <div class="card-header d-flex justify-content-start bg-light">
            See the Registration Rules
        </div>
        <div class="card-body w-100">
   <form  action="../functions/registerProcess.php" method="POST">
       <input class="form-control" type="text" name="username" placeholder="Enter Username" /> <br>
       <input class="form-control" type="email" name="email" placeholder="Enter Email" /><br>
       <input class="form-control" type="password" name="password" placeholder="Enter Password" /><br>
       <input class="form-control" type="password" name="cpassword" placeholder="Enter Confirm Password" /><br>
       <button class="btn btn-success" type="submit" name="register">REGISTER</button>
   </form>
   <h6 class="d-flex justify-content-start my-1">Return to the&nbsp;<a href="loginPage.php" class="text-warning">LOGIN PAGE</a></h6>
   </div>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>


</html>
