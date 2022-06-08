<?php 

session_start();

$passed=false;
if (isset($_COOKIE["passed"]) && $_COOKIE["passed"]=='TRUE' ) {
  $passed = true;
}

$user_id =$_SESSION["account"];
// $user_id = $_COOKIE['id'];
?>
<meta  content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</head>
 
<body style="background-color:#EAEAEA">


<!-- Navbar Light -->



<nav
  class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">

  <div class="container">
    <a class="navbar-brand" href="../index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" >
    <strong>輔大課程評價系統</strong>
    
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
        <li class="nav-item px-3">
          <a class="nav-link" href="../課程查詢.php">
            課程查詢
          </a>
        </li>


        <li class="nav-item px-3">
          <a class="nav-link" href="main2.php">
            收藏課程
          </a>
        </li>

        
        <?php if($_SESSION['level']==2){ ?>
        <li class="nav-item px-3">
          <a class="nav-link" href="../管理者檢舉.php">
            受檢舉評價
          </a>
        </li><?php }?>
      </ul>


      <ul class="navbar-nav ms-auto">

      <button type="button" class="btn btn-success"><a href="../sign/logout.php" style="color: white;">登出</a></button>

    </div>
  </div>
</nav>


<!-- End Navbar -->

<?php
      include_once '../config.php';
      mysqli_select_db($link,"collect");
      
      $sql2="SELECT * FROM user WHERE account=$user_id";
      $c_result2 = mysqli_query($link,$sql2); 
      $row2 = mysqli_fetch_array($c_result2);
      //var_dump($row2);
    //   echo $row2['account'];
    //   echo '<br>';
    
      $sql= " SELECT * FROM `collect` where user_id=$user_id";
      $c_result = mysqli_query($link,$sql); 

      while($row = mysqli_fetch_array($c_result)) //$record=mysqli_fetch_row($c_result))
      {

        $collect_id = $row['collect_id'];
        $comment_id = $row['comment_id'];

        $sql2="SELECT * FROM comment WHERE comment_id=$comment_id";
        $c_result2 = mysqli_query($link,$sql2); 
        $row2 = mysqli_fetch_array($c_result2);
        $class_id =$row2['課程代碼'];
        $sqlclass_name="SELECT * FROM information WHERE 課程代碼='$class_id'";
        $c_result3 = mysqli_query($link,$sqlclass_name);
        $row3 = mysqli_fetch_array($c_result3);
        echo '<br>';

       

      ?>

      <div align=center>
      <div class="card" style="width: 68%;" >
            <div class="card-header" align=center>
               <?php 
               echo $row3['課程名稱']; 
               echo " ";
               echo $row3['課程代碼']; ?> 
            </div>
            <ul class="list-group list-group-flush" align=left>

              <li class="list-group-item">推薦程度: <?php echo $row2['推薦程度'] ?></li>
              <li class="list-group-item">上課內容 / 方式 / 規定 / 點名: <?php echo $row2['上課方式'] ?></li>
              <li class="list-group-item">評分 / 考試方式: <?php echo $row2['評分方式'] ?></li>
              <li class="list-group-item">報告 / 作業: <?php echo $row2['作業量'] ?></li>
              <li class="list-group-item">其他補充: <?php echo $row2['其他補充'] ?></li>

            </ul>
            

            <div align=right>


              <a href="delete_collect.php?collect_id=<?=$collect_id; ?>">
              <button type="button" class="btn btn-danger" style="width:90px">刪除</button>
              </a>
            </div>
          </div>
          </div><?php }?>





<br><br><br><br><br><br><br><br><br><br>

<footer class="bg-light text-center text-lg-start" >
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h4 class="text-uppercase"><strong>輔仁大學</strong></h5>
         

       
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">待編輯</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
        
         
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">待編輯</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
         
         
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">待編輯</h5>
        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-dark">Link 1</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

 
</footer>


</body>
</html>