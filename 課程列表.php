<?php 
require_once 'my_db.php';
session_start();
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
<body>
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
    <?php
        $sql= " SELECT * FROM `Information`";
        $result = mysqli_query($link,$sql); 
        ?>
    <div class="card" style="width: 18rem;">
    <div class="card-header">
        課程資訊
    </div>
    <?php        
    while($row=mysqli_fetch_array($result)):
        if($row['教師']=='張銀億'):
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
    </div>
    <?php endif ?>
    <?php endwhile?>
</body>
</html>