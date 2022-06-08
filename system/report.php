<?php
    include 'config.php';
    mysqli_select_db($link,"comment");
    $reason = $_POST['reason'];
    $describe = $_POST['describe'];

    $comment_id=$_GET['comment_id'];
    $comment_sql="select * from comment where comment_id=$comment_id";
    $comment_result=mysqli_query($link,$comment_sql);
    $comment_row=mysqli_fetch_row($comment_result);


$sql="INSERT INTO `report`(comment_id,report_reason,report_describe,report_user) VALUE ($comment_id,'$reason','$describe','123')";
$result=mysqli_query($link,$sql);
echo $sql;
if(!empty($result)){

echo "<script language='javascript'>";
echo "alert('檢舉成功！');";
echo "self.location.href='課程查詢.php'";
echo "</script>";}
?>