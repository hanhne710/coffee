<?php session_start(); ?>
<?php
    $conn=mysqli_connect("localhost","root","","trasua");
    if( isset($_GET['txtten']) && isset($_GET['uname']) && isset($_GET['psw'])&& isset($_GET['rpsw']))
    {
        
        
        
        $ten = $_GET['txtten'];
        $username = $_GET['uname'];
        $psw = $_GET['psw'];
        $repsw = $_GET['rpsw'];

        if (mysqli_num_rows(mysqli_query($conn,"SELECT Username FROM khachhang WHERE Username='$username'")) > 0) 
        {
            echo"<script>alert('Đã có người đăng kí tên tên tài khoản này '); </script>";   
            header("location:../menu.php?dk=false&act=1");
            
        }
        else {
            if($psw!=$repsw)
            {
                echo"<script>alert(' mật khẩu không trùng khớp hãy đăng kí lại); </script>"; 
                header("location:../menu.php?dk=false&act=2");
            }
            else
            {
                $_SESSION['username'] = $username;
                $matk=mysqli_insert_id($conn);
                $sql = "INSERT INTO `khachhang`(`matk`, `Username`, `tenkh`, `Password`, `TinhTrang`, `Quyen`) VALUES ('$matk','$username','$ten','$psw','1','0')";   
                mysqli_query($conn,"SET NAMES,'utf8'");
                $result=mysqli_query($conn,$sql);
                if($result){
                    $_SESSION['dangky']=$username;
                    $_SESSION['matk']=mysqli_insert_id($conn);
                    header("location:../menu.php?dk=true");
                }
            }
            }
    }
    
    else {
        header("location:../menu.php");
        
    }
 
 
    
    //!mysqli_query($connection,$sql);


?>