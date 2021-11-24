<?php
	date_default_timezone_set('PRC');
	include "Connect2.php";
	
	session_start();
	$rel_author=$_SESSION['user_id'];
	$author=$_POST['author'];
	$time=date('Y-m-d h:i:s', time());
	$content=$_POST['content'];
	$sql="insert into leave_messages(time,author,content,rel_author) values('$time','$author','$content','$rel_author')";
	if($content!=null){
		if(mysqli_query($con,$sql)){
?>
	<script>
		alert("留言成功!");
		window.location.href="view_contact.php";
	</script>

<?php
	}else{
?>
	<script>
		alert("插入失败!");
		window.location.href="/GraduationDesign/contact.html";
	</script>
<?php
		}
	}else{
		
?>
	<script>
		alert("内容不能为空!");
		window.location.href="/GraduationDesign/contact.html";
	</script>
		<?php
	}
?>