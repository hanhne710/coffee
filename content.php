<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hi.scss">
    <title>Document</title>
    <style>
        input[type="text"]{
            height: 30px;
            width: 83%;
        
        }
        .modal-content animate form-submit{
          background: url("./images/sp.png");
        }
    </style>
</head>
<body>
<div class="inner-banner">
    
    </div>
    <img src="./images/Q.png" width="1519px">
    <div class="w3l-menublock py-5">
        <!-- menu block -->
        <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">

            <div class="container">
                <div class="title-content mb-5">
                    <h3 class="title-big text-center mb-5">Menu</h3>
                </div>
                

                <input id="tab1" type="radio" name="tabs" checked>
                <a href="menu.php?id=coffe" ><label class="tabtle" for="tab1">Coffee</label></a>
                <input id="tab2" type="radio" name="tabs" >
                <a href="menu.php?id=tea" ><label class="tabtle" for="tab2">Tea</label></a>
                <br><br>
                <div class="container">
  <div class="row" style="border: solid 1px #dcdcdc; height:60px">
    <div class="col-sm" style="border-right: solid 1px #dcdcdc; height: 100%; text-align: left; line-height: 55px; color: black; font-weight: bold">
    Price&nbsp; 
    <input type="text" name="giabd" id="giabd" placeholder="From">
      
    </div>
    <div class="col-sm" style="border-right: solid 1px #dcdcdc; height: 100%; text-align: left; line-height: 55px; color: black; font-weight: bold">
    Price
    <input type="text" name="giabd" id="giabd" placeholder="To">
    </div>
    <div class="col-sm" style="border-right: solid 1px #dcdcdc; height: 100%; text-align: left; line-height: 55px; color: black; font-weight: bold">

    <form action="" method="GET">
                                    
                                    <input type="text" name="keyword" placeholder="Search">
                                    <button style="background:none; border: none;"><span class="fa fa-search"></span></button>
                               
                        </form>
    </div>
  </div>
</div>
<br><br>
<section id="content1" class="tab-content text-left">
                    
                    <div class="row">
                        <!-- Section starts: Appetizers -->
                        <div class="col-sm-12">
                            <!-- Item starts -->
                            <?php
                                include('xuly/phantrang.php')
                            ?>
                            <!-- Item ends -->
                        </div>
                        <br><br>
                 
                        <?php
                                include('xuly/pagi.php')
                        ?>
        
                        

                            <!-- Item starts -->
                         

                </section>
                <section id="content2" class="tab-content text-left">
                    <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
                    <div class="row menu-body">
                        <!-- Section starts: Appetizers -->
                        <div class="col-sm-12">
                            <!-- Item starts -->
                            <?php
                                include('xuly/ptea.php')
                            ?>
                            <!-- Item ends -->
                        </div>
                        <?php
                                include('xuly/pgtea.php')
                        ?>
                        

                            <!-- Item starts -->
                         

                </section>

                
            </div>
        </div>
        <!-- menu block -->
    </div>
</body>
</html>