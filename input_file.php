<?php
	$allowType=array("jpg","jpeg","png","gif");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& in_array($extension, $allowType)){
		if ($_FILES["file"]["error"] > 0){
		        echo "<script>alert('出现错误!');location='/GraduationDesign/album.html';</script>";
		}else{
			 if (file_exists("upload/" . $_FILES["file"]["name"])){
				 echo "<script>alert('文件已存在!');location='/GraduationDesign/album.html';</script>";
			 }else{
				 move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
				 echo "<script>alert('上传成功!{$_FILES["file"]["name"]}');location='/GraduationDesign/album.html';</script>";
			 }
		}
			
	}else{
		echo "<script>alert('非法的文件!');location='/GraduationDesign/album.html';</script>";
	}
?>