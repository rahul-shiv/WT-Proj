<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<body style="background-image:url('bg2.jpg')">
    <?php
        if(isset($_SESSION["username"]))
            $target='proj.php';
        else {
            $target='login.php';
        }
        echo "<a href='".$target."' style='position:absolute;top:35%;left:20%;'><img src='fontname.png' ></a>";
    ?>
</body>
</html>
