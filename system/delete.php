<?php
session_start();
  
  $id = $_GET["id"];
  $comment_id=$_GET['comment_id'];

  include_once 'config.php';
	mysqli_select_db($link, "comment");

  $sql="delete from comment where comment_id=$comment_id";
 echo $sql;



 

//  $result = mysqli_query($link,$sql1);
//  $row1=mysqli_fetch_row($result);


  if(mysqli_query($link,$sql))
    {?>
    <script> 
    alert("刪除成功!");
    location.href="課程列表.php?id=<?=$id;?>";
    </script>

    <?php
    }
  else
    {?>
     <script> 
        alert("刪除失敗!");
         location.href="課程列表.php?id=<?=$id; ?>";
        </script>
        <?php
    }
  
?>
 