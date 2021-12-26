<link rel="stylesheet" href="indexcss.css">
<?php
$mt=$_GET['chitiet'];
$conn=mysqli_connect("localhost","root","","trasua");
$sql="select * from cthoadon where mahd='$mt'";
$result=mysqli_query($conn,$sql);
echo "<div style='border: #000 2px solid;margin-left:5px'>
<div class='table1'><div style='height: 45px;text-align:center;line-height:45px;border: #000 1px solid;'>CHI TIẾT ĐƠN HÀNG</div>
<div class='table_dep2'style='height:50px;width:9%'>ID HD</div>
<div class='table_dep1'style='height:50px;width:14%'>Tên Sản Phẩm</div>
<div class='table_dep2'style='height:50px;width:9%'>Đơn Giá</div>
<div class='table_dep2'style='height:50px;width:13%'>Số Lượng</div>
<div class='table_but'style='height:50px;width:22%'>Ngày Lập</div>
</div>";
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='table_dep1'style='height:40px;width:9%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[0]."</div>";
   echo "<div class='table_dep1'style='height:40px;width:14%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[1]."</div>";
   echo "<div class='table_dep2'style='height:40px;width:9%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[2]."</div>";
   echo "<div class='table_dep2'style='height:40px;width:13%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[3]."</div>";
   echo "<div class='table_dep3'style='height:40px;width:22%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[4]."</div>";
   echo "";
}
echo "</div>";
mysqli_query($conn,"SET NAMES,'utf8'");
mysqli_close($conn);
?>
