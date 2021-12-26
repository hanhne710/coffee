<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="indexcss.css">
</head>
<body leftmargin="0px"; topmargin="0px">
    <div class="trangchu">
        <div class="leftmenu">
            <div style="float: left;width: 50%">
                <img src="img/anh6.png" />
            </div>
            <a href="index.php?act=ttkh"><div class="thumuc" ><i class="fas fa-users" style="color:white"> Thông Tin Tài Khoản</i></div></a>
            <a href="index.php?act=ttsp"><div class="thumuc"><i class="fab fa-product-hunt" style="color:white">  Thông Tin Sản Phẩm </i></div></a>
            <a href="index.php?act=ttdh"><div class="thumuc"><i class="fas fa-list-ul" style="color:white"> Đơn hàng </i></div></a>
            <a href="index.php?act=tttk"><div class="thumuc"><i class="fas fa-sort-amount-up" style="color:white"> Thống kê </i></div></a>
        </div>
        <div class="rightmenu">
            <div class="rightmenu1">
                <?php include('layout/header.php');?>
            </div>
            <div class="rightmenu3">
                <?php include("page/content.php");?>
            </div>
            <div class="footer">
                <?php include("layout/footer.php");?>
            </div>
        </div>
        <div style="clear:both"></div>'
    </div>
</body>
</html>