<?php
	$servername="localhost";
	$username="root";
	$password="654321";
	$dbname="test";
	
	$con=mysqli_connect($servername,$username,$password,$dbname);
	
	$id=$_GET['id'];
	$sql="select * from playlist where id='$id'";
	$result=mysqli_query($con,$sql);
?>
<link href="https://cdn.bootcss.com/aplayer/1.10.1/APlayer.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/aplayer/1.10.1/APlayer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/meting@2.0.1/dist/Meting.min.js"></script>
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../../css/home-style.css"/>
<div class="hm-page-container mx-auto">
    <header class="hm-header text-center">
      <h1 class="hm-title text-uppercase">
		  我要听歌
	  </h1>
    </header>

    <section class="hm-section">
	  <div class="hm-content-container">
	          <div class="hm-content hm-content-2">
				  <?php
				  while($row = mysqli_fetch_array($result))
				  {
				  ?>
				<div>
					<meting-js 
					server="<?=$row['server']?>" 
					type="<?=$row['type']?>" 
					id="<?=$row['p_id']?>"
					list-max-height="700px"
					></meting-js>
				</div>
			
				<?php 
				
				} ?>
	        </div>
			<button onclick="window.location.href='/GraduationDesign/personal_music.html'">返回</button>
	    </div>
    </section>

    <footer>
      <p>Copyright 2021 BigFish.AllRightsReserved.</p>
      <span></span>
    </footer>
  </div>
