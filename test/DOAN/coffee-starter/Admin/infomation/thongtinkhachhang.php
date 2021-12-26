<link rel="stylesheet" href="indexcss.css">

<?php
$conn=mysqli_connect("localhost","root","","trasua");
$sql="select * from khachhang";
$result=mysqli_query($conn,$sql);
echo "<div style='border: #000 2px solid;margin-left:5px'>
<div class='table1'><div style='height: 45px;text-align:center;line-height:45px;border: #000 1px solid;'>DANH SÁCH TÀI KHOẢN</div>
<div class='table_dep1'style='height:50px;width:13%'>IDTài Khoản</div>
<div class='table_dep2'style='height:50px;width:17%'>Tên Tài Khoản</div>
<div class='table_dep2'style='height:50px;width:17%'>Tên Đăng Nhập</div>
<div class='table_dep2'style='height:50px;width:12%'>Password</div>
<div class='table_dep3'style='height:50px;width:10%'>Tình Trạng</div>
<div class='table_dep3'style='height:50px;width:10%'>Quyền</div>
<div class='table_dep3'style='height:50px;width:8%'><a href='index.php?act=ttkh&nut=them'><button> Thêm</button></a></div>
<div class='table_dep3'style='height:50px;width:7%'><a href='index.php?act=ttkh&nut=tim'><button> Tìm Kiếm</button></a></div>
</div>";
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='table_dep1'style='height:40px;width:13%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[0]."</div>";
   echo "<div class='table_dep1'style='height:40px;width:17%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[2]."</div>";
   echo "<div class='table_dep2'style='height:40px;width:17%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[1]."</div>";
   echo "<div class='table_dep2'style='height:40px;width:12%;border-bottom-style: solid;border-bottom-color: coral;'>".$row[3]."</div>";
   if($row[4]==1)
       echo "<div class='table_dep3'style='height:40px;width:10%';border-bottom-style: solid;border-bottom-color: coral;><a href='index.php?act=ttkh&mo=".$row[0]."'> Mở </a></div>";
    else 
        echo "<div class='table_dep3'style='height:40px;width:10%';border-bottom-style: solid;border-bottom-color: coral;><a href='index.php?act=ttkh&mo=".$row[0]."'> Khóa </a></div>";
    if($row[5]==1)
        echo "<div class='table_dep3'style='height:40px;width:10%;border-bottom-style: solid;border-bottom-color: coral;'>QTViên</div>";
    else if($row[5]==2)
        echo "<div class='table_dep3'style='height:40px;width:10%;border-bottom-style: solid;border-bottom-color: coral;'>Khách Hàng</div>";
        else 
            
        echo "<div class='table_dep3'style='height:40px;width:10%;border-bottom-style: solid;border-bottom-color: coral;'>Nhân Viên</div>";
   echo "<div class='table_dep3'style='height:40px;width:8%;border-bottom-style: solid;border-bottom-color: coral;'><a href='index.php?act=ttkh&sua=".$row[0]."'> Sửa</a></div>";
   echo "<div class='table_dep3'style='height:40px;width:7%;border-bottom-style: solid;border-bottom-color: coral;'><a href='index.php?act=ttkh&xoa=".$row[0]."'onclick='return confirmDelete(this);'> Xóa</a></div>";
   echo "";
}
echo "</div>";
mysqli_query($conn,"SET NAMES,'utf8'");
mysqli_close($conn);
?>
<div style="height:auto;width:100%;">
    <?php
        if(isset($_GET['nut']))
        {
            if($_GET['nut']=="them")
                include('infomation/newuser.php');
            else {
                include('infomation/timuser.php');
            }    
        }
        if(isset($_GET['sua']))
            include('infomation/suauser.php');
        if(isset($_GET['xoa']))
        {
            include('infomation/xoauser.php');
        }
        if(isset($_GET['newtk']))
        {
            if($_GET['newtk']=="true")
                echo"<script>alert('Thêm Tài Khoản thành công');</script>";
        }
        if(isset($_GET['edittk']))
        {
            if($_GET['edittk']=="true")
                echo"<script>alert('Cập Nhật Tài Khoản thành công');</script>";
        }
        if(isset($_GET['deltk']))
        {
            if($_GET['deltk']=="true")
                echo"<script>alert('Xóa Tài Khoản thành công');</script>";
        }
        if(isset($_GET['timtk']))
        {
            if($_GET['timtk']=="false")
                echo"<script>alert('Thông Tin Bạn Cần Tìm Không Tồn Tại');</script>";
            else {
                $lenh=$_GET['timtk'];
                include('infomation/showtim.php');
            }
        }
        if(isset($_GET['mo']))
            include('infomation/updatemo.php');
    ?>
</div>