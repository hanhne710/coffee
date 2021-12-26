<?php
  session_start();
?>

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ORDER</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="../menu.php">
                    <span class="fa fa-coffee"></span> Coffee
                </a></nav>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
<div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="3">
                  <h4 class="text-center text-info m-0">Products in your order!</h4>
                </td>
              </tr>
              <tr>
                <th>ID</th>
                <th>ALL ITEM</th>
                <th>GRAND TOTAL</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $conn=mysqli_connect("localhost","root","","trasua");
                if(isset($_SESSION['dangnhap'])||isset($_SESSION['dangky']) )
                    $makh=$_SESSION['matk'];
                $stmt = $conn->prepare('SELECT * FROM hoadon where matk=?');
                $stmt->bind_param('i',$makh);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()){
                echo"<tr>
                        <td>$row[idhd]</td>
                        <td>$row[noidungdathang]</td>
                        <td>
                            &nbsp;&nbsp;$row[thanhtien]đ
                        </td>
                    </tr>
                    ";                }
                ?>
            </tbody>
          </table>
</div>
      </div></div></div>
</body>
