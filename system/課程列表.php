<?php 
session_start();
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caster4</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color:#EAEAEA">

<nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand" href="index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
    <strong>輔大課程評價系統</strong>
    
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
        <li class="nav-item px-3">
          <a class="nav-link">
            課程查詢
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link">
            新增課程評價
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link">
            收藏課程
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link ">
            
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <a href="sign/sign-in.html"><button type="button" class="btn btn-success">登入</button></a>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<br><br>

<?php
        include_once '../config.php';
        mysqli_select_db($link,"information");

        $sql= " SELECT * FROM `Information` where 課程代碼='$id'";
        
        $result = mysqli_query($link,$sql); 
        
         $row1=mysqli_fetch_array($result);
        
    ?>




<style>
     .bd-placeholder-img{
         font-size:1.125rem;
         text-anchor:middle;
     }
     @media (min-width:768px){
        .bd-placeholder-img-lg{
        font-size:3.5rem;    
        }
    }
     .card{
         width:30%;
         margin:1px 45px 5px 22px;
         padding:0px;
     }
 </style>

<body>
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-3 text-muted"><h1><strong><?php echo $row1["課程名稱"]?></strong></h1></div>
    </div><br>
    <div class="row">
    <div class="card" style="width: 18rem;">
    <div class="card-header">
        <h3>課程資訊</h3>  
    </div>
    <?php        
     $result = mysqli_query($link,$sql); 
    while($row=mysqli_fetch_array($result)):
      $name = $row['課程名稱'];
    ?>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">學校 : <?php echo $row['學校'] ?> </li>
        <li class="list-group-item">學年 : <?php echo $row['學年'] ?></li>
        <li class="list-group-item">課程代碼 : <?php echo $row['課程代碼'] ?></li>
        <li class="list-group-item">學分 : <?php echo $row['學分'] ?></li>
        <li class="list-group-item">上課時間 : <?php echo $row['上課時間'] ?></li>
        <li class="list-group-item">上課地點 : <?php echo $row['上課地點'] ?></li>
        <li class="list-group-item">教師 : <?php echo $row['教師'] ?></li>
    </ul>
    <?php endwhile?>
  </div>
    

  <?php
        include_once '../config.php';
        mysqli_select_db($link,"comment");

        $c_sql= " SELECT * FROM `comment` where 課程代碼='$id'";
        
        $c_result = mysqli_query($link,$c_sql); 
        
         while($c_row=mysqli_fetch_row($c_result)){
        
    ?>



<div class="card" style="width: 68%;">
  <div class="card-header" align=center>
    <?php echo $name?>
  </div>
  <ul class="list-group list-group-flush">
  
    <li class="list-group-item">推薦程度:  <?php echo $c_row[1]?></li>
    <li class="list-group-item">考試方式:  <?php echo $c_row[2]?></li>
    <li class="list-group-item">作業量:  <?php echo $c_row[3]?></li>
    <li class="list-group-item">評論:  <?php echo $c_row[4]?></li>
  </ul>
<br><br><br><br>
<div align=right>
  <a href="delete.php?id=<?php echo $c_row[0]?>"><button type="button" class="btn btn-danger"  style="width:90px" >刪除評論</button></a>
</div>
</div>
 <?php }?>
  </div>
</div>
    </div>
   
<br><br><br><br><br>


    <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h4 class="text-uppercase">輔仁大學</h5>

       
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