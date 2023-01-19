<?php
session_start();
include_once "../database/db.php";

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
if (!isset($user_id)) {
    echo "
    <script type='text/javascript'>alert('Please login first!');
    window.location='loginPage.php';
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand my-1" href="#" style="color: white;">MiniBlog</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link m-2" aria-current="page" href="homePage.php" style="color: white;">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h5 class="mt-3" style="margin-left: 170px;">Create a Post!</h5>

    <form action="../functions/createPostPageProcess.php" method="POST">
        <div class="mb-3 mx-auto" style="width: 75%;">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"></input>
            <input type="text" class="form-control" id="" name="post_title" placeholder="Enter Title" />
        </div>
        <div class="mb-3 mx-auto" style="width: 75%;">
            <input type="text" class="form-control" id="" name="post_content" placeholder="Enter Content" />
        </div>
        <button type="submit" name="post" class="btn btn-success" style="margin-left: 170px;">POST</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>