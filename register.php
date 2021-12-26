<?php session_start(); ?>
<?php
    $ht = $_GET['hoten'];
   $u = $_GET['user'];
   $p = $_GET['pass'];
   $con = mysqli_connect("localhost","root","","trasua");
   
   $query = mysqli_query($con,"SELECT Username FROM khachhang WHERE binary Username='$u'");
   $num = mysqli_num_rows($query);
    if($num==1)
        echo "no";
    else {
            
            mysqli_query($con,"SET NAMES,'utf8'");
            $matk=mysqli_insert_id($con);
            $sql = "INSERT INTO `khachhang`(`matk`, `Username`, `tenkh`, `Password`, `TinhTrang`, `Quyen`) VALUES ('$matk','$u','$ht','$p','1','2')";
            $result = mysqli_query($con,$sql);
            $_SESSION['username'] = $u;
            if($result){
                $_SESSION['dangky']=$u;
                $_SESSION['matk']=mysqli_insert_id($con);
            }
        }
    ?>