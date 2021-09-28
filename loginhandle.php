<?php
include 'includes/dbhandler.php';

ob_start();
if(isset($_POST["login"]))
{
	$name=$_POST["uname"];
	$pw=$_POST["pwd"];
	if($name == "")
	{
		header('location:error.php');
	}
	else if ($pw == "")
	{
		header('location:error.php');
	}
	else
	{
	 $query=mysqli_query($conn,"SELECT * FROM login WHERE username='".$name."' && password='".$pw."'");
	 $nor=mysqli_num_rows($query);
     //echo $nor;
	 if($nor=="")
	 {
        header('location:error.php');
	 }
	 else
	 {
		$rec=mysqli_fetch_assoc($query);
		if($rec["user_type"]=="admin")
		{  
		    header('location:admin.php');
        }				 
		else
		{
		    header('location:error.php');
		}
		mysqli_close($conn);
	 }
	}
}
ob_end_flush();
?>