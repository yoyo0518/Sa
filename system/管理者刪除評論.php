<?php 
require_once "my_db.php";
$comment_id=$_GET['comment_id'];
$report_id=$_GET['report_id'];
$sql="DELETE FROM `comment` WHERE  comment_id=$comment_id";
$sql="DELETE FROM `report` WHERE report_id=$report_id ";
$result=mysqli_query($link,$sql);
echo $sql;
if(mysqli_query($link,$sql))
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