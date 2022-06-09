<script>
var yes =confirm('確定要刪除嗎');
                    if(!yes){
                      history.back();
                    }
</script>
<?php
session_start();
$report_id = $_GET['report_id'];
include_once 'config.php';

$sql = "delete from report where report_id=$report_id";
if (mysqli_query($link, $sql)) { ?>
  <script>
location.href="管理者檢舉.php";
  </script>
<?php
}

?>