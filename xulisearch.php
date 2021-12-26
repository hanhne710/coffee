<?php
$conn=mysqli_connect("localhost","root","","trasua");
mysqli_query($conn,"SET NAMES,'utf8'");
$sql="";
if(isset($_GET['search'])&&empty($_GET['giabd'])&&empty($_GET['giaden'])){
    $tim = $_GET['search'];
    $sql="SELECT * FROM sanpham where tensp LIKE '$tim' ";
}
if(isset($_GET['giabd'])&&isset($_GET['giaden'])&&empty($_GET['search'])){
    $bd=$_GET['giabd'];
    $kt=$_GET['giaden'];
    $sql="SELECT * FROM sanpham where gia between '$bd' and '$kt' ";
}
mysqli_close($conn);
header("location:../nhom2/menu.php?xlt=$sql");
?>