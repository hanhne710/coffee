<?php 
    $conn=mysqli_connect("localhost","root","","trasua");
    $masp=$_GET['idp'];
    $tenpr=$_GET['namep'];
    $gia =$_GET['price'];
    $anh=$_GET['img'];
    $dt=$_GET['con'];
    $matl=$_GET['nameid'];
    $sql="UPDATE `sanpham` SET `masp`='$masp',`tensp`='$tenpr',`hinhanh`='$anh',`gia`='$gia',`dungtich`='$dt',`matl`='$matl' WHERE `masp`='$masp'";
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:../index.php?act=ttsp&editsp=true");
?>