<?php
$u_id=$_POST['email'];
$u_pass=$_POST['pass'];

	$conn=new mysqli('localhost','root','','e-healthcare');
	$result=$conn->query('select * from user_registration');
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			if (!$_POST['email'] | !$_POST['pass']) 
			{
				echo("<SCRIPT LANGUAGE='javaScript'>
				window.alert('you did not complete all of the required fields')
				window.location.href='e-healthcare.html'</SCRIPT>");
				exit();
			}
		  if($row['Email']==$u_id)
		   {
			if($row['Password']==$u_pass)
			    {
					/*header('Location:http://localhost/health/AddDoctor.html');*/
					echo("<SCRIPT LANGUAGE='javaScript'>
					window.alert('Login Succesfull.')
					window.location.href='user.html'</SCRIPT>");
	     			exit();
	         	}
			 else
				{
					/*echo 'You enter Wrong password for '.$admin_id;*/
					echo("<SCRIPT LANGUAGE ='javaScript'>
					window.alert('Wrong id and password, re-entetr id and password')
					window.location.href='e-healthcare.html'</SCRIPT>");
	   				exit();
	     		}
    	    }
		}
	}
?>