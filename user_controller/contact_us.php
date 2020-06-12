<?php

error_reporting(0);

function contact_us($name, $email, $message){
    include('../user_Config/dbconfig.php');
    $query = "INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
    $run = mysqli_query($connection, $query);

    return($run);
}


?>