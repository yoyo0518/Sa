<?php
require_once 'my_db.php';
session_start() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
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
         margin:20px 10px 5px 50px;
         padding:0px;
     }
     body {
        font-family: Roboto,Helvetica Neue,Helvetica,Arial,PingFang TC,黑體-繁,Heiti TC,蘋果儷中黑,Apple LiGothic Medium,微軟正黑體,Microsoft JhengHei,sans-serif;
        font-size: 14px;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;    
    }
    .s2xyy:first-of-type {
        margin-left: 0; 
    }
    .s2xyy {
        position: relative;
        display: inline-block;
    }

 </style>
<body>
      <?php
        $datas= array();
        $sql= " SELECT * FROM `comment` ";
        $result = mysqli_query($link,$sql);
        ?>
<section class="site-section bg-light bg-image font-family" id="contact-section">
      <div class="container">
      <div class="card" style="width: 50rem;">
        <div class="card-header">
        <div class="row">
          <div class="col-md-7 mb-5">  
            <form method="POST" action="show.php" class="p-5 bg-white" >
            <div class="relative">
              <img src="user.png"width=20%> 陳欣右
            </div>
            </div>
            <div class="card-body">
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">課程代碼</label> 
                  <input type="text" name="number" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">推薦程度</label> 
                  <input type="num" name="level" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">考試方式</label> 
                  <input type="text" name="test" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">作業量</label> 
                  <input type="text" name="homework" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">評論</label> 
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
</body>
</html>