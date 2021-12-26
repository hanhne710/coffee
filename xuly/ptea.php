<?php 
        // PHẦN XỬ LÝ PHP
        // BƯỚC 1: KẾT NỐI CSDL
        $conn=mysqli_connect("localhost","root","","trasua");
        
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        
        $sql = "select count(masp) from sanpham ";
       
        
        mysqli_query($conn,"SET NAMES,'utf8'");
        $result = mysqli_query($conn,"select count(masp) from sanpham where matl='tea' ");
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
        $result = mysqli_query($conn, "SELECT * FROM sanpham where matl='tea'  LIMIT $start, $limit");
 
        ?>
<div>
    <?php 
            // PHẦN HIỂN THỊ TIN TỨC
            // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
            while ($row = mysqli_fetch_assoc($result)){
                echo'
                <div id="message"></div>
                
                <div class="menu-item" onclick="document.getElementById(\'id04-'.$row['masp'].'\'  ).style.display=\'block\';">
                <img src="' .$row['hinhanh']. '" alt="" class="radius-image img-fluid">
                <div>
                    <div class="row border-dot no-gutters">
                        <div class="col-8 menu-item-name">
                            <h6>' .$row['tensp']. '</h6>
                        </div>
                        <div class="col-4 menu-item-price text-right">
                            <h6>'.$row['gia'].'đ</h6>
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

        <form class="modal-content animate form-submit" action="">
            <div class="imgcontainer">
                <img src="' .$row['hinhanh']. '" alt="Avatar" class="avatar">
            </div>
            <div class="imgcontainer">
                <span onclick="document.getElementById(\'id04-'.$row['masp'].'\').style.display=\'none\'" class="close"
                    title="Close Modal">&times;</span>
                <h2 style="text-align: center;color: #d17721;">' .$row['tensp']. '</h2>
            </div>

            <div class="containerlf">
                <label for="uname"><b>Thể tích : ' .$row['dungtich']. '</b></label>
                <div class="col-4 menu-item-price text-right" style="max-width: 100%">
                            <h6>'.$row['gia'].'đ</h6>
                </div>
                <label>
                    <b>Quantity :<input style="width: 100px;" type="text" class= "pqty" value=' .$row['soluong'] .'></b>
                </label>
            </div>
            <input type="hidden" class="pid" value='.$row['id'].'">
            <input type="hidden" class="pname" value='.$row['tensp'].'>
            <input type="hidden" class="pprice" value='.$row['gia'].'>
            <input type="hidden" class="pimage" value='.$row['hinhanh'].'>
            <input type="hidden" class="pcode" value='.$row['masp'].'>
            <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
              cart</button>

            
        </form>
    </div>';

            }
            ?>
</div>