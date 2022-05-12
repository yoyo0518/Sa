<?php
  //清除cookie內容
  setcookie("id", "", 0, '/');
  setcookie("passed", "", 0, '/');
	
  //將使用者導回首頁
  header("location:../index.php");
  exit();
?>