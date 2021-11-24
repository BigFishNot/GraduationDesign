<?php
	$file=$_GET['url'];
	
	if (!unlink($file)){
		echo "<script>alert('删除失败!');location='view_images.php';</script>";
	}
	else{
		echo "<script>alert('删除成功!返回');location='view_images.php';</script>";
	}
?>