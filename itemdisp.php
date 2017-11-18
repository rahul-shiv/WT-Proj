<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Project";
    $conn =mysqli_connect($servername,$username,$password,$dbname);


    function display(){
        global $conn;
        $name=$_GET['name'];
        $query  ="SELECT * FROM `TABLE 1` WHERE TEGORY LIKE '".$name."'";
        $get=mysqli_query($conn,$query);
        $i=1;
        if (mysqli_num_rows($get)==0){
            echo 'FAILURE';
        }
        else{
            while($row = mysqli_fetch_assoc($get)) {


                if($i%8==1)
                    echo "<div class='mySlides'>";

                echo '<div class="blk">';
                    echo '<div class="container">';
                        echo '<img src="'.$row['IMGSRC'].'">' ;
                        echo '<div class="bottom-left"><del>'.$row['MRP'].'</del></div>';
                        echo '<div class="bottom-right">'.$row['DISCOUNTEDPRICE'].'</div>';
                    echo "</div>";
                echo "</div>";

                if($i%8==0 && $i!=1)
                    echo "</div>";
                $i+=1;
            }
        }
    }
 ?>
