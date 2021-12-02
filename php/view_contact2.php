<?php
	include "Connect2.php";
	
	$name=$_GET['name'];
	$sql="select content from leave_messages where rel_author='$name'";
	
	$i=1;
	$result=mysqli_query($con,$sql);
?>


<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/home-style.css"/>
<div class="hm-page-container mx-auto">
    <header class="hm-header text-center">
      <h1 class="hm-title text-uppercase">
		  留言信息
	  </h1>
    </header>

    <section class="hm-section">
	  <div class="hm-content-container">
	          <div class="hm-content hm-content-2">
				 <?php
					while($row = mysqli_fetch_array($result))
					{
				 ?>
					<?=$i ?> : <?=$row['content'] ?><br>
				 <?php
						$i++;
					}
				 ?>
	        </div>
			<button onclick="window.location.href='/GraduationDesign/administrate.html'">返回</button>
	    </div>
    </section>

	<center>
		<font color='gray' size='4' >
			Copyright 2021 BigFish.AllRightsReserved.	
		</font>
	</center>
  </div>
