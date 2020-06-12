<?php


session_start();
include('../user_controller/contact_us.php');

// ! Contact us

if(isset($_POST['contact_submit']))
{
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['message'];

    $run = contact_us($name, $email, $message);

    if($run)
    {
        echo '<script type="text/javascript">alert ("Thank You For Contacting Us.");';
		echo 'window.location.href = "../index.php";';
		echo '</script>';
		
    }
    else
    {
        echo '<script type="text/javascript">alert ("Something Went Wrong Try Again Later.");';
		echo 'window.location.href = "../index.php";';
		echo '</script>';
		
    }

}

?>