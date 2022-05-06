<?php
  require_once("dbtools.inc.php");
  header("Content-type: text/html; charset=utf-8");
  

  $account = $_POST["account"]; 
  $email = $_POST["email"];
  $show_method = $_POST["show_method"]; 


  $link = create_connection();
			

  $sql = "SELECT * FROM users WHERE 
          account = '$account' AND email = '$email'";

  $result = execute_sql($link, "member", $sql);

  //帳號不存在
  if (mysqli_num_rows($result) == 0)
  {
    echo mysqli_error($link);
    #exit;

    echo "<script type='text/javascript'>
            alert('您所查詢的資料不存在，請檢查是否輸入錯誤。');
            history.back();
          </script>";
  }
  else  //帳號存在
  {


    $row = mysqli_fetch_array($result);
    #var_dump($row);
    $password=$row['password'];
    $account=$row['account'];

    $message = "
      <!doctype html>
      <html>
        <head>
          <title></title>
          <meta charset='utf-8'>
        </head>
        <body>
          您好，您的帳號資料如下：<br><br>
          　　帳號：$account<br>
          　　密碼：$password<br><br>
            <a href='http://192.168.64.3/system/sign/sign-in.html'>按此登入本站</a>
          </body>
      </html>
    ";
	
    if ($show_method == "網頁顯示")
    {
      echo $message;  
    }

  }


  mysqli_free_result($result);
		
  //關閉資料連接	
  mysqli_close($link);
?>