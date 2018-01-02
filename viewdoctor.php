<table align="center" border="1px" style="width:80%;height:100%;" cellspacing="0">
<?php
	$conn=new mysqli('localhost','root','','e-healthcare');
	$result=$conn->query('select * from add_doctor');
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
?>
		<tr>
		<td><?php echo $row['Doctor_ID'];?></td>
		<td><?php echo $row['Type'];?></td>
		<td><?php echo $row['Name'];?></td>
		<td><?php echo $row['Qualification'];?></td>
		<td><?php echo $row['Mobile_No'];?></td>
		<td><?php echo $row['Email_ID'];?></td>
		</tr>
<?php			
		}
	}
	
?>
</table>