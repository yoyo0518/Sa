<?php

require_once("dbtools.inc.php");

$account = $_POST["account"];
$password = $_POST["password"];

$email = $_POST["email"];



$link = create_connection();

//檢查帳號是否有人申請
$sql = "SELECT * FROM users Where account = '$account'";
$result = execute_sql($link, "my_db", $sql);

//如果帳號已經有人用
if (mysqli_num_rows($result) != 0) {

  mysqli_free_result($result);


  echo "<script type='text/javascript'>";
  echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
  echo "history.back();";
  echo "</script>";
}

//如果帳號沒人用
else {

  mysqli_free_result($result);


  $sql = "INSERT INTO users (account, password,email) 
    VALUES ('$account', '$password', '$email')";

  $result = execute_sql($link, "my_db", $sql);
}


mysqli_close($link);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>新增帳號成功</title>
</head>

<body bgcolor="#FFFFFF">

  <p align="center">恭喜您已經註冊成功了，您的資料如下：（請勿按重新整理鈕）<br>
    帳號：<font color="#FF0000"><?php echo $account ?></font><br>
    密碼：<font color="#FF0000"><?php echo $password ?></font><br>
    請記下您的帳號及密碼，然後<a href="sign-in.html">登入網站</a>。
  </p>
</body>

</html>