<meta  content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  
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


</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="margin-left: 10%;">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01" width="20%">
      <a class="navbar-brand" href="#">輔大課程評價系統</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-1" >
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color: gray;">課程查詢</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color: gray;">新增課程評價</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color: gray;">收藏課程</a>
        </li>
      </ul>
      </div>
    </div>
    <div class="btn-group" role="group" aria-label="Basic example" style="margin-left: 47%;">
      <button type="button" class="btn btn-secondary">登入</button>
    </div>
  </div>
  </nav><br>



  
<body>




  <div style="margin-left: 10%;margin-right: 10%; border: 1.5px solid rgb(220, 220, 220); padding: 4px;" >
<div>

  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">待編輯</a>
    <form class="form-inline">
      <input class="form-control mr-sm-1" type="search" placeholder="搜尋關鍵字" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜尋</button>
    </form>
  </nav>


 

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">學校</th>
        <th scope="col">學年</th>
        <th scope="col">課程代碼</th>
        <th scope="col">學分</th>
        <th scope="col">上課時間</th>
        <th scope="col">上課地點</th>
        <th scope="col">教師</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
      $link=mysqli_connect("localhost","root","28350252","my_db");
      mysqli_select_db($link,"information");
      if(empty($searchtxt))
	    {
	    $sql="select * from information";
      }
      else
	    {
		  $sql="select * from information where id like '%$searchtxt%' or password like '%$searchtxt%'";
		  }
      $rs=mysqli_query($link,$sql);;
      while($record=mysqli_fetch_row($rs))
      {
        echo "<tr>
        <td>$record[0]</td>
        <td>$record[1]</td>
        <td>$record[2]</td>
        <td>$record[3]</td>
        <td>$record[4]</td>
        <td>$record[5]</td>
        <td>$record[6]</td>";
      }
      mysqli_close($link);
      ?>
    </tbody>
  </table>
</div>
</div>

</body>
