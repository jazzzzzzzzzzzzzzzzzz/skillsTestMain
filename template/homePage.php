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
    <title>MiniBlog</title>
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


    <?php

    $getPost = mysqli_query($dbconn, "SELECT post_id, post_title, post_content, DATE_FORMAT(post_date, '%e%th %M of %Y %h:%i:%s %p') as post_date FROM newpost WHERE user_id = $user_id");
    if (mysqli_num_rows($getPost) > 0) {
        while ($fetch = mysqli_fetch_array($getPost)) {
    ?>
            <div class="card mx-auto my-2 w-50" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fetch['post_title']; ?></h5>
                    <p class="card-text"><?php echo $fetch['post_content']; ?></p>
                    <p class="card-text"><?php echo $fetch['post_date']; ?> </p>
                    <form action="../functions/deletePageProcess.php" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                        <input type="hidden" name="post_id" value="<?php echo $fetch['post_id']; ?>" />
                        <button type="submit" name="delete" class="btn btn-danger">DELETE</button>
                        <a href="editPage.php?edit_id=<?php echo $fetch['post_id']; ?>&post_title=<?php echo $fetch['post_title']; ?>&post_content=<?php echo $fetch['post_content']; ?>" class="btn btn-success">EDIT </a>
                    </form>
                    
                </div>
            </div>
    <?php
        }
    }else {
        echo "<h1 class='text-center'>You don't have any post yet</h1>";
    }
    ?>
    <div class="card mx-auto w-50" style="width: 18rem;">
        <div class="card-body">
            <a href="createPostPage.php" class="btn btn-primary">CREATE NEW POST </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>