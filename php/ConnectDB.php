<?php
//通过全局变量$_POST传值
$postname = $_POST['name'];
$postpsd = $_POST['psd'];
//自定义函数判断登录
function checkLogin($name1,$psd1)
{	
	//连接本地MySQL数据库
    $servername = "localhost";
    $username = "root";
    $password = "654321";
    $dbname = "test";
	//使用mysqli面向过程连接数据库
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }
    $sql = "select psd,authority from user where name = '" . $name1 . "'";
	//执行SQL语句
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
		//将结果放到关联数组中并循环输出
        while ($row = mysqli_fetch_array($result)) {
			//判断密码是否一致
            $psd2 = $row["psd"];
			//比较字符串
            if (strcmp($psd1, $psd2) != 0) {
                echo "<script>alert('用户名或密码错误!');location='/GraduationDesign/index.html';</script>";
            } else {
				//如果为3则是封号状态
				if($row['authority']==3){
					echo "<script>alert('您已被封号,请联系管理员!');location='/GraduationDesign/index.html';</script>";
				}else{
					//启动并创建一个session变量
					session_start();
					$_SESSION['user_id']=$_POST['name'];
					echo "<script>alert('登陆成功!');location='/GraduationDesign/home.html';</script>";
				}
            }
        }
    }
    else {
        echo "<script>alert('用户名或密码错误!');location='/GraduationDesign/index.html';</script>";
    }
}
checkLogin($postname,$postpsd);
?>
