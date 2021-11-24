<?php
	include "Connect2.php";
	
	$author=$_GET['name'];
	$sql="update user set alert='1' where name='$author'";
	
	if(mysqli_query($con,$sql)){
	
?>
		<script>
			alert("举报成功!");
			window.location.href="view_contact.php";
		</script>
	
	<?php
		}else{
		
	?>
		<script>
			alert("修改失败!");
			window.location.href="view_contact.php";
		</script>
	<?php
		}
	?>