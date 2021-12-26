<?php
require_once("./connection.php");
class module{
    function getAllAccount(){
        $db = new Connection();
        $conn = $db -> conn;
        $sql = "SELECT * FROM khachhang";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }		           
        }
        return $result;
    }
    function getAllProduct(){
        $db = new Connection();
        $conn = $db -> conn;
        $sql = "SELECT * FROM sanpham";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }		           
        }
        return $result;
    }
    function getOrder(){ 
        $db = new Connection();
        $conn = $db -> conn;
        $sql = "SELECT * FROM hoadon";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }		           
        }
        return $result;
    }
    function getByID($id){
        $db = new Connection();
        $conn = $db -> conn;
        $sql = "SELECT * FROM sanpham WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){			
            return mysqli_fetch_assoc($result);
        }
        return null; 
    }
    function getOrderDetail($id){
        $db = new Connection();
        $conn = $db -> conn;
        $sql = "SELECT * FROM cthoadon WHERE mahd = '$id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){			
            return mysqli_fetch_assoc($result);
        }
        return null; 
    }
}
?>