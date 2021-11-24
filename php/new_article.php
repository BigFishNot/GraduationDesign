<?php
	include "Connect2.php";
	session_start();
	$title=$_POST['title'];
	$author=$_SESSION['user_id'];
	$content=$_POST['content'];
	
	$sql="insert into blog(title,author,content) values('$title','$author','$content')";
	if(mysqli_query($con,$sql)){
	
?>
	<script>
		alert("插入成功!");
		window.location.href="/GraduationDesign/personal_diary.html";
	</script>

<?php
	}else{
	
?>
	<script>
		alert("插入失败,标题不能为空!");
		window.location.href="/GraduationDesign/personal_diary.html";
	</script>
<?php
	}
?>