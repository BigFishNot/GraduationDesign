<?php
	//允许的图片类型
	$allowType=array("jpg","jpeg","png","gif");
	//将文件名打散为数组
	$temp = explode(".", $_FILES["file"]["name"]);
	//获取文件名中的后面的类型
	$extension = end($temp);
	//使用全局数组$_FILES
	//上传的文件类型
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& in_array($extension, $allowType)){
		//检查数组中是否有指定的值
		if ($_FILES["file"]["error"] > 0){
				echo "<script>alert('出现错误!');location='/GraduationDesign/album.html';</script>";
		}else{
			 if (file_exists("upload/" . $_FILES["file"]["name"])){
				 echo "<script>alert('文件已存在!');location='/GraduationDesign/album.html';</script>";
			 }else{
				 //把上传的文件移动到新的位置
				 move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
				 echo "<script>alert('上传成功!{$_FILES["file"]["name"]}');location='/GraduationDesign/album.html';</script>";
			 }
		}
			
	}else{
		echo "<script>alert('非法的文件!');location='/GraduationDesign/album.html';</script>";
	}
?>