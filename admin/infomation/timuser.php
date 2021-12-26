<link rel="stylesheet" href="indexcss.css">
<div id="signinContainer" style="height:330px;">
    <form action="infomation/tttimuser.php" method="get"> 
        <div style="width:100%; height:0px;text-align:center"><h2>Tìm Kiếm</h2></div>
		<div style="width:95%; height:310px; margin-left:2.5%; margin-top:40px">
			<p><i class="far fa-user fa-1.5x"></i> Họ tên</p>
			<input type="text" placeholder="Tìm kiếm theo họ tên..." name="yname"/>
			<p><i class="fas fa-user-friends fa-1.5x"></i> Tên đăng nhập</p>
			<input type="text" placeholder="Tìm kiếm theo tên đăng nhập..."name="yuser"/>
            <p>
                <i class="fas fa-toggle-off"></i> Tình Trạng
                    <input type="radio" value="2" name="ttrangu" style="margin-left:5%"/> Khóa
					<input type="radio" name="ttrangu" value="1"/> Mở
            </p>
            <p style="text-align:center">
                <i class="fas fa-shield-alt"></i> Quyền</p>
                <p>    <input type="radio" value="2" name="quyen" style="margin-left:3%"/> Khách hàng
                    <input type="radio" value="3" name="quyen" style="margin-left:3%"/> Nhân Viên
					<input type="radio" name="quyen" value="1"/> Quản trị viên
            </p>
			<p style="text-align:center">
				<input type="reset" value="Nhập lại"/>
				<input type="submit" value="Tìm Kiếm" />
			</p>
        </div>     
    </form>
</div>
