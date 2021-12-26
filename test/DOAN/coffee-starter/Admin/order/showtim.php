<link rel="stylesheet" href="indexcss.css">
<?php
$conn=mysqli_connect("localhost","root","","trasua");
echo $lenh;
$result=mysqli_query($conn,$lenh);
echo "<div style='border: #000 2px solid;margin-left:5px'>
<div class='table1'><div style='height: 45px;text-align:center;line-height:45px;border: #000 1px solid;'>DANH SÁCH HÓA ĐƠN</div>
<div class='table_dep2'style='height:50px;width:10%'>ID Hóa Đơn</div>
<div class='table_dep1'style='height:50px;width:14%'>IDTài Khoản</div>
<div class='table_dep2'style='height:50px;width:20%'>Nội Dung Đặt Hàng</div>
<div class='table_dep2'style='height:50px;width:15%'>Ngày Lập</div>
<div class='table_dep3'style='height:50px;width:15%'>Thành Tiền</div>
<div class='table_dep3'style='height:50px;width:15%'>Tình Trạng</div>
<div class='table_dep3'style='height:50px;width:7%'>Chi Tiết</div>
</div>";
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='table_dep1'style='height:40px;width:10%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[0]."</div>";
   echo "<div class='table_dep1'style='height:40px;width:14%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[1]."</div>";
   echo "<div class='table_dep1'style='height:40px;width:20%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[2]."</div>";
   echo "<div class='table_dep2'style='height:40px;width:15%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[3]."</div>";
   echo "<div class='table_dep2'style='height:40px;width:15%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[4]."</div>";
   if($row[5]==1)
    echo "<div class='table_dep3'style='height:40px;width:15%;border-bottom-style: solid;border-bottom-color: coral;'>Đã Xử Lý</div>";
   else 
    echo "<div class='table_dep3'style='height:40px;width:15%;border-bottom-style: solid;border-bottom-color: coral;'><a href='index.php?act=ttdh&xuli=".$row[0]."'>Chưa Xử Lý</a></div>";
    echo "<div class='table_dep3'style='height:40px;width:7%;border-bottom-style: solid;border-bottom-color: coral;'><a href='index.php?act=ttdh&chitiet=".$row[0]."'> Chi Tiet</a></div>";
    
   echo "";
}
echo "</div>";
mysqli_query($conn,"SET NAMES,'utf8'");
mysqli_close($conn);
?>