<?php 
    $conn=mysqli_connect("localhost","root","","trasua");
    if((($_GET['pro'])=="")&&(($_GET['price'])=="")&&(($_GET['idpro'])=="")&&(($_GET['con'])==""))
        echo '<script>alert("bạn chưa điền thông tin tìm kiếm");</script>';
    else{
        $sql1="a";
        if(isset($_GET['pro'])||isset($_GET['price'])||isset($_GET['con'])||isset($_GET['idpro'])){
            $sql="SELECT * FROM sanpham WHERE 1";
            $result=mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($result)) {
                if(isset($_GET['pro'])&&empty($_GET['idpro'])&&empty($_GET['price'])&&empty($_GET['con'])){
                    if($row[1]==$_GET['pro'])
                        $sql1="SELECT * FROM sanpham WHERE tensp='$row[1]'";
                    else {
                        $pos = stripos($row[1], $_GET['pro']);
                        if($pos !== false)
                            $sql1="SELECT * FROM sanpham WHERE matl='$row[5]'";}
                }
                if(isset($_GET['price'])&&empty($_GET['idpro'])&&empty($_GET['pro'])&&empty($_GET['con'])){
                    if($row[3]==$_GET['price']){
                        $nameu=$_GET['price'];
                        $sql1="SELECT * FROM sanpham WHERE gia='$nameu'";}
                }
                if(isset($_GET['con'])&&empty($_GET['idpro'])&&empty($_GET['pro'])&&empty($_GET['price'])){
                    if($row[4]==$_GET['con']){
                        $nameu=$_GET['con'];
                        $sql1="SELECT * FROM sanpham WHERE dungtich='$nameu'";}
                }
                if(isset($_GET['idpro'])&&empty($_GET['price'])&&empty($_GET['pro'])&&empty($_GET['con'])){
                    if($row[5]==$_GET['idpro']){
                        $nameu=$_GET['idpro'];
                        $sql1="SELECT * FROM sanpham WHERE matl='$nameu'";}
                }
            }
        }
        else 
            echo '<script>alert("Tìm Kiếm Không Hợp Lệ");</script>';
    }
mysqli_query($conn,"SET NAMES,'utf8'");
mysqli_close($conn);
if($sql1=="a") 
    header("location:../index.php?act=ttsp&timsp=false");
else 
    header("location:../index.php?act=ttsp&timsp=$sql1")
?>
