<?php
	include "Connect2.php";
	$id=$_GET['id'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	
	$sql="update blog set title='$title',content='$content' where id='$id'";
	
	if(mysqli_query($con,$sql)){

?>
	<script>
		alert("修改成功!");
		window.location.href="/GraduationDesign/personal_diary.html";
	</script>

<?php
	}else{
	
?>
	<script>
		alert("修改失败!");
		window.location.href="/GraduationDesign/personal_diary.html";
	</script>
<?php
	}
?>