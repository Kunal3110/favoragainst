<?php
include('connection.php');
if(isset($_POST['reset']))
{
	$query = "delete  from stud";
	$data=mysql_query($query);
	if(!$data)
	{
		die('COuld not execute query'.mysql_error());
	}
	else
	{
		header('location:k1.php');
	}
	
	
	
	
}


?>