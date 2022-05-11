<?php
  // 檢查cookie中的passed變數是否等於 TRUE
  $passed = $_COOKIE["passed"];
	

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