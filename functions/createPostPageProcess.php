<?php
session_start();
require_once "../database/db.php"; 

if (isset($_POST['post'])){
    
    $user_id = $_POST['user_id'];
    $post_title = $_POST['post_title'];
    $post_content = $_POST['post_content'];
    $post_date = date_default_timezone_set('Asia/Manila');
    $post_date = date("Y-m-d H:i:s");
 
    $insertPost = mysqli_query($dbconn, "INSERT INTO `newpost` (post_id, user_id, post_title, post_content, post_date) VALUES ('', '{$user_id}',
    '{$post_title}', '{$post_content}', '{$post_date}')");

    if ($insertPost) {
        header("Location: ../template/homePage.php");
    }

}


?>