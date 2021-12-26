<?php
    function changeStatusAcc($acc){
        
    $conn=mysqli_connect("localhost","root","","trasua");
    if($('input[name=dt'.$acc.']:checked').length > 0) {
            $tinhtrang=1;
		}
		else{
			$tinhtrang=0;
		}
        
    $sql="UPDATE khachhang SET TinhTrang='$tinhtrang'WHERE matk='$acc'";
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_close($conn);
	}
?>