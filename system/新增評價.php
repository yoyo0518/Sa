<?php
session_start() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta  content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<style>
     .bd-placeholder-img{
         font-size:1.125rem;
         text-anchor:middle;
     }
     @media (min-width:800px){
        .bd-placeholder-img-lg{
        font-size:3.5rem;    
        }
    }
     .card{
         width:30%;
         margin:20px 10px 5px 50px;
         padding:0px;

     }
     body {
        font-family: Roboto,Helvetica Neue,Helvetica,Arial,PingFang TC,黑體-繁,Heiti TC,蘋果儷中黑,Apple LiGothic Medium,微軟正黑體,Microsoft JhengHei,sans-serif;
        font-size: 14px;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;  
        background-color:#EAEAEA
    }
    .s2xyy:first-of-type {
        margin-left: 0; 
    }
    .s2xyy {
        position: relative;
        display: inline-block;

    }

    .contact-section{
        background-color:red;
    }


 </style>

<body style="background-color:#EAEAEA">


<!-- Navbar Light -->
<nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3"   >
  <div class="container"  >
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


<?php
      $link=mysqli_connect("localhost","root","28350252","my_db");
      mysqli_select_db($link,"comment");
      

        $datas= array();
        $sql= " SELECT * FROM `comment` ";
        $result = mysqli_query($link,$sql);
        ?>

<div  style="background-color:#EAEAEA">
    
    <section class="site-section bg-light bg-image font-family" id="contact-section" style="background-color:#EAEAEA"  >
    <contact-section style="background-color:#EAEAEA">
    <center>
    <div class="container" style="background-color:#EAEAEA">
            <br>
        <div class="card" style="width: 50rem;" style="background-color:#EAEAEA" aling='center' >
            <div class="card-header"aling='center' >
            <div class="row"aling='center'>
            <div class="col-md-7 mb-5">  

                </div>
                <div class="card-body">
                <form method="POST" action="insert.php" class="p-5 bg-white" >
                <div class="relative" >
                <center><img src="user.png"width=15% > 陳欣右</center><br><br>
                </div>
                <div class="row form-group" >
                    <div class="col-md-12" >
                    <label class="text-black" for="subject">課程代碼:</label> 
                    <input type="text" name="number" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                    <label class="text-black" for="subject">推薦程度:</label> 
                    <input type="num" name="level" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                    <label class="text-black" for="subject">考試方式:</label> 
                    <input type="text" name="test" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                    <label class="text-black" for="subject">作業量:</label> 
                    <input type="text" name="homework" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                    <label class="text-black" for="message">評論:</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="輸入訊息..."></textarea>
                    </div>
                </div>
                    <div class="col-md-12" align="right">
                    <input type="submit" value="送出" class="btn btn-primary btn-md text-white ">
                    </div>
                </div>
                
                </form>
            </div>
            </div>
        </div>
        </section>
    </div>
</center>
</body>
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

</html>