
<html>
<head>
<title> WELCOME </title>
<link href= "style.css"type="text/css" rel="stylesheet"/>

  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->


</head>
<body style="background-image:url('pic.jpg');">
<form name="f1" action = "k2.php" method="post">
<div name='t1'>
<table  border='2px' style=" float:left;">
<th style="background:red align:center"> <b>ID</b> </th>
<tr>
<td>1st: <input type='text' name='id1' class="only-varchar" required  maxlength='4'></td>
</tr>
<tr>
<td>2nd: <input type='text' name='id2' class="only-varchar" required maxlength='4'></td>
</tr>
<tr>
<td>3rd: <input type='text' name='id3' class="only-varchar" required maxlength='4'></td>
</tr>
<tr>
<td>4th: <input type='text' name='id4'  class="only-varchar" required maxlength='4'></td>
</tr>
<tr>
<td>5th: <input type='text' name='id5' class="only-varchar" required maxlength='4'></td>
</tr>
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<table border="2px" align="right">
<th> Value </th>
<tr>
<td>1st: <select name="n1">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option><option>5</option><option>6</option></select>
</td>
</tr>
<tr>
<td>2nd: <select name="n2">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option><option>5</option><option>6</option></select></td>
</tr>
<tr>
<td>3rd: <select name="n3">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option><option>5</option><option>6</option></select></td>
</tr>
<tr>
<td>4th: <select name="n4">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option><option>5</option><option>6</option></select></td>
</tr>
<tr>
<td>5th: <select name="n5">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option><option>5</option><option>6</option></select></td>
</tr>
 
</table>
</table>
<table border="2px"align='center'>
<th> Choice </th>
<tr>
<td>1st: <select name="s1">
<option >For</option>
<option >Against</option>
</select>
</td>
</tr>
<tr>
<td>2nd:<select name="s2"><option>For</option>
<option>Against</option>
</select>
</td>
</tr>
<tr>
<td>3rd:<select name='s3'><option>For</option>
<option value="c5">Against</option></select>
</td>
</tr>
<tr>
<td>4th :<select name="s4"><option>For</option>
<option >Against</option></select>
</td>
</tr>
<tr>
<td>5th :<select name="s5"><option>For</option>
<option>Against</option></select>
</td>
</tr> 
</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<center><input type="submit" value="Submit" name="sub"><center>
</form>
<script>
$(document).ready(function(){
  $(".only-varchar").keypress(function (e) {
     if (e.which != 45 && e.which != 95 && e.which !=32 && (e.which < 96 || e.which > 122) && (e.which<48 || e.which>57) && (e.which<65 || e.which>90) ) {
               return false;
    }
   });
});
</script>
</body>
</html>
