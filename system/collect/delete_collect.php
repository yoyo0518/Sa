<?php
session_start();
  
$user_id = $_COOKIE['id'];

$collect_id=$_GET['collect_id'];


  include_once '../config.php';
	mysqli_select_db($link, "my_db");

  $sql="delete from collect where collect_id=$collect_id";
 echo $sql;



 

//  $result = mysqli_query($link,$sql1);
//  $row1=mysqli_fetch_row($result);


if(mysqli_query($link,$sql))
{?>
<script> 
alert("刪除成功!");
location.href="main2.php";
</script>

<?php
}

?>
 