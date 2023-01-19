<?php 
session_start();
include_once "../database/db.php";

$email = mysqli_real_escape_string($dbconn, $_POST['email']);
$password = mysqli_real_escape_string($dbconn, $_POST['password']);

$getUserAccount = mysqli_query($dbconn, "SELECT * FROM `userAccount` WHERE email = '{$email}' AND password = '{$password}'");

    if (mysqli_num_rows($getUserAccount) > 0){
        $accountResult = mysqli_fetch_assoc($getUserAccount);
        $_SESSION['user_id'] = $accountResult['user_id'];
        $_SESSION['username'] = $accountResult['username'];

        header("Location: ../template/homePage.php");
    }
?>