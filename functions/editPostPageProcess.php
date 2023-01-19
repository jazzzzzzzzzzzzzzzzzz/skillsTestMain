<?php 
session_start();
$user_id = $_SESSION['user_id'];
include_once "../database/db.php";

$post_id = $_POST['post_id'];
$user_id = $_POST['user_id'];
$post_title = $_POST['post_title'];
$post_content = $_POST['post_content'];
$post_date = date_default_timezone_set('Asia/Manila');
$post_date = date("Y-m-d H:i:s");
$updatePost = mysqli_query($dbconn, "UPDATE `newpost` SET `post_title` = '$post_title', `post_content` = '$post_content', `post_date` = '$post_date' WHERE user_id = '$user_id' AND post_id = '$post_id'");

if ($updatePost){
    header("Location: ../template/homePage.php");
}

?>