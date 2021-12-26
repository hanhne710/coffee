<?php 
if (isset($_GET['up']) && isset($_FILES['img'])){
    move_uploaded_file($_FILES['img']['tmp_name'], 'img/' . $_FILES['img']['name']);
}
    $conn=mysqli_connect("localhost","root","","trasua");
    $masp=$_GET['idp'];
    $tenp=$_GET['namep'];
    $price=$_GET['price'];
    $anh=$_GET['img'];
    
    $dtich=$_GET['con'];
    $idlsp=$_GET['nameid'];
    $sql="INSERT INTO `sanpham`(`masp`, `tensp`, `hinhanh`, `gia`, `dungtich`, `matl`) VALUES ('$masp','$tenp','$anh','$price','$dtich','$idlsp')";
    echo $sql;
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:../index.php?act=ttsp&newsp=true");
?>