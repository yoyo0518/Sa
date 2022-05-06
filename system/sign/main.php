<?php
  // 檢查cookie中的passed變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	
  /* 如果cookie中的passed變數不等於TRUE
     表示尚未登入網站，將使用者導向首頁index.html */
  if ($passed != "TRUE")
  {
    header("location:index.html");
    exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>會員管理</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p align="center">

      <a href="logout.php">登出網站</a>
    </p>
  </body>
</html>