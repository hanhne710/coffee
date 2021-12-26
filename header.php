<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        input[type=search]{
            border: solid 0.5px #d17721;
            border-right: none;
            border-left: none;
            border-top: none;
            background: transparent;
        }
        
        .menu{
           font-size: 16px;
           margin-right:3%;
        }
        .menu2{
            font-size: 16px;
           margin-right:1.5%;t
        }
        .menu3{
            font-size: 16px;
           margin-right:1.5%;
           font-wight: bold;
        }
        .form-search input {
        padding: 4px;
    }

    .box-search {
        width: 100%;
        padding-left: 10px;
        padding-top: 4px;
        padding-bottom: 4px;
        display: flex;
        justify-content: center;
        border: 1px solid #d17721;
        margin-bottom: 4px;
        border-left:none;
        border-right:none;
        border-top:none;
        background: transparent;
    }

    #search-inp {
        border-radius: 4px;
        padding: 6px;
        font-size: 1.2rem;
        color: #333;
        width: 100%;
        overflow: hidden;
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
        background: transparent;
    }

    #btn-search {
       
        padding: 10px;
        background-color: transparent;
        outline: none !important;
        box-shadow: none !important;
        border: none !important;
        margin-top:-7%;
        background: transparent;
    }
                
    </style>
</head>
<body>
<header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <a class="navbar-brand" href="menu.php">
                    <img src="./images/logo.png">
                </a>
                <a href="menu.php" class="menu"style="font-weight:bold">
                    Home
                   
                </a>
                <a href="#" class="menu">
                    Menu
                </a>
                <a href="#" class="menu">
                    Blog
                </a>
                <a href="#" class="menu">
                    Contacts
                </a>
                &nbsp;&nbsp;&nbsp;
                <form class="col-md-4" action="" method="GET" class="form-inline">
                                    
                            <input type="search" name="keyword" placeholder="Search" required="">
                            <button style="color: #d17721; background:none; border:none"><span class="fa fa-search"></span></button>
                       
                </form>
  <?php 
					if(isset($_SESSION['dangky']) ||isset($_SESSION['dangnhap'])){
					echo " <a class='menu2' href='democart/cart.php'><i class='fas fa-shopping-cart'></i><span id='cart-item' class='badge badge-danger'></span></a>";
					}else{
						echo" <a class='menu2' href='#' onclick='kt();opendn()'><i class='fas fa-shopping-cart'></i><span id='cart-item' class='badge badge-danger'></span></a>";
					}
				?>
                <?php if (isset($_SESSION['username']) && $_SESSION['username']){?>
        <a class="menu3" onclick="document.getElementById('id01').style.display='none';>
                    <?php
                                if (isset($_SESSION['username']) && $_SESSION['username']){
                                    echo ' <li class="nav-item @@contact__active"><a class="nav-link" href="xuly/donhang.php">Order</a></li>'; 
                                    echo ' <li class="nav-item @@contact__active"><a class="menu3" href="#" >'.$_SESSION['username'].'</a></li>';
                                    
                                    echo ' <li class="nav-item @@contact__active"><a style="font-style: italic"class="nav-link" href="xuly/logout.php">Log out</a></li>';
                
                                }
                                ?>
                </a>
                <?php }else{?>
                            <a class="menu2" onclick="document.getElementById('id01').style.display='block';"
                                style="width:auto; color:#d27721">
                                Login
                            </a>
                        <?php }?>
                        <div>
                                <?php
                                if (isset($_SESSION['username']) && $_SESSION['username']){
                                    
                                   include ('ktadmin.php');
                                    
                                }
                                ?>
                        </div>

  <!--<button><a onclick="document.getElementById('id03').style.display='block';">FILTER</a></button> -->
  
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
    
    
                <!-- toggle switch for light and dark theme -->
                <!--<div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div> -->
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>

    <div id="id01" class="modal">

        <div class="modal-content animate" style="width: 350px">
        <?php
            if(isset($_GET['dn'])) {       

                
                if($_GET['dn']=='false') {  
                    echo"<script>alert('Sai tên đăng nhập hoặc mật khẩu ');document.getElementById('id01').style.display='block'; </script>";                
                }
            }
        ?>
            <div style="width:100%; height:70px; text-align:center;padding-top:10px;font-size: 30px;background: #d17721;color: white">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                   Sign in
                </div>
            <div class="containerlf" style="margin-top:-20px">
                <label for="uname"><b>Username</b></label>
                <input style="width:100%; height: 50px"type="text"name="uname" id="usn" required>

                <label for="psw"><b>Password</b></label>
                <input type="password"name="psw" id="pss" required>
                <span class="psw"><a style="font-size: 13px; font-style: italic"href="#">Forgot password?</a></span>
                <button type="submit" name="dangnhap" id="btktdn" class="sub">Sign in</button>
                <br><br>
                <span style="margin-left:27%"><a style="font-size: 12px;">Don't have an account</a></span>
                <div type="button" style="margin-left: 30%; color: #d17721; font-weight: bold " onclick="opendk()">SIGN UP NOW</div>
            </div>
        </div>
    </div>

    <!-- register -->
    <div id="id02" class="modal">

        <div class="modal-content animate" method="GET" action="./xuly/xulydangky.php" style="width:350px">
        <?php
            if(isset($_GET['dk'])) {       

                
                if($_GET['dk']=='false') {  
                    if($_GET['act']=='1')
                        echo"<script>alert('Sai tên đăng nhập hoặc mật khẩu do trung '); </script>"; 
                    if($_GET['act']=='2')
                        echo"<script>alert(' Mat khau khong khop voi nhau '); </script>"; 
                    echo"<script>document.getElementById('id02').style.display='block'; </script>";   

                }
            }
        ?>
            <div style="width:100%; height:70px; text-align:center;padding-top:10px;font-size: 30px;background: #d17721;color: white">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                   Sign in
                </div>

            <div class="containerlf">
                

                <label for="uname"><b>Fullname </b></label>
                <input style="width:100%; height:50px"type="text"name="txtten" id="hoten" required>

                <label for="uname"><b>Username</b></label>
                <input style="width:100%; height:50px"type="text"name="uname" id="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password"name="psw" id="password" required>

                <label for="psw"><b>Confirm password</b></label>
                <input type="password"name="rpsw" id="repass" required>


                <div style="height:30px;weight:20px;color:red;margin-top:1px" id="register_output"></div>
                <button type="submit" name="dangky" class="sub" id="register">Sign up</button>
                <br><br>
                <span style="margin-left:32%"><a style="font-size: 12px;">Have an account</a></span>
                <div type="button" style="margin-left: 30%; color: #d17721; font-weight: bold " onclick="opendn()">SIGN IN NOW</div>
                <?php
                    if (isset($_SESSION['username']) && $_SESSION['username']){
                        header("location: /menu.php?dk=true");
                    }

                ?>
                 
            </div>


        </div>
    </div>
    <div id="id03" class="modal">

<form class="modal-content animate" method="get" action="">
    <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close"
            title="Close Modal">&times;</span>
        <h2 style="text-align: center;color: #d17721;">ADVANCED SEARCH</h2>
    </div>

    <div class="containerlf">
    <div>NAME PRODUCT :</div>
    <input type="search" placeholder="Enter the product or category name to search for" name="search" id=search style="width:100%;padding: 12px 20px;border: 1px solid #ccc"><br/>
        PRICE :
        FROM <input type="text" name="giabd" id="giabd">
        TO <input type="text" name="giaden" id="giaden">
        <input type="submit" value=" Search ">
    </div>
</form>
</div>

</body>
</html>