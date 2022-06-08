<?php

include '../config.php';
header("Content-type: text/html; charset=utf-8");
  

  $account = $_POST["account"]; 
  $email = $_POST["email"];
  $show_method = $_POST["show_method"]; 


			

  $sql = "SELECT * FROM user WHERE 
          account = '$account' AND email = '$email'";

  $result =mysqli_query($link,$sql);

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
            <a href='sign-in.html'>按此登入本站</a>
          </body>
      </html>
    ";
	
    if ($show_method == "E-mail 傳送")
    {
   
      $subject = "=?utf-8?B?" . base64_encode("帳號通知") . "?=";
      $headers  = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
      mail($email, $subject, $message, $headers);	

  
      echo "您好，您的帳號資料已經寄至 $email<br><br>
            <a href='sign-in.html'>按此登入本站</a>";				
    }
  }


  mysqli_free_result($result);
		

  mysqli_close($link);
?>