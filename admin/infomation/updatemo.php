<?php
if(isset($_GET['mo'])){
  $conn=mysqli_connect("localhost","root","","trasua");
  $mo=$_GET['mo'];
  $result=mysqli_query($conn,"select * from khachhang where matk='$mo'");
  $mo1="";
  while($row = mysqli_fetch_array($result)){
  $mo1 = $row[4];}
  if($mo1==1)
      $sql1="UPDATE `khachhang` SET `TinhTrang`='2' WHERE matk='$mo'";
  else 
      $sql1="UPDATE `khachhang` SET `TinhTrang`='1' WHERE matk='$mo'";
  mysqli_query($conn,$sql1);
  mysqli_query($conn,"SET NAMES,'utf8'");
  mysqli_close($conn);
  echo "<script>window.location='./index.php?act=ttkh&edittk=true';</script>;";
}
?>