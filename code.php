<?php 
session_start();
require 'dbcon.php';

if(isset($_POST['delete_history']))
{
	$history_id = mysqli_real_escape_string($con, $_POST['delete_history']);
	$query = "DELETE FROM history WHERE id='$history_id' ";
	$query_run = mysqli_query($con, $query);

	if ($query_run) 
	{
		$_SESSION['message']= "History Deleted Successfully";
		header("Location: index.php");
		exit(0);	
	}
	else
	{
       $_SESSION['message']= "History Not Deleted ";
		header("Location: index.php");
		exit(0);
	}
}

if(isset($_POST['update_history']))
{
	$history_id = mysqli_real_escape_string($con, $_POST['history_id']);
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$address = mysqli_real_escape_string($con,$_POST['address']);
	$password = mysqli_real_escape_string($con,$_POST['password']);

	$query = "UPDATE history SET name='$name', email='$email', phone='$phone', address='$address', password='$password' WHERE id='$history_id'";
	$query_run = mysqli_query($con, $query);

	if ($query_run) 
	{
		$_SESSION['message']= "History Updated Successfully";
		header("Location: index.php");
		exit(0);
	}
	else
	{
       $_SESSION['message']= "History Not Updated";
		header("Location: index.php");
		exit(0);
	}

}

if(isset($_POST['save']))

{
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$address = mysqli_real_escape_string($con,$_POST['address']);
	$password = mysqli_real_escape_string($con,$_POST['password']);

	$query = "INSERT INTO history (name,email,phone,address,password) VALUES ('$name','$email','$phone','$address','$password')";

	$query_run = mysqli_query($con, $query);
	if ($query_run) 
	{
		$_SESSION['message']= "History Added & Registration Successfully. Please Login & Go To Chat App";
		header("Location: history-create.php");
		exit(0);
	}
	else
	{
		$_SESSION['message']= "History Not Added";
		header("Location: history-create.php");
		exit(0);
	}
}


?>