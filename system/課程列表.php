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

<!-- Navbar Light -->
<nav
  class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
    輔大課程評價系統
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
      <button type="button" class="btn btn-secondary">登入</button>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<br><br>

<?php
        $link=mysqli_connect("localhost","root","28350252","my_db");
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
         margin:5px 10px 5px 22px;
         padding:0px;
     }
 </style>

<body>

<div class="container">
  <div class="row">
    
    <div class="col-6 col-sm-3">
    <h2><?php echo $row1["課程名稱"]?></h2>
    <div class="card" style="width: 18rem;">
    
    <div class="card-header">
        課程資訊
    </div>
    <?php        
     $result = mysqli_query($link,$sql); 
    while($row=mysqli_fetch_array($result)):
        
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
    </div>
   
    <div class="col-6">
      <div class="card text-center">
       <div class="card-header">
       Featured
      </div>
      <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  

  
    </div> </div> </div> 
  </div>
    </div>
   
</body>
</html>