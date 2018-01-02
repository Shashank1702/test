<?php
mysql_connect("localhost","root","") or die("mysql connection is failure.");
mysql_select_db("e-healthcare") or die("Database does not exists.");


if (isset($_POST['submit'])){
	$username=mysql_escape_string($_POST['did']);
	$password=mysql_escape_string($_POST['pass2']);
	if (!$_POST['did'] | !$_POST['pass2']) {
		echo("<SCRIPT LANGUAGE='javaScript'>
			window.alert('you did not complete all of the required fields')
			window.location.href='e-healthcare.html'</SCRIPT>");
		exit();
	}
    $sq = mysql_query(" SELECT * FROM 'add_doctor' WHERE 'Email_ID' = '$username' AND 'Password'='$password'");
    if (mysql_num_rows($sq) > 0) {
    	echo("<SCRIPT LANGUAGE='javaScript'>
			window.alert('Login Succesfull.')
			window.location.href='doctor.html'</SCRIPT>");
	     exit();
    }
    else{
    	echo("<SCRIPT LANGUAGE ='javaScript'>
			window.alert('Wrong id and password, re-entetr id and password')
			window.location.href='e-healthcare.html'</SCRIPT>");
	     exit();
    }
}
?>