
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$cnt=$_POST['cnt'];
$pass2=$_POST['password2'];
	$conn=new mysqli('localhost','root','','e-healthcare');
	$result=$conn->query("insert into user_registration values('$name','$email','$cnt','$passs2')");
	if($result)
	{
				echo 'value inserted';
		//<script type="text/javascript">
		//	alert("User Registration Sucessful");
			//window.location.href="e-healthcare.html";
		//</script>
	}
	//header("Location:http://localhost/health/e-healthcare.html");

?>

<script type="text/javascript">
	alert("User Registration Sucessful");
	window.location.href="e-healthcare.html";

</script>