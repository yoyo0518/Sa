<?php
session_start();
  
  $id = $_GET["id"];
  $link=mysqli_connect("localhost","root","28350252","my_db");
	mysqli_select_db($link, "comment");

  $sql="delete from comment where 課程代碼=$id";
 echo $sql;
  if(mysqli_query($link,$sql))
    {?>
    <script> 
    alert("刪除成功!");
    location.href="課程查詢.php";
    </script>

    <?php
    }
  else
    {?>
     <script> 
        alert("刪除失敗!");
         location.href="課程查詢.php";
        </script>
        <?php
    }
  
?>
 