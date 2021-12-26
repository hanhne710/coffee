<?php
	session_start();
	require 'config.php';

	//Them san pham vao gio hang
	if (isset($_POST['pid'])) {
	  $pid = $_POST['pid'];
	  $pname = $_POST['pname'];
	  $pprice = $_POST['pprice'];
	  $pimage = $_POST['pimage'];
	  $pcode = $_POST['pcode'];
	  $pqty = $_POST['pqty'];
	  $thanhtien = $pprice * $pqty;

	  $stmt = $conn->prepare('SELECT masp FROM cart WHERE masp=?');
	  $stmt->bind_param('s',$pcode);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['masp'] ?? '';

	  if (!$code) {
	    $query = $conn->prepare('INSERT INTO cart (tensp,gia,hinhanh,qty,thanhtien,masp) VALUES (?,?,?,?,?,?)');
	    $query->bind_param('ssssss',$pname,$pprice,$pimage,$pqty,$thanhtien,$pcode);
	    $query->execute();

	    echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item added to your cart!</strong>
						</div>';
	  } else {
	    echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item already added to your cart!</strong>
						</div>';
	  }
	}

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	  $stmt = $conn->prepare('SELECT * FROM cart');
	  $stmt->execute();
	  $stmt->store_result();
	  $rows = $stmt->num_rows;

	  echo $rows;
	}

	//Xoa tung san pham
	if (isset($_GET['remove'])) {
	  $id = $_GET['remove'];

	  $stmt = $conn->prepare('DELETE FROM cart WHERE id=?');
	  $stmt->bind_param('i',$id);
	  $stmt->execute();

	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'Item removed from the cart!';
	  header('location:cart.php');
	}

	// Xoa gio hang
	if (isset($_GET['clear'])) {
	  $stmt = $conn->prepare('DELETE FROM cart');
	  $stmt->execute();
	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'All Item removed from the cart!';
	  header('location:cart.php');
	}

	// Cap nhat so luong va tongtien
	if (isset($_POST['qty'])) {
	  $qty = $_POST['qty'];
	  $pid = $_POST['pid'];
	  $pprice = $_POST['pprice'];

	  $tprice = $qty * $pprice;

	  $stmt = $conn->prepare('UPDATE cart SET qty=?, thanhtien=? WHERE id=?');
	  $stmt->bind_param('isi',$qty,$tprice,$pid);
	  $stmt->execute();
	}

	// Thanh toán
	if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $tinhtrang=1;
	  $ngaylap=date('d-m-Y');
	  $data = '';
	  $id=mysqli_insert_id($conn);
		if(isset($_SESSION['dangky'])){
					 $makh=$_SESSION['matk'];
		}
		if(isset($_SESSION['dangnhap'])){
			$makh=$_SESSION['matk'];
}

	  $stmt = $conn->prepare('INSERT INTO hoadon (idhd,matk,noidungdathang,ngaylap,thanhtien,tinhtrang)VALUES(?,?,?,?,?,?)');
	  $stmt->bind_param('iissss',$id,$makh,$products,$ngaylap,$grand_total,$tinhtrang);
	  $stmt->execute();
	  if($stmt){
		$stmt4 = $conn->prepare("SELECT idhd FROM hoadon where noidungdathang=? and matk=?");
		$stmt4->bind_param('si',$products,$makh);
		$stmt4->execute();
		$result1 = $stmt4->get_result();
		$row1=$result1->fetch_assoc();
		$idhd=null;
		$stmt2 = $conn->prepare("SELECT * FROM cart");
		$stmt2->execute();
		$result = $stmt2->get_result();
		$masp=null;
		$qty=null;
		$thanhtien=null;
		while ($row = $result->fetch_assoc()){
						$masp=$row['masp'];
						$qty=$row['qty'];
						$idhd=$row1['idhd'];
						$thanhtien=$row['thanhtien'];
						$trangthai=1;    
						$stmt1=$conn->prepare('INSERT INTO cthoadon(mahd,masp,gia,soluong,ngaydat)VALUES(?,?,?,?,?)');
						$stmt1->bind_param('issis',$idhd,$masp,$thanhtien,$qty,$ngaylap);
						$stmt1->execute();
		}       
		}
	  $stmt2 = $conn->prepare('DELETE FROM cart');
	  $stmt2->execute();
	  unset($_SESSION['submit']);
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $products . '</h4>
								<h4>Total Amount Paid : ' .$grand_total . '</h4>
						  </div>';
	  echo $data;
	}
?>