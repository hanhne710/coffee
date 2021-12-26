<?php
$conn=mysqli_connect("localhost","root","","trasua");
$result=mysqli_query($conn,$lenh);
$row = mysqli_fetch_array($result);
if($row>0)
while ($row >0){
    echo "tao vao duoc r nha";
}
else 
    echo "<script>alert('Tìm Kiếm Không Hợp Lệ')</script>";
mysqli_close($conn);
?>