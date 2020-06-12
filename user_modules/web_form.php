<?php

session_start();
include('../user_controller/web_form.php');

if(isset($_POST['web_submit']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $mother_name = $_POST['mother_name'];
    $email = $_POST['email'];
    $birth_date = $_POST['bdate'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin_code = $_POST['code'];
    $state = $_POST['state'];
    $ssc = $_POST['ssc'];
    $hsc = $_POST['hsc'];
    $Hq = $_POST['edu'];
    $skills = $_POST['skills'];
    $work_exp = $_POST['workexp'];
    $exp = $_POST['exp'];
    $company = $_POST['company'];
    $department = $_POST['department'];
    $position = $_POST['position'];

    $run = web_form($fname,$mname,$lname,$mother_name,$email,$birth_date,$age,$address,$city,$pin_code,$state,$ssc,$hsc,$Hq,$skills,$work_exp,$exp,$company,$department,$position);

    if($run)
    {
        echo '<script type="text/javascript">alert ("We Got Your Application");';
		echo 'window.location.href = "../index.php";';
		echo '</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert ("Something Went Wrong Try Again Later");';
		echo 'window.location.href = "../index.php";';
		echo '</script>';
    }

}



?>