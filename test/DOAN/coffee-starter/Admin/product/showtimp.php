<link rel="stylesheet" href="indexcss.css">
<?php
$conn=mysqli_connect("localhost","root","","trasua");
echo $lenh;
$result1=mysqli_query($conn,$lenh);
echo "<form><div class='table_dep'>
<div class='table_dep4'style='height:50px;width:15%'>IDSản Phẩm</div>
<div class='table_dep2'style='height:50px;width:18%'>Tên Sản Phẩm</div>
<div class='table_dep2'style='height:50px;width:25%'>Hình Ảnh</div>
<div class='table_dep3'style='height:50px;width:6%'>Đơn Giá</div>
<div class='table_dep4'style='height:50px;width:7%'>Dung Tích</div>
<div class='table_dep4'style='height:50px;width:15%'>Mã Thể Loại</div>
<div class='table_dep3'style='height:50px;width:5%'>Sửa</div>
<div class='table_dep3'style='height:50px;width:5%'>Xóa</div>
";
while ($row1 = mysqli_fetch_array($result1)) {
   echo "<div class='table_dep4'style='height:35px;width:15%'>".$row1[0]."</div>";
   echo "<div class='table_dep2'style='height:35px;width:18%'>".$row1[1]."</div>";
   echo "<div class='table_dep2'style='height:35px;width:25%'><img src='".$row1[2]."'style='width:98%; height:98%; margin-top:15px' ></div>";
   echo "<div class='table_dep3'style='height:35px;width:6%'>".$row1[3]."</div>";
   echo "<div class='table_dep4'style='height:35px;width:7%'>".$row1[4]."</div>";
   echo "<div class='table_dep4'style='height:35px;width:15%'>".$row1[5]."</div>";
   echo "<div class='table_dep3'style='height:35px;width:5%'><a href='index.php?act=ttsp&sua=".$row1[0]."'> Sửa</a></div>";
   echo "<div class='table_dep3'style='height:35px;width:5%'><a href='index.php?act=ttsp&xoa=".$row1[0]."'> Xóa</a></div>";
   echo "";
}
echo "</div></form>";
mysqli_query($conn,"SET NAMES,'utf8'");
mysqli_query($conn,$sql);
mysqli_close($conn);