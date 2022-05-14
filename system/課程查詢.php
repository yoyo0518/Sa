<?php
$passed=false;
if (isset($_COOKIE["passed"]) && $_COOKIE["passed"]=='TRUE' ) {
  $passed = true;
}

?>

<meta  content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php $searchtxt=$_POST["searchtxt"];

?>

</head>
 
<body style="background-color:#EAEAEA">


<!-- Navbar Light -->

<?php
if($passed != true){
?>
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
          <a class="nav-link ">
            
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
      <a href="sign/sign-in.html" class="btn btn-secondary">登入</a>  
      </ul>
    </div>
  </div>
</nav>
<?php
}else{?> 
<nav
  class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">

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

      <button type="button" class="btn btn-secondary"><a href="sign/logout.php" style="color: white;">登出</a></button>

    </div>
  </div>
</nav>

<?php
}
?>
<!-- End Navbar -->

<?php
      include_once '../config.php';
      mysqli_select_db($link,"information");
      
      $sql= " SELECT * FROM `information`";
      $c_result = mysqli_query($link,$sql); 
      ?>
<br>
 




  <div style="margin-left: 10%;margin-right: 10%; border: 1.5px solid rgb(220, 220, 220); padding: 4px;background-color:white" >
<div>

  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">列表</a>
    <form class="form-inline" action="課程查詢.php" method="post">
      <input class="form-control mr-sm-1" type="search" placeholder="搜尋關鍵字" aria-label="Search" name="searchtxt">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜尋</button>
    </form>
  </nav>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">學校</th>
        <th scope="col">學年</th>
        <th scope="col">課程代碼</th>
        <th scope="col">課名</th>
        <th scope="col">學分</th>
        <th scope="col">上課時間</th>
        <th scope="col">上課地點</th>
        <th scope="col">教師</th>
      </tr>
    </thead>
    <tbody>
      
      <?php

      if(empty($searchtxt))
	    {
	    $sql="select * from information";
      }
      else
	    {
		  $sql="select * from information where 課程名稱 like '%$searchtxt%' or 課程代碼 like '%$searchtxt%' or 教師 like '%$searchtxt%' or 上課時間 like '%$searchtxt%'";
		  }
      $rs=mysqli_query($link,$sql);;
      while($record=mysqli_fetch_row($rs))
      {

        echo "<tr>
        <td>$record[0]</td>
        <td>$record[1]</td>
        <td>$record[2]</td>
        <td><a href='課程列表.php?id=$record[2]'>$record[3]</a></td>
        <td>$record[4]</td>
        <td>$record[5]</td>
        <td>$record[6]</td>
        <td>$record[7]</td>";
      }
      mysqli_close($link);
      ?>
    </tbody>
  </table>
</div>
</div>

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