<?php 
include_once 'config.php';
$comment_id=$_GET['comment_id'];
$report_id=$_GET['report_id'];
$sql1="DELETE FROM `comment` WHERE  comment_id=$comment_id ";
$sql2="DELETE FROM `report` WHERE report_id=$report_id ";
$result=mysqli_query($link,$sql2);
$result2=mysqli_query($link,$sql1);
echo $sql1;
echo $sql2;
if(mysqli_query($link,$sql2))
{?>
<script> 
alert("刪除成功!");
location.href="管理者檢舉.php?id=<?=$id;?>";
</script>

<?php
}
else
{?>
 <script> 
    alert("刪除失敗!");
     location.href="管理者檢舉.php?id=<?=$id; ?>";
    </script>
    <?php
}

?>