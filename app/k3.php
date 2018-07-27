<?php
include('connection.php');
?>




<?php
$query1 = "select id , value from  stud where choice='For'";
$query2 = "select id , value from stud where choice='Against'";
$query3 = "select * from stud where value IN(select value from stud group by value having count(value)>1 )";

$data1 = mysql_query($query1);
$data2 = mysql_query($query2);
$data3 = mysql_query($query3);

$total1 = mysql_num_rows($data1);
$total2 = mysql_num_rows($data2);
$total3 = mysql_num_rows($data3);



if($total1!=0 )
{
	?>
	<body style="background-image:url('pic.jpg')";>
	<form action="k4.php" method="post" >
	<table border="2" style="float:left;width:300px ;">
	<tr>
	<th colspan="2">For</th>
	</tr>
	<tr>
	<td>ID</td>
	<td>Value</td>
	</tr>
	
	
	<?php
$sum_for=0;	
while(($result1=mysql_fetch_assoc($data1)))
{
	echo "<tr>
	<td>".$result1['id']."</td>
	<td>".$result1['value']."</td>
	</tr>
	";
	$sum_for=$sum_for+$result1['value'];
}
}
else
{
	echo "No record found";
}

?>
<tr>
	<td rowspan="1">Sum</td>
	<td><?php echo $sum_for; ?></td>
	</tr>
</table>
<?php
$sum_ag = 0;
if($total2!=0)
{
	?>
	<table border="2" align="right" style="width:300px;">
	<tr>
	<th colspan="2">Against</th>
	</tr>
	<tr>
	<td>ID</td>
	<td>Value</td>
	</tr>
	<tr>
	
<?php
while(($result2=mysql_fetch_assoc($data2)))
{
	echo "<tr>
	<td>".$result2['id']."</td>
	<td>".$result2['value']."</td>
	</tr>
	";
	$sum_ag=$sum_ag+$result2['value'];
}
}
else
{
	echo "No record found";
}
?>
<tr>
	<td>Sum</td>
	<td ><?php echo $sum_ag ;?></td>
	</tr>
</table>

<?php
if($total3!=0)
{
	?>
	
	<table border="2" align="center" style=" width:200px;">
	<tr>
	<th colspan="2">Closed</th>
	</tr>
	<tr>
	<td>ID</td>
	<td>Value</td>
	</tr>

<?php
while(($result3=mysql_fetch_assoc($data3)))
{
	echo "<tr>
	<td>".$result3['id']."</td>
	<td>".$result3['value']."</td>
	</tr>
	";
}

}
else{
	echo "No record found";
}

?>
</table>


<br><br><br><br><br><br><br><br><br>

<center><input type="submit" value="Reset" name="reset" /></center>
</form>
</body>
