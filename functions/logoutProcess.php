<?php 
session_start();
include_once "../database/db.php";

    if (isset($_GET['logout_id'])){
        $checkID = mysqli_query($dbconn, "SELECT * FROM `userAccount` WHERE user_id = '$_GET[logout_id]'");

        if (mysqli_num_rows($checkID) > 0){
            session_unset();
            session_destroy();
            header("location: ../template/loginPage.php");
        }
    }

?>