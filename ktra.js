function ktra(){
    var a= document.getElementById('search').value;
    var b= document.getElementById('giabd').value;
    var c= document.getElementById('giaden').value;
    if(a==""&& b==""&&c=="")
    {alert("Bạn chưa nhập điều kiện muốn tìm");
        return false;
    }
    else {
        if(b==""&&c!=""){
            alert("Bạn chưa nhập giá trị bắt đầu cần tìm");
            return false;
        }
        if(b!=""&&c==""){
            alert("Bạn chưa nhập giá trị kết thúc cần tìm");
            return false;
        }
        if(a==b&& b==c && c=="")
        {
            alert("bạn chỉ có thểm tìm một loại từ khóa");
            return false;
        }
        return true;
    }

}