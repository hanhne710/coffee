<style>
.hopthoai{
    width: 200px;
    height: 75px; 
    border: #FFF 5px solid;
    background-color: black;
    color: orangered;
    position: absolute;
    top: 10px;
    left: 75%;
}
.hopthoai type[submit]{
    width:47%;
    float:left;
    text-align:center;
    margin-left: 50px;
    height: 28px;
    border: #000 1px solid;
}
</style>
<?php
if(isset($_GET['xoa'])){
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['confirm'] == 'Có') {
      $conn=mysqli_connect("localhost","root","","trasua");
      $xoapr=$_GET['xoa'];
      $sql="DELETE FROM sanpham WHERE masp='$xoapr'";
      mysqli_query($conn,"SET NAMES,'utf8'");
      mysqli_query($conn,$sql);
      mysqli_close($conn);
    }
    echo "<script>
    window.location='./index.php?act=ttsp&delsp=true';</script>;";
}
}
?>
<div class="hopthoai">
<form method="post">
  <p style="text-align: center">Bạn có muốn tiếp tục?</p>
  <div style="height: 50px">
    <p><input type="submit" name="confirm" value="Có">
    <input type="submit" name="confirm" value="Không"></p>
    <input type="hidden" name="xoa" value="<?php echo $_GET['xoa']; ?>">
  </div>
</form>
</div>