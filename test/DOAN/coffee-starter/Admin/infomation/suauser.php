<script src="functionadmin.js"></script>
<link rel="stylesheet" href="indexcss.css">
<?php
    $conn=mysqli_connect("localhost","root","","trasua");
    $suau=$_GET['sua'];
    $sql="SELECT * FROM khachhang WHERE matk='".$suau."'";
    $result=mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result)){
        $yname = $row[1];
        $uname= $row[2];
        $pass = $row[3];
        $tinhtrang=$row[4];
        $quyen=$row[5];
        }
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
?>
<div id="signinContainer1">
    <form action="infomation/changeuser.php" method="get" onsubmit="return ktdk();"> 
        <div style="width:100%; height:0px;text-align:center"><h1>Sửa user</h1></div>
		<div style="width:95%; height:490px; margin-left:2.5%; margin-top:70px">
            <p><b>Mã Tài Khoản</b></p>
            <input name="idtk" type="text" value="<?php echo $suau?>"/>
			<p><i class="far fa-user fa-1.5x"></i> Họ tên</p>
			<input type="text"  value="<?php echo $yname ?>" name="yname"/>
			<p><i class="fas fa-user-friends fa-1.5x"></i> Tên đăng nhập</p>
			<input type="text" value="<?php echo $uname ?>" name="yuser"/>
			<p><i class="fas fa-lock fa-1.5x"></i> Mật khẩu</p>
			<input type="text"  value="<?php echo $pass ?>" name="pass"/>
			<p><i class="fas fa-lock fa-1.5x"></i> Tinh Trang <p>
                <i class="fas fa-shield-alt"></i> Quyền
                <?php
                    if($tinhtrang==0){
                        echo '<input type="radio" value="0" name="tinhtrang" style="margin-left:5%" checked/> Khóa
                        <input type="radio" name="tinhtrang" value="1"/> Mở';
                    }
                    else echo '<input type="radio" value="0" name="tinhtrang" style="margin-left:5%"/> Khóa
					<input type="radio" name="tinhtrang" value="1" checked/> Mở';
                ?></p>
            <p>
                <i class="fas fa-shield-alt"></i> Quyền
                <?php
                    if($quyen==0){
                        echo '<input type="radio" value="0" name="quyen" style="margin-left:5%" checked/> Khách hàng
                        <input type="radio" name="quyen" value="1"/> Quản trị viên</p>';
                    }
                    else echo '<input type="radio" value="0" name="quyen" style="margin-left:5%"/> Khách hàng
					<input type="radio" name="quyen" value="1" checked/> Quản trị viên</p>';
                ?>
                    
			<p style="text-align:center">
				<input type="submit" value="Hoàn Thành" />
			</p>
        </div>     
    </form>
</div>