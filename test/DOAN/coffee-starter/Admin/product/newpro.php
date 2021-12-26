<script src="functionadmin.js"></script>
<link rel="stylesheet" href="indexcss.css">
<div id="signinContainer1">
    <form action="product/ttnewpro.php" method="get" onsubmit="return ktrapro();">
        <div style="width:100%; height:0px;text-align:center">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div style="width:95%; height:430px; margin-left:2.5%; margin-top:50px">
            <p><b>Mã sản phẩm</b></p>
            <input id="idp" name="idp" type="text" placeholder="Nhập mã sản phẩm..." />
            <p><b>Tên sản phẩm</b></p>
            <input id="namep" name="namep" type="text" placeholder="Nhập tên sản phẩm..." />
            <p><b>Đơn giá (VNĐ)</b></p>
            <input id="price" name="price" type="text" placeholder="Nhập đơn giá..." />
            <p><b>Ảnh sản phẩm (.JPG; .PNG)</b></p>
            <input id="img" name="img" type="file" style="width:74%; height:20px; padding:3px 0 5px 2%" />
            <p><b>Dung tích</b></p>
            <select id="con" name="con">
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="S">S</option>
            </select>
            <p><b>Loại sản phẩm</b></p>
            <input id="nameid" name="nameid" type="text" placeholder="Nhập loại sản phẩm..." />
            <p style="text-align:center">
                <input type="reset" value="Nhập lại" />
                <input type="submit" name="up" value="Thêm" />
            </p>
        </div>
    </form>
</div>