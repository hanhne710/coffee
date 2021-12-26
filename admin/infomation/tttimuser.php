<?php 
$conn=mysqli_connect("localhost","root","","trasua");
mysqli_query($conn,"SET NAMES,'utf8'");
if((empty($_GET['yname'])&&empty($_GET['yuser'])&&(empty($_GET['ttrangu'])))||(empty($_GET['yname'])&&empty($_GET['yuser'])&&(($_GET['quyen'])>0))){
    echo "<script>alert('bạn chưa điền thông tin cần tìm ');</script>";
    header("location:../index.php?act=ttkh&nut=tim");
}
else{ 
       if(isset($_GET['yname'])||isset($_GET['yuser'])||isset($_GET['ttrangu'])||(isset($_GET['quyen']))){
        $sql="select * from khachhang where 1";
        $result=mysqli_query($conn,$sql);
        $sql1="";
        while($row=mysqli_fetch_array($result)){
            if(isset($_GET['yname'])&&empty($_GET['yuser'])){
                $ngay =$_GET['yname'];
                $xuat =$row[2];
                $pos = strpos($row[2],$ngay);
                if($pos !== false)
                    $sql1="select * from khachhang where tenkh='$xuat'";
            }
            if(isset($_GET['yuser'])){
                echo $_GET['yuser'];
                echo "co vao ten user";
                $makh = $_GET['yuser'];
                if($row[1]==$makh)
                    $sql1="select * from khachhang where Username='$makh'";
            }
            if(isset($_GET['ttrangu'])){
                $tong = $_GET['ttrangu'];
                $sql1="select * from khachhang where TinhTrang='$tong'";
            }
            if(isset($_GET['quyen'])){
                $tt = $_GET['quyen'];
                $sql1="select * from khachhang where Quyen='$tt'";
            }
            if($sql1 !=""){
                mysqli_close($conn);
                header("location:../index.php?act=ttkh&timtk=$sql1");
            }
        }
        if($sql1==""){   
            mysqli_close($conn);
           header("location:../index.php?act=ttkh&timtk=false");
        }
        
    }
    else {
        mysqli_close($conn);
        echo '<script>alert("Tìm Kiếm Không Hợp Lệ");</script>';
    }
} 
?>
