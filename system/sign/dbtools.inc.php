<?php
<<<<<<< HEAD
  function create_connection()
  {
    $link = mysqli_connect("localhost", "root","28350252", "member")
      or die("無法建立資料連接: " . mysqli_connect_error());
=======
  
  include_once '../config.php';
  
  function create_connection() {
    global $link;
    #$link = mysqli_connect("localhost", "root","", "member")
    #  or die("無法建立資料連接: " . mysqli_connect_error());
>>>>>>> 40971e13bcf3f1eb9f64fdb5b24c93c6a99ced53
	  
    mysqli_query($link, "SET NAMES utf8");
			   	
    return $link;
  }
	
  function execute_sql($link, $database, $sql)
  {
    mysqli_select_db($link, $database)
      or die("開啟資料庫失敗: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		
    return $result;
  }
?>
