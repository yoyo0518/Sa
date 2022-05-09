<?php require_once 'my_db.php' ?>
<?php
$search=$_GET['key'];
$sep=explode('','',$_GET['key']);
mysqli_query($link,$sql);
$sql="SELECT * FROM `course`";
$row = mysqli_fetch_assoc($result)
for($i=0;$i<count($sep);$i++){
  if($i==0){
    $sql="SELECT * FROM `course` WHERE 'name' LIKE '%$sep[0]%' OR 'teacher' LIKE '%$sep[0]%'";
  }
  else{
    $sql="UNION SELECT * FROM `course` WHERE 'name' LIKE '%$sep[$i]%' OR 'teacher' LIKE '%$sep[$i]%'";
  }
}
$result=mysqli_query($link,$sql) or die(mysql_error());
$row=mysql_fetch_assoc($result);
$ans=mysql_num_rows($result);
?>
<ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          <form name="form1" method="GET" action="######">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input class="form-control" id="navbar-search-input" placeholder=" 請輸入要搜尋關鍵詞： " aria-label="search" aria-describedby="search"
               name="key" type="text" size="64" value="<?php echo $_GET['key'] ?>">
            </div>
          </form>
          </li><li>
              <?php
              for($i=0;$i<count($sep)){
                echo $sep[$i]." ";
              }?>
              <?php 
              if($ans>0){
                ?>
                <p> <a href="#######.php?key=<?php echo $search ?>&id=<?php echo
                $row['id']; ?>"><?php echo $row['name']; ?></a><?php echo $row['teacher']; ?><?php echo $row['time']; ?></p>
                <?php } while ($row = mysql_fetch_assoc($result)); ?>
          </li>
        </ul>