<?php
    $hostName="db";
    $dbUser="user";
    $dbPassword="password";
    $dbName="alumni_register";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if(!$conn){
        die("someting went wrong;");
    }
    // else{
    //     echo "Connected successfully..";
    // }
?>