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
            <a class="navbar-brand" href="#" style="color: white;">MiniBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link disabled m-2" aria-current="page" href="#" style="color: white;">Hi <?php echo $username; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2" aria-current="page" href="#" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active m-2" aria-current="page" href="../functions/logoutProcess.php?logout_id=<?php echo $user_id; ?>" style="color: white;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h5 class="mt-3" style="margin-left: 170px;">Create a Post!</h5>
    <form action="../functions/editPostPageProcess.php" method="POST">
        <div class="mb-3 mx-auto" style="width: 75%;">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"></input>
            <input type="hidden" name="post_id" value="<?php echo $_GET['edit_id']; ?>"></input>
            <h6>Enter New Title</h6>
            <input type="text" class="form-control" id="" name="post_title" value="<?php echo $_GET['post_title']; ?>" />
        </div>
        <div class="mb-3 mx-auto" style="width: 75%;">
            <h6>Enter New Content</h6>
            <input type="text" class="form-control" id="" name="post_content" value="<?php echo $_GET['post_content']; ?>" />
        </div>
        <button type="submit" name="post" class="btn btn-success" style="margin-left: 170px;">SAVE</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>