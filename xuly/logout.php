<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
    unset($_SESSION['dangky']);
    unset($_SESSION['dangnhap']);
    $conn=mysqli_connect("localhost","root","","trasua");
    $stmt2 = $conn->prepare('DELETE FROM cart');
    $stmt2->execute();
}
header("location:../menu.php");
?>
