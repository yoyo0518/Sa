<?php
  session_start();
  //清除cookie內容
  setcookie("id", "", 0, '/');
  setcookie("passed", "", 0, '/');
	unset($_SESSION["account"]);
	unset($_SESSION["level"]);
  print_r($_SESSION);
  //將使用者導回首頁
  header("location:../index.php");
  exit();
?>