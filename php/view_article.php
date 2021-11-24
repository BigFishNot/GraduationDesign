<?php
	include "Connect2.php";
	$id=$_GET['id'];
	
	$sql="select * from blog where id='$id'";
	$result=mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
?>
<link type="text/css" rel="stylesheet" href="../css/myform.css" />
<div class="mid">
	<form class="smart-green">
		<label>
			<h1 align="center">查看博客</h1>
		</label>
		<label><span>标题 :</span>
			<input id="title" type="text" name="title" value="<?php echo $row['title'] ?>" disabled="disabled" />
			<div class="error-msg"></div>
		</label>
		<label><span>作者 :</span>
			<input id="author" type="text" name="author" value="<?php echo $row['author'] ?>" disabled="disabled" />
			<div class="error-msg"></div>
		</label>
	  
		<label><span>内容 :</span>
			<textarea id="description" name="content" disabled="disabled"><?php echo $row['content'] ?></textarea>
			<div class="error-msg"></div> &nbsp; &nbsp; </label>
		<div class="success-msg"></div>
		<div style="float: none;"><input type="button" class="button" onclick="window.location.href='/GraduationDesign/personal_diary.html'" class="button" value="返回" /></div>
	</form>
</div>
<?php } ?>
