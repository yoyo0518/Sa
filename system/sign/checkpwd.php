<?php
  require_once("dbtools.inc.php");
  $account = $_POST["account"]; 	
  $password = $_POST["password"];
  $link = create_connection();
			
  


  
  //檢查帳號密碼是否正確
  $sql = "SELECT * FROM users Where account = '$account' AND password = '$password'";
  $result = execute_sql($link, "member", $sql);

  //如果帳號密碼錯誤
  if (mysqli_num_rows($result) == 0)
  {

    mysqli_free_result($result);
	

    mysqli_close($link);
		
    //要求使用者輸入正確帳密
    echo "<script type='text/javascript'>";
    echo "alert('帳號密碼錯誤，請查明後再登入');";
    echo "history.back();";
    echo "</script>";
  }
	
  //如果帳密正確
  else
  {

    $id = mysqli_fetch_object($result)->id;
	

    mysqli_free_result($result);
		
    mysqli_close($link);

    // 將使用者資料加入 cookies
    setcookie("id", $id);
    setcookie("passed", "TRUE");		
    header("location:main.php");		
  }
?>