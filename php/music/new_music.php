<?php
	$servername="localhost";
	$username="root";
	$password="654321";
	$dbname="test";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	session_start();
	$p_name=$_POST['p_name'];
	$author=$_SESSION['user_id'];
	$pic_url=$_POST['pic_url'];
	$player=$_POST['player'];
	$p_id=$_POST['p_id'];
	$server=$_POST['server'];
	$type=$_POST['type'];
	
	if($server=="QQ音乐")
		$server="tencent";
	else if($server=="网易云")
		$server="netease";
	
	if($type=="歌单")
		$type="playlist";
	else if($type=="专辑")
		$type="album";
	
	$sql="insert into playlist(p_name,pic_url,player,p_id,author,server,type) values('$p_name','$pic_url','$player','$p_id','$author','$server','$type')";
	if($p_name!="" && $pic_url!="" && $player!="" && $p_id!=""){
		if(mysqli_query($con,$sql)){
	
?>
	<script>
		alert("插入成功!");
		window.location.href="/GraduationDesign/personal_music.html";
	</script>

<?php
		}else{
	
?>
	<script>
		alert("插入失败!");
		window.location.href="/GraduationDesign/personal_music.html";
	</script>
<?php
		}
	}else{
	?>
	<script>
		alert("不能为空!");
		window.location.href="/GraduationDesign/new_album.html";
	</script>
	<?php	
	}
?>