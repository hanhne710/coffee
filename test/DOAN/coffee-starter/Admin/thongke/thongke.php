<link rel="stylesheet" href="indexcss.css">
<div id="signinContainer" style="height:330px;">
    <form action="infomation/tttimuser.php" method="get"> 
        <div style="width:100%; height:0px;text-align:center"><h2>Tìm Kiếm</h2></div>
		<div style="width:95%; height:310px; margin-left:2.5%; margin-top:40px">
			<p><i class="far fa-user fa-1.5x"></i> ID Đơn Hàng</p>
			<input type="text" placeholder="Tìm kiếm theo họ tên..." name="yname"/>
			<p><i class="fas fa-user-friends fa-1.5x"></i>ID Nhân Viên</p>
			<input type="text" placeholder="Tìm kiếm theo tên đăng nhập..."name="yuser"/>
			<p><i class="fas fa-user-friends fa-1.5x"></i>Tên Khách Hàng</p>
			<input type="text" placeholder="Tìm kiếm theo Tên ..."name="yuser"/>
			<p><i class="fas fa-user-friends fa-1.5x"></i>Tổng Tiền</p>
			<input type="text" placeholder="Tìm kiếm tổng tiền..."name="yuser"/>
            <p>
                <i class="fas fa-toggle-off"></i> Tình Trạng
                    <input type="radio" value="0" name="ttrang" style="margin-left:5%"/> Đã Xử Lý
					<input type="radio" name="ttrang" value="1"/> Chưa Xử Lý
            </p>
			<p style="text-align:center">
				<input type="reset" value="Nhập lại"/>
				<input type="submit" value="Tìm Kiếm" />
			</p>
        </div>     
    </form>
</div>
