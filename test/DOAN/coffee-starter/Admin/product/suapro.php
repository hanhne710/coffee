<script src="functionadmin.js"></script>
<link rel="stylesheet" href="indexcss.css">
<?php
    $conn=mysqli_connect("localhost","root","","trasua");
    $suapr=$_GET['sua'];
    $sql="SELECT * FROM sanpham WHERE masp='".$suapr."'";
    $result=mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result)){
        $masp=$row[0];
        $tenpr = $row[1];
        $gia = $row[3];
        $anh= $row[2];
        $dt=$row[4];
        $matl=$row[5];
        }
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<div id="signinContainer1">
    <form action="product/ttsuapro.php" method="get" onsubmit="return ktrapro();"> 
        <div style="width:100%; height:0px;text-align:center"><h2>Sửa Sản Phẩm</h2></div>
		<div style="width:95%; height:540px; margin-left:2.5%; margin-top:35px">
            <p><b>Mã sản phẩm</b></p>
            <input id="idp" name="idp" type="text" value="<?php echo $masp?>" readonly/>
            <p><b>Tên sản phẩm</b></p>
            <input id="namep" name="namep" type="text" value="<?php echo $tenpr?>"/>
            <p><b>Đơn giá (VNĐ)</b></p>
            <input id="price" name="price" type="text" value="<?php echo $gia?>"/>
            <p><b>Ảnh sản phẩm (.JPG; .PNG)</b></p>
            <input id="img" name="img" type="file" style="width:74%; height:20px; padding:3px 0 5px 2%" value="<?php echo $anh?>"/>
            <p><b>Dung tích</b></p>
            <input id="con" name="con" type="text" value="<?php echo $dt?>"/>
            <p><b>Loại sản phẩm</b></p>
            <input id="nameid" name="nameid" type="text" value="<?php echo $matl?>"/>
            <p style="text-align:center">
                <input type="reset" value="Nhập lại" />
                <input type="submit" value="Hoàn Thành" />
            </p>
        </div>     
    </form>
</div>