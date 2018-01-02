<table align="center" border="1px" style="width:80%;height:100%;" cellspacing="0">
<?php
	$conn=new mysqli('localhost','root','','e-healthcare');
	$result=$conn->query('select * from user_registration');
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
?>
		<tr>
		<td><?php echo $row['Name'];?></td>
		<td><?php echo $row['Email'];?></td>
		<td><?php echo $row['Contact_Number'];?></td>
		<td><?php echo $row['Password'];?></td>
		</tr>
<?php			
		}
	}
	
?>
</table>