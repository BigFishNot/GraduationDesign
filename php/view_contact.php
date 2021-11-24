<?php
	include "Connect2.php";
	session_start();
	$author=$_SESSION['user_id'];
	$sql="select * from leave_messages";
	$result=mysqli_query($con,$sql);
?>


<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/home-style.css"/>
<div class="hm-page-container mx-auto">
    <header class="hm-header text-center">
      <h1 class="hm-title text-uppercase">
		  留言
	  </h1>
    </header>

    <section class="hm-section">
	  <div class="hm-content-container">
	          <div class="hm-content hm-content-2">
				  <?php
				  while($row = mysqli_fetch_array($result))
				  {
				  ?>
				<span><?php echo $row['id'] ?>楼----</span>
	            <span style="color: #FF0000;" class="author"><?php echo $row['author'] ?>:  </span>
				<span><?php echo $row['content'] ?></span>
				<span class="time"><div></div><?php echo $row['time'] ?>-----<a href="del_contact.php?id=<?php echo $row['id'] ?>">删除</a>
				<?php 
				$rel_name=$row['rel_author'];
				$sql2="select alert from user where name='$rel_name'";
				$result2=mysqli_query($con,$sql2);
				while($row2 = mysqli_fetch_array($result2)){
					if($row2['alert']==0){
				?>
						-----<a href="alert_contact.php?name=<?=$rel_name ?>">举报</a>
				<?php
					}else{
				?>
						-----<strong>已举报</strong>
				<?php
					}
				}
				?>
				</span>
				<?php 
				echo "<br><br>";
				} ?>
	        </div>
			<button onclick="window.location.href='/GraduationDesign/contact.html'">返回</button>
	    </div>
    </section>

    <footer>
      <p>Copyright 2021 BigFish.AllRightsReserved.</p>
      <span></span>
    </footer>
  </div>
