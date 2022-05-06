<?php
  //清除cookie內容
  setcookie("id", "");
  setcookie("passed", "");
	
  //將使用者導回首頁
  header("location:../index.html");
  exit();
?>