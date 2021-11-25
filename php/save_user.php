<?php
	include "Connect2.php";
	
	$name=$_GET['name'];
	$sql="update user set authority='0' where name='$name'";
	if(mysqli_query($con,$sql)){
	
?>
		<script>
			alert("解封成功!");
			window.location.href="/GraduationDesign/administrate.html";
		</script>
	
	<?php
		}else{
		
	?>
		<script>
			alert("失败!");
			window.location.href="/GraduationDesign/administrate.html";
		</script>
	<?php
		}
	?>