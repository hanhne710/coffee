<?php 
$conn=mysqli_connect("localhost","root","","trasua");
mysqli_query($conn,"SET NAMES,'utf8'");
if(empty($_GET['ngaytao'])&&empty($_GET['tenkh'])&&empty($_GET['sum'])&&(empty($_GET['ttrang']))){
    echo "<script>alert('bạn chưa điền thông tin cần tìm ');</script>";
    header("location:../index.php?act=ttdh&nut=tim");
}
else{ 
       if(isset($_GET['ngaytao'])||isset($_GET['tenkh'])||isset($_GET['sum'])||(isset($_GET['ttrang']))){
        $sql="select * from hoadon where 1";
        $result=mysqli_query($conn,$sql);
        $sql1="";
        while($row=mysqli_fetch_array($result)){
            if(isset($_GET['ngaytao'])){
                $ngay =$_GET['ngaytao'];
                if($row[3]==$ngay)
                    $sql1="select * from hoadon where ngaylap=$ngay";
            }
            if(isset($_GET['tenkh'])){
                $makh =$_GET['tenkh'];
                if($row[1]==$makh)
                    $sql1="select * from hoadon where matk='$makh'";
            }
            if(isset($_GET['sum'])){
                $tong = $_GET['sum'];
                if($row[4]==$tong)
                    $sql1="select * from hoadon where thanhtien='$tong'";
            }
            if(isset($_GET['ttrang'])){
                $tt = $_GET['ttrang'];
                if($row[5]==$tt)
                    $sql1="select * from hoadon where tinhtrang='$tt'";
            }
            if($sql1!=""){
                mysqli_close($conn);
                header("location:../index.php?act=ttdh&timdh=$sql1");
            }
        }
        if($sql1==""){   
            mysqli_close($conn);
            header("location:../index.php?act=ttdh&timdh=false");
        }
        
    }
    else {
        mysqli_close($conn);
        echo '<script>alert("Tìm Kiếm Không Hợp Lệ");</script>';
    }
} 
?>
