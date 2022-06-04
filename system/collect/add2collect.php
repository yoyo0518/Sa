<?php
session_start();

include '../config.php';

$user_id = $_GET['login_user'];


#$link=mysqli_connect("localhost","root","28350252","my_db");

$comment_id = $_GET['comment_id'];
$id = $_GET['id'];

$sql="INSERT INTO collect  VALUE (0,$comment_id,$user_id)";

$sql2="select * from collect where comment_id= $comment_id and user_id=$user_id";
$result2=mysqli_query($link,$sql2);
$row=mysqli_num_rows($result2);
echo $row;
if ($row=mysqli_num_rows($result2) != 0){
    
    ?>
    <script> 
    alert("已加入收藏中!");
    location.href="../課程列表.php?id=<?=$id;?>";
    </script>
    <?php 
    }else{
        
    if(mysqli_query($link,$sql))
    {?>
    <script> 
    alert("加入收藏成功!");

    location.href="../課程列表.php?id=<?=$id;?>";
    </script>
    
    <?php
    }
    }
    ?>

