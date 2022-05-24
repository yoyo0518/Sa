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
          <a class="nav-link" href="課程查詢.php">
            課程查詢
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link" href="新增評價.php">
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
        include_once 'config.php';
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
    <div class="card" style="width: 18rem;height:375px">
    <div class="card-header">
        <h3>課程資訊</h3>  
    </div>
    <?php     

    mysqli_select_db($link,"my_db");   
     $result = mysqli_query($link,$sql); 
    $row=mysqli_fetch_array($result);
      $name = $row['課程名稱'];
    ?>
    <div class="card-body">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">學校 : <?php echo $row['學校'] ?> </li>
        <li class="list-group-item">學年 : <?php echo $row['學年'] ?></li>
        <li class="list-group-item">課程代碼 : <?php echo $row['課程代碼'] ?></li>
        <li class="list-group-item">學分 : <?php echo $row['學分'] ?></li>
        <li class="list-group-item">上課時間 : <?php echo $row['上課時間'] ?></li>
        <li class="list-group-item">上課地點 : <?php echo $row['上課地點'] ?></li>
        <li class="list-group-item">教師 : <?php echo $row['教師'] ?></li>
    </ul>
    
    </div></div>
  <div class="container col-8">

  <?php
        

        $c_sql= " SELECT * FROM `comment` where 課程代碼='$id'";
        
        $c_result = mysqli_query($link,$c_sql); 
        
         while($c_row=mysqli_fetch_row($c_result)){
        
            $comment_id=$c_row[0];
    ?>



<div class="card" style="width: 100%;">
  <div class="card-header" align=center>
    <?php echo $name?>
  </div>
  
  <ul class="list-group list-group-flush">
  
    <li class="list-group-item">推薦程度:  <?php echo $c_row[2]?></li>
    <li class="list-group-item">考試方式:  <?php echo $c_row[3]?></li>
    <li class="list-group-item">作業量:  <?php echo $c_row[4]?></li>
    <li class="list-group-item">評論:  <?php echo $c_row[5]?></li>
  </ul>
<br><br><br><br><br>
<div align=right>
<button type="button" class="btn btn-warning"  style="width:90px" data-bs-toggle="modal" data-bs-target="#report">檢舉評論</button>
  <a href="delete.php?id=<?php echo $c_row[1]?>&comment_id=<?=$comment_id;?>"><button type="button" class="btn btn-danger"  style="width:90px" >刪除評論</button></a>
</div>
</div>
 <?php }?>
  </div>  
</div>
</div>
    </div>
 
<div class="modal fade" id="report" tabindex="-1" aria-labelledby="reportLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="reportLabel">檢舉評論</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="report.php?comment_id=<?php echo $comment_id?>" method=post>
          <div class="mb-3">
            <label for="reason" class="col-form-label">檢舉原因:</label>
            <select class="form-control" id="reason" name="reason">
            <option disabled>請選擇檢舉原因</option>
            <option value="言語不當">言語不當</option>
            <option value="辱罵字眼">辱罵字眼</option>
            <option value="重複評論">重複評論</option>
            <option value="不實資訊">不實資訊</option>
            <option value="其他">其他</option>


            </select>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">詳細原因:</label>
            <textarea class="form-control" id="message-text" name="describe"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
      </form>
    </div>
  </div>
</div>
<br><br>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>