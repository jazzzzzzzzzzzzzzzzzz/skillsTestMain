<?php 
include_once "../database/db.php";

$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];

    if (isset($_POST['delete'])){
        $deletePost = mysqli_query($dbconn, "DELETE FROM `newpost` WHERE post_id = '$post_id' AND user_id = '$user_id'");

        if ($deletePost) {
            header("Location: ../template/homePage.php");
        }
    } 

?>