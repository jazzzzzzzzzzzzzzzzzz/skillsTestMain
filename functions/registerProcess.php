<?php
session_start();
include_once "../database/db.php";

if (isset($_POST['register'])) {

   $username = mysqli_real_escape_string($dbconn, $_POST['username']);
   $email = mysqli_real_escape_string($dbconn, $_POST['email']);
   $password = mysqli_real_escape_string($dbconn, $_POST['password']);
   $cpassword = mysqli_real_escape_string($dbconn, $_POST['cpassword']);

   $insertRegisteredAccount = mysqli_query($dbconn, "INSERT INTO `userAccount` (user_id, username, email, password, cpassword) VALUES ('',
   '{$username}', '{$email}', '{$password}', '{$cpassword}')");

   if ($insertRegisteredAccount) {
       $sessionQuery = mysqli_query($dbconn, "SELECT * FROM `userAccount` WHERE email = '{$email}'");
       if (mysqli_num_rows($sessionQuery) > 0) {
           $sessionResult = mysqli_fetch_assoc($sessionQuery);
           $_SESSION['username'] = $sessionResult['username'];
           $_SESSION['email'] = $sessionResult['email'];
           header("Location: ../template/loginPage.php");
       }
   }
} else {
   echo "not isset";
}


