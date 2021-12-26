<link rel="stylesheet" href="indexcss.css">
<?php
$conn=mysqli_connect("localhost","root","","trasua");
$sql="select * from sanpham";
$result=mysqli_query($conn,$sql);
echo "<div class='table_dep'><div class='table1'>
<div style='height: 45px;text-align:center;line-height:45px;border: #000 1px solid;'>DANH SÁCH SẢN PHẨM</div>
<div class='table_dep4'style='height:50px;width:15%'>IDSản Phẩm</div>
<div class='table_dep2'style='height:50px;width:15%'>Tên Sản Phẩm</div>
<div class='table_dep2'style='height:50px;width:25%'>Hình Ảnh</div>
<div class='table_dep3'style='height:50px;width:6%'>Đơn Giá</div>
<div class='table_dep4'style='height:50px;width:7%'>Dung Tích</div>
<div class='table_dep4'style='height:50px;width:15%'>Mã Thể Loại</div>
<div class='table_dep3'style='height:50px;width:9%'><button> <a href='index.php?act=ttsp&nut=them'>Thêm</a></button></div>
<div class='table_dep3'style='height:50px;width:7%'><button><a href='index.php?act=ttsp&nut=tim'> Tìm kiếm</a></button></div></div>";
while ($row = mysqli_fetch_array($result)) {
   echo "<div class='table_dep4'style='height:35px;width:15%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[0]."</div>";
   echo "<div class='table_dep2'style='height:35px;width:15%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[1]."</div>";
   echo "<div class='table_dep2'style='height:35px;width:25%;border-bottom-style: solid;border-bottom-color: coral;'><img src='".$row[2]."'style='width:98%; height:98%; margin-top:15px' /></div>";
   echo "<div class='table_dep3'style='height:35px;width:6%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[3]."</div>";
   echo "<div class='table_dep4'style='height:35px;width:7%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[4]."</div>";
   echo "<div class='table_dep4'style='height:35px;width:15%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[5]."</div>";
   echo "<div class='table_dep3'style='height:35px;width:9%;border-bottom-style: solid;border-bottom-color: coral;'><a href='index.php?act=ttsp&sua=".$row[0]."'> Sửa</a></div>";
   echo "<div class='table_dep3'style='height:35px;width:7%;border-bottom-style: solid;border-bottom-color: coral;'><a href='index.php?act=ttsp&xoa=".$row[0]."'onclick='return confirmDelete(this);'> Xóa</a></div>";
   echo "";
}
echo "</div>";
mysqli_query($conn,"SET NAMES,'utf8'");
mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<div style="height:auto;width:100%;">
    <?php
        if(isset($_GET['nut']))
        {
            if($_GET['nut']=="them")
                include('product/newpro.php');
            else {
                include('product/timpro.php');
            }    
        }
        if(isset($_GET['sua']))
            include('product/suapro.php');
        if(isset($_GET['xoa']))
        {
            include('product/xoapro.php');
        }
        if(isset($_GET['newsp']))
        {
            if($_GET['newsp']=="true")
                echo"<script>alert('Thêm sản phẩm thành công');</script>";
        }
        if(isset($_GET['editsp']))
        {
            if($_GET['editsp']=="true")
                echo"<script>alert('cập nhật sản phẩm thành công');</script>";
        }
        if(isset($_GET['delsp']))
        {
            if($_GET['delsp']=="true")
                echo"<script>alert('xoa sản phẩm thành công');</script>";
        }
        if(isset($_GET['timsp']))
        {
            if($_GET['timsp']=="false")
                echo"<script>alert('Thông Tin Bạn Cần Tìm Không Tồn Tại');</script>";
            else {
                $lenh=$_GET['timsp'];
                include('product/showtimp.php');
            }
        }
    ?>
</div>