<?php

error_reporting(0);

function app_form($fname,$mname,$lname,$mother_name,$email,$birth_date,$age,$address,$city,$pin_code,$state,$ssc,$hsc,$Hq,$skills,$work_exp,$exp,$company,$department,$position){

    include('../user_Config/dbconfig.php');
    $query = "INSERT INTO `app_form`(`fname`, `mname`, `lname`, `mother_name`, `email`, `birth_date`, `age`, `address`, `city`, `pin_code`, `state`, `ssc`, `hsc`, `Hq`, `skills`, `work_exp`, `exp`, `company`, `department`, `position`) VALUES ('$fname','$mname','$lname','$mother_name','$email','$birth_date','$age','$address','$city','$pin_code','$state','$ssc','$hsc','$Hq','$skills','$work_exp','$exp','$company','$department','$position')";
    $run = mysqli_query($connection, $query);
    return($run);
}

?>