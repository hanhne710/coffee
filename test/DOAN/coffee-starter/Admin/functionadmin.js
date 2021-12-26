function ktdk()
    { 
        if(document.getElementById('yname').value=='')
    {
        alert("vui long nhap du ");
        document.getElementById('yname').focus();
        return false;
    }   
    if(document.getElementById('yuser').value=='')
    {
        alert("vui long nhap du ");
        document.getElementById('yuser').focus();
        return false;
    } 
    if(document.getElementById('pass').value=='')
    {
        alert("vui long nhap du ");
        document.getElementById('pass').focus();
        return false;
    } 
    if(document.getElementById('rpass').value=='')
    {
        alert("vui long nhap du ");
        document.getElementById('rpass').focus();
        return false;
    }   
    if(document.getElementById('rpass').value!=document.getElementById('pass').value)
    {
        alert("password khac nhau vui long nhap lai");
        document.getElementById('pass').focus();
        document.getElementById('rpass').focus();
        return false;    
    }
    return true;
    }
	function ktrapro()
    {
        var ma,ten,gia,ml,loai;
        ma=document.getElementById('id').value;
        ten=document.getElementById('namep').value;
        gia=document.getElementById('prince').value;
        ml=document.getElementById('con').value;
        loai=document.getElementById('nameid').value;
        if(ma==''||ten==''||gia==''||ml==''||loai==''){
            alert('Chưa nhập đủ thông tin sản phẩm');
            return false;
        }
        else 
            return true;
    }
    function confirmDelete(link) {
        if (confirm("Are you sure?")) {
            doAjax(link.href, "POST"); 
        }
        return false;
    }
