<script src="functionadmin.js"></script>
<link rel="stylesheet" href="indexcss.css">
<div id="signinContainer" style="height: 490px;">
    <form action="infomation/thongtinnewu.php" method="get" onsubmit="return ktdk();"> 
        <div style="width:100%; height:0px;text-align:center"><h2>Thêm Tài Khoản</h2></div>
		<div style="width:95%; height:470px; margin-left:2.5%; margin-top:40px">
			<p><i class="far fa-user fa-1.5x"></i> Họ tên</p>
			<input type="text" placeholder="Nhập họ tên..." value="" id="yname" name="yname"/>
			<p><i class="fas fa-user-friends fa-1.5x"></i> Tên đăng nhập</p>
			<input type="text" placeholder="Nhập tên đăng nhập..." value="" id="yuser" name="yuser"/>
			<p><i class="fas fa-lock fa-1.5x"></i> Mật khẩu</p>
			<input type="password" placeholder="Nhập mật khẩu..." id="pass" name="pass"/>
			<p><i class="fas fa-lock fa-1.5x"></i> Xác nhận mật khẩu</p>
			<input type="password" placeholder="Nhập lại mật khẩu..." id="rpass">
            <p>
                <i class="fas fa-shield-alt"></i> Quyền</p>
                    <p><input type="radio" value="2" name="quyen" style="margin-left:3%"/> Khách hàng
                    <input type="radio" value="3" name="quyen" style="margin-left:3%"/> Nhân Viên
					<input type="radio" name="quyen" value="1"/> Quản trị viên
					</p>
			<p style="text-align:center">
				<input type="reset" value="Nhập lại"/>
				<input type="submit" value="Thêm" />
			</p>
        </div>     
    </form>
</div>