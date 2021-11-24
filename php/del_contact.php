<?php
	include "Connect2.php";
	$id=$_GET['id'];

	session_start();
	$author=$_SESSION['user_id'];
	$sql="delete from leave_messages where id='$id'";
	
	$sql2="select authority from user where name='$author'";
	$result=mysqli_query($con,$sql2);
	
	while($row = mysqli_fetch_array($result)){
		$authority=$row['authority'];
		if($authority==1){
			
			mysqli_query($con,$sql);
	
	
		
	?>
	<script>
		alert("删除成功!");
		window.location.href="view_contact.php";
	</script>
	<?php
		}else{
	?>
	
	<script>
		alert("权限不足,请联系管理员!");
		window.location.href="view_contact.php";
	</script>
	<?php
		}
	}
	?>