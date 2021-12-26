<?php 
    $conn=mysqli_connect("localhost","root","","trasua");
    $ma = $_GET['idtk'];
    $yname=$_GET['yname'];
    $uname=$_GET['yuser'];
    $pass=$_GET['pass'];
    $tt=$_GET['tinhtrang'];
    $gt=$_GET['quyen'];
    $sql="UPDATE khachhang SET Username='$uname',tenkh='$yname',Password='$pass',TinhTrang='$tt',Quyen='$gt' WHERE matk='$ma'";
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:../index.php?act=ttkh&edittk=true");
?>