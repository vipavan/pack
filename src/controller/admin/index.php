<?php

include '../../session.php';
if(loginUserName == ""){
    echo '<script> window.location = "../../err_authen.php"; </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=yes" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="../../../assets/css/style-admin1.css">
    <!-- <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" /> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
    <script src="../../../assets/js/jquery.js"></script>
    <link rel="stylesheet" href="../../../assets/css/font.css">
    <script src="../../../assets/js/jquery-migrate-1.1.1.js"></script>
    <script src="../../../assets/js/jquery.easing.1.3.js"></script>
    <script src="../../../assets/js/script.js"></script>
    <script src="../../../assets/js/superfish.js"></script>
    <script src="../../../assets/js/jquery.equalheights.js"></script>
    <script src="../../../assets/js/jquery.mobilemenu.js"></script>
    <script src="../../../assets/js/tmStickUp.js"></script>
    <script src="../../../assets/js/jquery.ui.totop.js"></script>


</head>
<body class="page1" id="top">
<!--==============================
              header
=================================-->
<style>
    .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover{
        color: #7f5373;
    }
</style>
<header>

    <div class="container">
        <div class="row">
            <div class="grid_12 rel">
                <h1>
                    <a href="index.php">
                        <img src="../../../assets/images/logo1.png" alt="Logo alt" style="width:120px; height:120px;"> Pack 2 Go
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <section id="stuck_container">
        <!--==============================
                    Stuck menu
        =================================-->

        <!-- -->
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>

                            <ul class="sf-menu">
                                <li class="current"><a href="index.php">Home</a></li>
                                <li style="font-family: 'Athiti', sans-serif; font-weight:700px;" >สวัสดี <?php echo loginFullName ?> </li>
                                <li><a href="../../../logout.php" style="font-family: 'Athiti', sans-serif; font-weight:700px;">ออกจากระบบ</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="page1_header">
        <div class="container">
            <div class="row">
                <div class="grid_4">
                    <a href="add-cus.php" class="banner "><div class="maxheight">
                            <div class="fa fa-user-plus"></div>
                            <p style="font-family: 'Athiti', sans-serif; font-weight:700px;">
                                จัดการข้อมูลลูกค้า
                            </p>
                        </div>
                    </a>

                    <a href="manage-product.php" class="banner "><div class="maxheight">
                            <div class="fa fa-cart-plus" aria-hidden="true"></div>
                            <p style="font-family: 'Athiti', sans-serif; font-weight:700px;">
                                จัดการข้อมูลสินค้า
                            </p>
                        </div>
                    </a>
                    <a href="report.php" class="banner "><div class="maxheight1">
                            <div class="fa fa-bar-chart-o"></div>
                            <p style="font-family: 'Athiti', sans-serif; font-weight:700px;">
                                รายงาน
                            </p>
                        </div>
                    </a>
                    <a href="setting.php" class="banner "><div class="maxheight">
                            <div class="fa fa-cart-plus" aria-hidden="true"></div>
                            <p style="font-family: 'Athiti', sans-serif; font-weight:700px;">
                                ตั้งค่าการใช้งาน
                            </p>
                        </div>
                    </a>
                </div>
                <div class="grid_5">

                </div>
            </div>
        </div>
    </section>
</header>

<!--==============================
              footer
=================================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">

                <!-- <div class="sub-copy" style="text-align:center;">Website designed by <a href="index.php" rel="nofollow">TemplateMonster.com</a></div> -->
            </div>
        </div>
    </div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
