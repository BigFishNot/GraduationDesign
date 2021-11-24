<?php

session_start();
session_destroy();
	
echo "<script>alert('注销成功,返回登录!');location='/GraduationDesign/home.html';</script>";
?>