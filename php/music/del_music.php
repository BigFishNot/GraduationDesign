<?php
	$servername="localhost";
	$username="root";
	$password="654321";
	$dbname="test";
	
	$con=mysqli_connect($servername,$username,$password,$dbname);
	$id=$_GET['id'];
	$sql="delete from playlist where id='$id'";
	
	
	mysqli_query($con,$sql);
	
?>
<script>
	alert("删除成功!");
	window.location.href="/GraduationDesign/personal_music.html";
</script>