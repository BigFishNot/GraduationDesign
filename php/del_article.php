<?php
	include "Connect2.php";
	$id=$_GET['id'];
	$sql="delete from blog where id='$id'";
	
	mysqli_query($con,$sql);
	
?>
<script>
	alert("删除成功!");
	window.location.href="/GraduationDesign/personal_diary.html";
</script>