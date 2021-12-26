<?php
    if(isset($_GET['xuli'])){
        $conn=mysqli_connect("localhost","root","","trasua");
        $xuli=$_GET['xuli'];
        $sql1="UPDATE `hoadon` SET `tinhtrang`='1' WHERE idhd='$xuli'";
        mysqli_query($conn,$sql1);
        mysqli_query($conn,"SET NAMES,'utf8'");
        mysqli_close($conn);
        echo "<script>window.location='./index.php?act=ttdh&update=true';</script>;";
    }
?>