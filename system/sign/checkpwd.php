<?php
  include '../config.php';
  // require_once("dbtools.inc.php");
  session_start();
  $account = $_POST["account"]; 	
  $password = $_POST["password"];
  
			
  //檢查帳號密碼是否正確
  
  $sql = "select * from user where account = '$account' and password = '$password'";
  // $result = execute_sql($link, "my_db", $sql);

  //如果帳號密碼錯誤
  if($rs=mysqli_query($link,$sql))
  {
    $id = mysqli_fetch_object($result)->id;
    $record=mysqli_fetch_array($rs);
		echo $sql;
    $_SESSION["account"]=$record["account"];
    $_SESSION["level"]=$record["level"];

    mysqli_free_result($result);
    mysqli_close($link);

    //將使用者資料加入 cookies
    setcookie("id", $id, 0, '/');
    setcookie("passed", "TRUE", 0, '/');		

    header("location:../index.php");		
    
  }
	
  //如果帳密正確
  else
  {
    mysqli_free_result($result);

    mysqli_close($link);
		echo $sql;?>
    
    <script type='text/javascript'>
    alert('帳號密碼錯誤，請查明後再登入');
    location.href='sign-in.html';
    </script>
    <?php
    exit;
  }
