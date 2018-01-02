<?php
$d_id=$_POST['doc'];
$d_pass2=$_POST['pass2'];

	$conn=new mysqli('localhost','root','','e-healthcare');
	$result=$conn->query('select * from add_doctor');
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			if (!$_POST['doc'] | !$_POST['pass2']) 
			{
				echo("<SCRIPT LANGUAGE='javaScript'>
				window.alert('you did not complete all of the required fields')
				window.location.href='e-healthcare.html'</SCRIPT>");
				exit();
			}
		  if($row['Email_ID']==$d_id)
		   {
			if($row['Password']==$d_pass2)
			    {
					/*header('Location:http://localhost/health/AddDoctor.html');*/
					echo("<SCRIPT LANGUAGE='javaScript'>
					window.alert('Login Succesfull.')
					window.location.href='doctor.html'</SCRIPT>");
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