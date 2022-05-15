<?php
    $link=mysqli_connect("localhost","root","28350252","my_db");
    mysqli_select_db($link,"comment");
      

$number=$_POST['number'];
echo $number;
$level=$_POST['level'];
$test=$_POST['test'];
$homework=$_POST['homework'];
$message=$_POST['message'];
$sql="INSERT INTO `comment`(課程代碼,推薦程度,考試方式,作業量,評論) VALUE ($number,'$level','$test','$homework','$message')";
$result=mysqli_query($link,$sql);
echo $sql;
if(!empty($result)){

echo "<script language='javascript'>";
echo "alert('填寫成功！');";
echo "self.location.href='新增評價.php'";
echo "</script>";}
?>