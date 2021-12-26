<?php session_start();

   $con = mysqli_connect("localhost","root","","trasua");
   
   
    if(isset($_POST['user']) )
    {
        $u = $_POST['user'];
        $p = $_POST['pass'];
        $query = "select * from khachhang where binary Username='$u' and Password='$p'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            $stmt4 = $con->prepare("SELECT Username,matk FROM khachhang where Username=?");
            $stmt4->bind_param('s',$u);
            $stmt4->execute();
            $result1 = $stmt4->get_result();
            $row1=$result1->fetch_assoc();
            $_SESSION['matk']=$row1['matk'];
            $_SESSION['username'] = $row1['Username'];
            $_SESSION['dangnhap'] = $row1['Username'];
            echo 'yes';
        }
        else{ echo 'no';}
    }
?>