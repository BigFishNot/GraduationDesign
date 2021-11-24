<?php
	$dir = "E:\PHP\httpd-2.4.51-win64-VS16\Apache24\htdocs\GraduationDesign\upload";
	
	session_start();
	$author=$_SESSION['user_id'];
	
	if (is_dir($dir)){		//先判断指定的路径是不是一个文件夹
		if ($dh = opendir($dir)){
			$i=1;
			
					
?>

<link rel="stylesheet" type="text/css" href="../css/mytable2.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/home-style.css"/>
<div class="hm-page-container mx-auto">
    <header class="hm-header text-center">
      <h1 class="hm-title text-uppercase">
		  看图片
	  </h1>
    </header>

    <section class="hm-section">
	  <div class="hm-content-container">
	          <div class="hm-content hm-content-2">
				<div>
					<table align="center">
						<tr align="center">
							<td>编号</td>
							<td>照片</td>
							<td>作者</td>
							<td>操作</td>
						</tr>
						<?php
						while (($file = readdir($dh))!= false){	//文件名的全路径 包含文件名
							
							$filePath = $file;
							if($filePath!="." && $filePath!=".."){
						?>
						<tr>
							<td><?php echo $i++ ?></td>
							<td><a title="放大看" href="<?='../upload/'.$filePath?>"><img src="<?='../upload/'.$filePath?>" width="100px" height="100px"/></a></td>
							<td><?php echo $author ?></td>
							<td><a class="td-a" href="del_image.php?url=<?='../upload/'.$filePath?>">删除</a>
							<button style="cursor: pointer;" onclick="window.location.href='/GraduationDesign/album.html'">返回</button>
							</td>
						</tr>
										<?php
										}
									}
									closedir($dh);
								}
							}
						?>
					</table>
				</div>					
	        </div>
			<button onclick="window.location.href='/GraduationDesign/personal_music.html'">返回</button>
	    </div>
    </section>

    <footer>
      <p>Copyright 2021 BigFish.AllRightsReserved.</p>
      <span></span>
    </footer>
  </div>
