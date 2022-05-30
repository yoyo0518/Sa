<?php
    session_start();
    include 'config.php';
    mysqli_select_db($link,"comment");

    $account = $_SESSION['account'];
    $id = $_GET['id'];
    $recommend = $_POST['recommend'];
    $class = $_POST['class'];
    $test = $_POST['test'];
    $homework = $_POST['homework'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `comment`(課程代碼,推薦程度,上課方式,評分方式,作業量,其他補充,comment_user) VALUE ('$id','$recommend','$class','$test','$homework','$other','$account')";
    
    $result = mysqli_query($link,$sql);
    echo $sql;
    if(!empty($result)){
?>
    <script language='javascript'>
    alert('新增成功！');
    location.href='課程列表.php?id=<?php echo $id?>';
    </script>
    <?php }
?>