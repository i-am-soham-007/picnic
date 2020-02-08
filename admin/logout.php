<?php
session_start();
session_unset();
session_destroy();

if($_SESSION['id'])
{
	echo "Some problem in Logout";
}else{
	$msg ="Logout_successfully";
	header("location:login.php?msg='$msg'");
	}
?>