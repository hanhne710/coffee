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
            }
            else 
            $result1 = mysqli_query($conn, "SELECT * FROM sanpham  LIMIT $start, $limit");
            }else {
                $s=$_GET['keyword'];
                $cur="SELECT * FROM sanpham WHERE tensp LIKE '%$s%' LIMIT $start, $limit";
                $result1 = mysqli_query($conn, $cur);
            }
        ?>

<div class="pagination">
    <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="menu.php?page='.($current_page-1).'"><i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i></a>&ensp;&ensp; ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                $gia=isset($bk)&&isset($kt)&&empty($tim=null)
                ? $_GET['page'] : 1;
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span style="border:solid 0.5px #d17721;width:30px; text-align: center; line-height:30px; height:30px; background: #d17721; color: white">'.$i.'</span> ';
                }
                else{
                    echo '<a href="menu.php?page='.$i.'">
                    <p style="border:solid 0.5px #d17721; width:30px; text-align: center; background: white; color: #D17721">'.$i.'</p>
                    </a>';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="menu.php?page='.($current_page+1).'">&ensp;&ensp;<i class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></a> ';
            }
           ?>
</div>