<?php
$admin_id=$_POST['aid'];
$admin_pass=$_POST['apass'];

	$conn=new mysqli('localhost','root','','e-healthcare');
	$result=$conn->query('select * from admin_login');
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			if (!$_POST['aid'] | !$_POST['apass']) 
			{
				echo("<SCRIPT LANGUAGE='javaScript'>
				window.alert('you did not complete all of the required fields')
				window.location.href='login.html'</SCRIPT>");
				exit();
			}
		  if($row['Email']==$admin_id)
		   {
			if($row['Password']==$admin_pass)
			    {
					/*header('Location:http://localhost/health/AddDoctor.html');*/
					echo("<SCRIPT LANGUAGE='javaScript'>
					window.alert('Login Succesfull.')
					window.location.href='AddDoctor.html'</SCRIPT>");
	     			exit();
	         	}
			 else
				{
					/*echo 'You enter Wrong password for '.$admin_id;*/
					echo("<SCRIPT LANGUAGE ='javaScript'>
					window.alert('Wrong id and password, re-entetr id and password')
					window.location.href='login.html'</SCRIPT>");
	   				exit();
	     		}
    	    }
		}
	}
?>