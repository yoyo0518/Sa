<?php require_once 'my_db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者檢舉</title>
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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
        <a href="logout.php"><button type="button" class="btn btn-success">登出</button></a>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<br><br>
<h2 align="center">管理者檢舉</h2><br>
<?php
        $sql= " SELECT * FROM `comment`";
        $result = mysqli_query($link,$sql); 
        ?>
 <script>$(document).ready(function() {$('#example').DataTable();} );</script>
        <table id="example" class="display" style="width:100% ; border: 2;">
            <thead style="background-color: rgb(204, 203, 203)" align="center">
                <tr>
                    <th>推薦程度</th>
                    <th>考試方式</th>
                    <th>作業量</th>
                    <th>評論</th>
                    <th>檢舉原因</th>
                    <th>檢舉描述</th>
                    <th>檢舉人</th>
                    <th>備註</th>

                </tr>
            </thead>
            <?php
            $sql2= " SELECT * FROM `report`";
            $result2=mysqli_query($link,$sql2);
            ?>
            <tbody align="center">
            <?php while($row=mysqli_fetch_array($result) and $row2=mysqli_fetch_array($result2)): ?>
                    <!-- Modal -->        
                
                <div class="modal fade" id="exampleModal<?php echo $row2["report_id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row2["report_id"]?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">推薦程度</label>
                            <p class="text-muted"><?php echo $row[1]?></p>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">考試方式</label>
                            <p class="text-muted"> <?php echo $row[2]?></p>
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">作業量</label>
                            <p class="text-muted"><?php echo $row[3]?></p>
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">評論</label>
                            <p class="text-muted"><?php echo $row[4]?></p>
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">檢舉原因</label>
                            <p class="text-muted"><?php echo $row2[2]?></p>
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">檢舉描述</label>
                            <p class="text-muted"><?php echo $row2[3]?></p>
                        </div><div class="mb-3">
                            <label for="recipient-name" class="col-form-label">檢舉人</label>
                            <p class="text-muted"><?php echo $row2[4]?></p>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
                        <a href="管理者刪除評論.php?report_id=<?php echo $row2['report_id']?>&comment_id=<?php echo $row2['comment_id']?>"><button type="submit" class="btn btn-primary">刪除</button></a>
                    </div>
                    </div>
                </div>
                </div>
                <tr>
                    <td><?php echo $row['推薦程度'] ?></td>
                    <td><?php echo $row['考試方式'] ?></td>
                    <td><?php echo $row['作業量'] ?></td>
                    <td><?php echo $row['評論'] ?></td>
                    <td><?php echo $row2['report_reason'] ?></td>
                    <td><?php echo $row2['report_describe'] ?></td>
                    <td><?php echo $row2['report_user'] ?></td>
                    <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row2["report_id"]?>" data-bs-whatever="@mdo">檢視</button>
                    </td>
                </tr>
                 <?php endwhile ?>
           </tbody>
        </table>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>