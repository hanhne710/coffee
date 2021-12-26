$(document).ready(function(){
    $("#register").click(function(){
        var hoten = $("#hoten").val();
        var user = $("#username").val();
        var pass = $("#password").val();
        var rpass = $("#repass").val();
        
        var data = "hoten="+hoten+"&user="+user+"&pass="+pass;
        if (user.match(/^[a-zA-Z0-9]{4,}$/) && pass.match(/^[a-zA-Z0-9]{4,}$/) && hoten.match(/^[a-zA-Z ]{4,}$/) && pass==rpass)
        {

            $.ajax({
                method: "GET",
                url: "register.php?",
                data:{hoten:hoten,user:user,pass:pass},
                success: function(data)
                {
                    if(data=='no')
                    $("#register_output").html("Username is taken");
                    else {
                        alert('Success');
                        location.reload();
                    }
                }
            })
        }
        else {
            //$('#register_output').css('border', '1px solid red');
            $("#register_output").html('enter the appropriate data type');            
        }
        if (user.match(/^[a-zA-Z0-9]{4,20}$/))
            {$('#username').css('border', '1px solid #ccc');}
        else {
            $('#username').css('border', '1px solid red');
        }

        if (pass.match(/^[a-zA-Z0-9]{4,20}$/))
            {$('#password').css('border', '1px solid #ccc');}
        else {
            $('#password').css('border', '1px solid red');
        }

        if (hoten.match(/^[a-zA-Z ]{4,20}$/))
            {$('#hoten').css('border', '1px solid #ccc');}
        else {
            $('#hoten').css('border', '1px solid red');
        }
        if (pass==rpass)
        {
            $('#password').css('border', '1px solid #ccc');
            $('#repass').css('border', '1px solid #ccc');
        }
        else {
            $('#password').css('border', '1px solid red');
            $('#repass').css('border', '1px solid red');
        }
        
    });
});
$(document).ready(function(){
    $("#btktdn").click(function(){
        
        var user = $("#usn").val();
        var pass = $("#pss").val();
        
        
        
        if (user!='' && pass!='') 
        {

            $.ajax({
                method: "POST",
                url: "ktdn.php?",
                data:{user:user,pass:pass},
                success: function(data)
                {
                    if(data !='yes')
                        alert("Please check your username or password !!");
                    else{
                        $('#id01').hide();
                        location.reload();
                    }
                }

            });

        }
        else alert('Please complete login information');

        
        
    });
});
