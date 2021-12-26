<?php 
    $conn=mysqli_connect("localhost","root","","trasua");
    
    $yname=$_GET['yname'];
    $uname=$_GET['yuser'];
    $pass=$_GET['pass'];
    $gt=$_GET['quyen'];
    $sql="insert into khachhang(matk,Username,tenkh,Password,TinhTrang,Quyen) values('.$pass.','$uname','$yname','$pass',1,$gt)";
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:../index.php?act=ttkh&newtk=true");
?>