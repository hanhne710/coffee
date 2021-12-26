<?php session_start(); ?>
<?php
    
    $conn=mysqli_connect("localhost","root","","trasua");
    if(isset($_POST['uname'])&& isset($_POST['psw']))
    {
        
        $tendn = $_POST['uname'];
        $mk = $_POST['psw'];
        $sql = "SELECT * from khachhang where Username='$tendn' and Password ='$mk'";
        
        
    }
    mysqli_query($conn,"SET NAMES,'utf8'");
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0) {
        $_SESSION['username'] =  $tendn;
        $_SESSION['dangnhap']=$tendn;
        $stmt4 = $conn->prepare("SELECT matk FROM khachhang where Username=?");
		$stmt4->bind_param('s',$tendn);
		$stmt4->execute();
        $result1 = $stmt4->get_result();
		$row1=$result1->fetch_assoc();
        $_SESSION['matk']=$row1['matk'];
        header("location:../menu.php?dn=true");
    }
    else{
        header("location:../menu.php?dn=false");
        
    }
    
   
        
    //!mysqli_query($connection,$sql);


?>