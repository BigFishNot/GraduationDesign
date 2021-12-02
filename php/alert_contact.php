<?php
	include "Connect2.php";
	session_start();
	$author=$_GET['name'];
	//设置为1则为被举报了
	$sql="update user set alert='1' where name='$author'";
	//判断举报的对象
	if($author!="admin" && $author!=$_SESSION['user_id'])
	{
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
	}else{
	?>
	<script>
		alert("不可举报管理员或自己!");
		window.location.href="view_contact.php";
	</script>
	<?php
	}
	?>