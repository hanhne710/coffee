
<link rel="stylesheet" href="indexcss.css">
<?php
$conn=mysqli_connect("localhost","root","","trasua");
echo $lenh;
$result=mysqli_query($conn,$lenh);
echo "<div style='border: #000 2px solid;margin-left:5px'>
<div class='table1'><div style='height: 45px;text-align:center;line-height:45px;border: #000 1px solid;'>DANH SÁCH TÀI KHOẢN</div>
<div class='table_dep1'style='height:50px;width:13%'>IDTài Khoản</div>
<div class='table_dep2'style='height:50px;width:19%'>Tên Tài Khoản</div>
<div class='table_dep2'style='height:50px;width:16%'>Tên Đăng Nhập</div>
<div class='table_dep2'style='height:50px;width:15%'>Password</div>
<div class='table_but'style='height:50px;width:16%'>Tình Trạng</div>
<div class='table_dep3'style='height:50px;width:8%'>Quyền</div>
<div class='table_dep3'style='height:50px;width:5%'>Sửa</div>
<div class='table_dep3'style='height:50px;width:5%'>Xóa</div>
</div>";
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='table_dep1'style='height:40px;width:13%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[0]."</div>";
   echo "<div class='table_dep1'style='height:40px;width:19%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[2]."</div>";
   echo "<div class='table_dep2'style='height:40px;width:16%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[1]."</div>";
   echo "<div class='table_dep2'style='height:40px;width:15%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[3]."</div>";
   if($row[4]==1)
   echo "<div class='table_dep3'style='height:40px;width:9%';border-bottom-style: solid;border-bottom-color: coral;><a href='index.php?act=ttkh&mo=".$row[0]."'> Mở </a></div>";
else 
    echo "<div class='table_dep3'style='height:40px;width:9%';border-bottom-style: solid;border-bottom-color: coral;><a href='index.php?act=ttkh&mo=".$row[0]."'> Khóa </a></div>";
if($row[5]==1)
    echo "<div class='table_dep3'style='height:40px;width:8%;border-bottom-style: solid;border-bottom-color: coral;'>QTViên</div>";
    else 
        echo "<div class='table_dep3'style='height:40px;width:8%;border-bottom-style: solid;border-bottom-color: coral;'>Khách Hàng</div>";
   echo "<div class='table_dep3'style='height:40px;width:5%;border-bottom-style: solid;border-bottom-color: coral;'><a href='index.php?act=ttkh&sua=".$row[0]."'> Sửa</a></div>";
   echo "<div class='table_dep3'style='height:40px;width:5%;border-bottom-style: solid;border-bottom-color: coral;'><a href='index.php?act=ttkh&xoa=".$row[0]."'onclick='return confirmDelete(this);'> Xóa</a></div>";
   echo "";
}
echo "</div>";
mysqli_query($conn,"SET NAMES,'utf8'");
mysqli_close($conn);
?>