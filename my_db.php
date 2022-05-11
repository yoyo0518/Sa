
        <?php
            $host = 'localhost';
            $dbuser ='root';
            $dbpw = '';
            $dbname = 'my_db';
            $link = mysqli_connect($host,$dbuser,$dbpw,$dbname);

            mysqli_select_db($link,"my_db");

            if($link){
            mysqli_query($link,'SET NAMES utf8');
             echo "正確連接資料庫";
            }
            else {
                echo "不正確連接資料庫</br>" . mysqli_connect_error();
            }
        ?>
    
