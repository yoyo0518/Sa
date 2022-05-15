<?php
session_start();
  
  $id = $_GET["id"];
<<<<<<< HEAD
  $link=mysqli_connect("localhost","root","28350252","my_db");
	mysqli_select_db($link, "comment");

  $sql="delete from comment where 課程代碼=$id";
 echo $sql;
=======
  $comment_id=$_GET['comment_id'];

  include_once 'config.php';
	mysqli_select_db($link, "comment");

  $sql="delete from comment where comment_id=$comment_id";
 echo $sql;



 

//  $result = mysqli_query($link,$sql1);
//  $row1=mysqli_fetch_row($result);


>>>>>>> 40971e13bcf3f1eb9f64fdb5b24c93c6a99ced53
  if(mysqli_query($link,$sql))
    {?>
    <script> 
    alert("刪除成功!");
<<<<<<< HEAD
    location.href="課程查詢.php";
=======
    location.href="課程列表.php?id=<?=$id;?>";
>>>>>>> 40971e13bcf3f1eb9f64fdb5b24c93c6a99ced53
    </script>

    <?php
    }
  else
    {?>
     <script> 
        alert("刪除失敗!");
<<<<<<< HEAD
         location.href="課程查詢.php";
=======
         location.href="課程列表.php?id=<?=$id; ?>";
>>>>>>> 40971e13bcf3f1eb9f64fdb5b24c93c6a99ced53
        </script>
        <?php
    }
  
?>
 