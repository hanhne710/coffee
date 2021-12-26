<?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        $conn=mysqli_connect("localhost","root","","trasua");
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        

        if(empty($_GET['keyword'])){
        if(isset($_GET['search'])&&empty($_GET['giabd'])&&empty($_GET['giaden'])){
            $tim = $_GET['search'];
            $cur="SELECT count(masp) FROM sanpham where tensp LIKE '%$tim%' OR matl LIKE '%$tim%' ";
            $result = mysqli_query($conn, $cur);
        }else
        if(isset($_GET['giabd'])&&isset($_GET['giaden'])&&empty($_GET['search'])){
            $bd=$_GET['giabd'];
            $kt=$_GET['giaden'];
            $cur="SELECT count(masp) FROM sanpham where gia between '$bd' and '$kt' ";
            $result = mysqli_query($conn, $cur);
        }else 
        if(isset($_GET['giabd'])&&isset($_GET['giaden'])&&isset($_GET['search'])){
            $se=$_GET['search'];
            $bd=$_GET['giabd'];
            $kt=$_GET['giaden'];
            $cur="SELECT count(masp) FROM `sanpham` WHERE matl = '$se' AND gia >='$bd' AND gia <= '$kt'";
            $result = mysqli_query($conn, $cur);
        }
        else  
        $result = mysqli_query($conn,"select count(masp) from sanpham ");
        }else {
            $s=$_GET['keyword'];
            $cur="SELECT count(masp) FROM sanpham WHERE tensp LIKE '%$s%'";
            $result = mysqli_query($conn, $cur);
        }
        $row = mysqli_fetch_array($result);

        $total_records = $row[0];
        
 
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 6;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        if(empty($_GET['keyword'])){
        if(isset($_GET['search'])&&empty($_GET['giabd'])&&empty($_GET['giaden'])){
            $tim = $_GET['search'];
            $cur="SELECT * FROM sanpham where tensp LIKE '%$tim%' OR matl LIKE '%$tim%' LIMIT $start, $limit ";
            $result1 = mysqli_query($conn, $cur);
        }else
        if(isset($_GET['giabd'])&&isset($_GET['giaden'])&&empty($_GET['search'])){
            $bd=$_GET['giabd'];
            $kt=$_GET['giaden'];
            $cur="SELECT * FROM sanpham where gia between '$bd' and '$kt' LIMIT $start, $limit ";
            $result1 = mysqli_query($conn, $cur);
        }else 
        if(isset($_GET['giabd'])&&isset($_GET['giaden'])&&isset($_GET['search'])){
            $se=$_GET['search'];
            $bd=$_GET['giabd'];
            $kt=$_GET['giaden'];
            $cur="SELECT * FROM `sanpham` WHERE matl = '$se' AND gia >='$bd' AND gia <= '$kt' LIMIT $start, $limit ";
            $result1 = mysqli_query($conn, $cur);
        }
        else 
        $result1 = mysqli_query($conn, "SELECT * FROM sanpham  LIMIT $start, $limit");
        }else {
            $s=$_GET['keyword'];
            $cur="SELECT * FROM sanpham WHERE tensp LIKE '%$s%' LIMIT $start, $limit";
            $result1 = mysqli_query($conn, $cur);
        }
        ?>
<div>
    <?php 

        if($result1!=NULL)
            while ($row = mysqli_fetch_assoc($result1)):
                
                 
                echo'
                
                
                <div class="menu-item" onclick="document.getElementById(\'id04-'.$row['masp'].'\'  ).style.display=\'block\';">
                <img src="' .$row['hinhanh']. '" alt="" class="radius-image img-fluid">
                <div>
                    <div class="row border-dot no-gutters">
                        <div class="col-8 menu-item-name">
                            <h6>' .$row['tensp']. '</h6>
                        </div>
                        <div class="col-4 menu-item-price text-right">
                            <h6>'.number_format($row['gia']).'đ</h6>
                        </div>
                    </div>
                    <div class="menu-item-description">
                        <p>'.$row['dungtich'].'</p>
                    </div>
                </div>
                </div>

                <div id="masp'.$row['masp'].'" class="id04" >
                    '.$row['masp'].'
                </div>


                <div id=\'id04-'.$row['masp'].'\' class="modal">

                <form class="modal-content animate form-submit" action="" style="box-shadow: 10px 10px 25px 10px rgba(0, 0, 0, 0.3); width:400px;">
                <div class="imgcontainer">
                <span onclick="document.getElementById(\'id04-'.$row['masp'].'\').style.display=\'none\'" class="close"
                        title="Close Modal">&times;</span>
                    <img src="' .$row['hinhanh']. '" class="avatar">
                </div>
                <div class="imgcontainer">
                    <h2 style="text-align: center;color: #d17721;">' .$row['tensp']. '</h2>
                    <h6 style="color:#d17721; font: size 20px; font-weight:bold">'.number_format($row['gia']).'đ</h6>
                </div>
    <hr>
                <div class="containerlf" style="text-align: center">
                    <label for="uname"><b style="font-size: 15px; color: black">Thể tích : ' .$row['dungtich']. '</b></label>
                    <div class="col-4 menu-item-price text-right" style="max-width: 100%">
                    </div>
                    <label>
                        <b style="font-size: 15px; color: black">Quantity : <input style="width: 70px; height:30px" type="number" min="1"class= "pqty" value=' .$row['soluong'] .'></b>
                    </label>
                </div>
                <input type="hidden" class="pid" value='.$row['id'].'">
                <input type="hidden" class="pname" value='.$row['tensp'].'>
                <input type="hidden" class="pprice" value='.number_format($row['gia']).'>
                <input type="hidden" class="pimage" value='.$row['hinhanh'].'>
                <input type="hidden" class="pcode" value='.$row['masp'].'>
                <button style="background: #d17721"class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
    
                
            </form>
    </div>';
                endwhile;
                else echo 'Data not found'
            ?>
</div>




