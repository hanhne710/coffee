<?php 
if(isset($_GET['act']))
{
    if($_GET['act']=="ttkh")
        include ("infomation/thongtinkhachhang.php");
    else if($_GET['act']=="ttsp")
        include ("product/sanpham.php");
    else if($_GET['act']=="ttlsp")
        include ("typeproduct/loaisanpham.php");
    else if($_GET['act']=="ttdh")
        include ("order/donhang.php");
    else 
        include ("thongke/thongke.php"); 
}
    
?>