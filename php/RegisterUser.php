<?php
//接收数据
$postname = $_POST['register_name'];
$postpsd1 = $_POST['register_psd1'];
$postpsd2 = $_POST['register_psd2'];
$postmail = $_POST['register_email'];
$posttel = $_POST['register_tel'];
//校验标志
$flag = true;
//输出信息
$output = "";
function checkdata($name,$psd1,$psd2,$mail,$tel){
	//使用global关键字在函数中访问全局变量
    global $flag,$output;
	//判断用户名
    $reg1 = "/^[\w_-]{6,16}$/";
    if(!preg_match($reg1,$name)){
        $flag = false;
        $output = $output.'名字格式不对'.'   ';
    }
	//判断密码
    $reg2 = "/^[\w_-]{6,16}$/";
    if(!preg_match($reg2,$psd1)){
        $flag = false;
        $output = $output.'密码格式不对'.'   ';
    }
	//判断密码是否一致
    if(strcmp($psd2,$psd1)!=0){
        $flag = false;
        $output = $output.'密码不一致'.'   ';
    }
	//判断邮箱
    $reg3 = "/^(\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*?)/";
    if(!preg_match($reg3,$mail)){
        $flag = false;
        $output = $output.'邮箱格式不对'.'   ';
    }
	//判断手机号
    $reg4 = "/^1[3578]\d{9}$/";
    if(!preg_match($reg4,$tel)){
        $flag = false;
        $output = $output.'手机号格式不对';
    }
}
checkdata($postname,$postpsd1,$postpsd2,$postmail,$posttel);
//如果不对,产生错误信息
if($flag == false){
    echo "<script>alert('$output');location='/GraduationDesign/index.html';</script>";
}
//否则插入数据
else{
	//自定义函数insertUser,将数据插入到数据库中
    insertUser($postname,$postpsd1,$postmail,$posttel);
}

function insertUser($name,$psd,$email,$tel){
    $servername = "localhost";
    $username = "root";
    $password = "654321";
    $dbname = "test";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql1 = "select * from user where name = '$name'";

    $result = mysqli_query($conn,$sql1);


    $sql = "insert into user values('$name','$psd','$email','$tel','0','0')";

    if(mysqli_num_rows($result) <= 0) {
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('注册成功!请登录!');location='/GraduationDesign/index.html';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    else{
        echo "<script>alert('该用户名已经注册，请换其他用户名注册！');location='/GraduationDesign/index.html';</script>";
    }

    mysqli_close($conn);
}

?>


