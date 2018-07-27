<?php
include('connection.php');
if(isset($_POST['sub']))
{
	$id1=$_POST['id1'];
	$id2=$_POST['id2'];
	$id3=$_POST['id3'];
	$id4=$_POST['id4'];
     $id5 =$_POST['id5'];
     $n1 = $_POST['n1']	;
	 $n2 = $_POST['n2']	; 
	 $n3 = $_POST['n3']	; 
	 $n4 = $_POST['n4']	; 
	 $n5 = $_POST['n5']	; 
	 $s1 = $_POST['s1'];
	 $s2 = $_POST['s2'];
	 $s3 = $_POST['s3'];
	 $s4 = $_POST['s4'];
	 $s5 = $_POST['s5'];
	 $query = "insert into stud(id,value,choice) values('$id1','$n1','$s1'),('$id2','$n2','$s2'),('$id3','$n3','$s3'),('$id4','$n4','$s4'),
	 ('$id5','$n5','$s5')";
	 $data=mysql_query($query);
	 if(!$data)
	 {
		 die('Could not execute query'.mysql_error());
		
	 }
	 else
	 {
		 header('location:k3.php');
	 }
}


?>