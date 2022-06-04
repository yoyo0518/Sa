<?php

include '../config.php';

$user_id = $_COOKIE['id'];


#$link=mysqli_connect("localhost","root","28350252","my_db");
mysqli_select_db($link,"comment");
  
$comment_id = $_GET['comment_id'];
$id = $_GET['id'];


$sql="INSERT INTO `collect`  VALUE (0,$comment_id,$user_id)";
$result=mysqli_query($link,$sql);





if(mysqli_query($link,$sql))
{?>
<script> 
alert("加入收藏成功!");
location.href="../課程列表.php?id=<?=$id;?>";
</script>

<?php
}



