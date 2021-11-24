<?php

$postname = $_POST['name'];
$postpsd = $_POST['psd'];

function checkLogin($name1,$psd1)
{
    $servername = "localhost";
    $username = "root";
    $password = "654321";
    $dbname = "test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "select psd,authority from user where name = '" . $name1 . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $psd2 = $row["psd"];
            if (strcmp($psd1, $psd2) != 0) {
                echo "<script>alert('用户名或密码错误!');location='/GraduationDesign/index.html';</script>";
            } else {
				if($row['authority']==3){
					echo "<script>alert('您已被封号,请联系管理员!');location='/GraduationDesign/index.html';</script>";
				}else{
					session_start();
					$_SESSION['user_id']=$_POST['name'];
					echo "<script>alert('登陆成功,你真叼!');location='/GraduationDesign/home.html';</script>";
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
