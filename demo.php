<?php
$did=$_POST['txt1'];
$dtyp=$_POST['typ'];
$dname=$_POST['txt3'];
$dpass=$_POST['txt4'];
$dquali=$_POST['txt5'];
$dmno=$_POST['txt6'];
$demail=$_POST['txt7'];
	$conn=new mysqli('localhost','root','','e-healthcare');
	$result=$conn->query("insert into add_doctor values('$did','$dtyp','$dname','$dpass','$dquali','$dmno','$demail')");
	if($result)
	{
				echo 'value inserted';
	
	}
?>