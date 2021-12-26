<link rel="stylesheet" href="indexcss.css">
<div id="signinContainer" style="height:400px;">
    <form action="product/tttimpro.php" method="get"> 
        <div style="width:100%; height:0px;text-align:center"><h2>Tìm Kiếm Sản Phẩm</h2></div>
		<div style="width:95%; height:370px; margin-left:2.5%; margin-top:40px">
			<p>Tên Sản Phẩm</p>
			<input type="text" placeholder="Tìm kiếm theo tên sản phẩm..." name="pro"/>
            <p><b>Đơn giá (VNĐ)</b></p>
            <input name="price" type="text" placeholder="Nhập đơn giá muốn tìm..." />
            <p><b>Dung tích</b></p>
            <select name="con">
                <option value="0">Chon Size</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="S">S</option>
            </select>
            <p><b>Loại sản phẩm</b></p>
            <input name="idpro" type="text" placeholder="Nhập loại sản phẩm muốn tìm..." />
			<p style="text-align:center">
				<input type="reset" value="Nhập lại"/>
				<input type="submit" value="Tìm Kiếm" />
			</p>
        </div>     
    </form>
</div>