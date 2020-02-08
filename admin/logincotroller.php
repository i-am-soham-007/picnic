<?php
session_start();
include 'config.php';
extract($_POST);



if(isset($login))
{
	$pass = md5($password);
	$q = mysqli_query($con,"SELECT * FROM `admin` WHERE username ='$username'");

	if(mysqli_num_rows($q) > 0)
	{
		$qq = mysqli_query($con,"SELECT * FROM `admin` WHERE username ='$username' AND password ='$pass'");

		if(mysqli_num_rows($qq) > 0)
		{
			$result =mysqli_fetch_array($qq);
			$id= $result['id'];
			$_SESSION['id'] = $id;

			$msg ="Login Successfull";
			header("location:index.php?msg=$msg");			

		}else{
				$msg ="Password Wrong";
				header("location:login.php?msg=$msg");			
		}

	}else{

		$msg ="Username or Password Wrong ";
		header("location:login.php?msg=$msg");

	}
}
?>