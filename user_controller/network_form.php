<?php

error_reporting(0);

function network_form($fname,$mname,$lname,$mother_name,$email,$birth_date,$age,$address,$city,$pin_code,$state,$ssc,$hsc,$Hq,$skills,$work_exp,$exp,$company,$department,$position){

    $connection = mysqli_connect("localhost","root","","taxheal");
    // include('../user_Config/dbconfig.php');
    $query = "INSERT INTO `network_form`(`fname`, `mname`, `lname`, `mother_name`, `email`, `birth_date`, `age`, `address`, `city`, `pin_code`, `state`, `ssc`, `hsc`, `Hq`, `skills`, `work_exp`, `exp`, `company`, `department`, `position`) VALUES ('$fname','$mname','$lname','$mother_name','$email','$birth_date','$age','$address','$city','$pin_code','$state','$ssc','$hsc','$Hq','$skills','$work_exp','$exp','$company','$department','$position')";
    $run = mysqli_query($connection, $query);
    return($run);
}

?>