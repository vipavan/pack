<?php

include '../session.php';
if (loginUserName == "") {
  echo '<script> window.location = "../err_authen.php"; </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="../../assets/css/style-add.css">
<!-- <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" /> -->
<!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="../../assets/css/font.css">
<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/jquery-migrate-1.1.1.js"></script>
<script src="../../assets/js/jquery.easing.1.3.js"></script>
<script src="../../assets/js/script.js"></script>
<script src="../../assets/js/superfish.js"></script>
<script src="../../assets/js/jquery.equalheights.js"></script>
<script src="../../assets/js/jquery.mobilemenu.js"></script>
<script src="../../assets/js/tmStickUp.js"></script>
<script src="../../assets/js/jquery.ui.totop.js"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
 });
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1" id="top">
<!--==============================
              header
=================================-->
<header>

  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.php">
            <img src="../../assets/images/logo1.png" alt="Logo alt" style="width:120px; height:120px;"> Pack 2 Go
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
              <!-- <h2><a href="index.html">Pack 2 Go</a></h2> -->
              <ul class="sf-menu">
               <li class="current"><a href="index.php">Home</a></li>
               <li style="font-family: 'Athiti', sans-serif; font-weight:700px;" >สวัสดี <?php echo loginFullName ?> </li>
               <!-- <li><a href="services.html">Services</a></li> -->
               <!-- <li><a href="blog.html">Blog</a></li> -->
               <li><a href="../../logout.php" style="font-family: 'Athiti', sans-serif; font-weight:700px;">ออกจากระบบ</a></li>
             </ul>
            </nav>
            <div class="clear"></div>
         </div>
         <div class="clear"></div>
        </div>
     </div>
    </div>
  </section>


  <!-- <h2><a href="index.html" style="padding-left:55px;">Pack 2 Go</a></h2> -->
  <!-- <section id="stuck_container"> -->
  <!--==============================
              Stuck menu
  =================================-->

    <!-- -->
    <!-- <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
            <nav> -->
              <!-- <h2><a href="index.html">Pack 2 Go</a></h2> -->
              <!-- <ul class="sf-menu">
               <li class="current"><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="services.html">Services</a></li>
               <li><a href="blog.html">Blog</a></li>
               <li><a href="contacts.html">Contacts</a></li>
             </ul> -->
            <!-- </nav> -->
            <!-- <div class="clear"></div> -->
          <!-- </div>
         <div class="clear"></div>
        </div>
     </div>
    </div> -->
  <!-- </section> -->


  <section class="page1_header">
    <div class="container">
      <div class="row">
        <div class="grid_4">
          <a href="check-stock.php" class="banner " ><div class="maxheight">
            <div class="fa fa-database"></div>
            <p style="font-family: 'Athiti', sans-serif; font-weight:700px;">
            ตรวจสอบสินค้า
            </p>
          </div>
          </a>
          <a href="send-goods.php" class="banner"><div class="maxheight">
            <div class="fa fa-cart-plus" aria-hidden="true"></div>
            <p style="font-family: 'Athiti', sans-serif; font-weight:700px;">
              สร้างรายการส่งสินค้า
                </p>
            </div>
          </a>
          <a href="manage-cus.php" class="banner "><div class="maxheight1">
            <div class="fa fa-cog"></div>
            <p style="font-family: 'Athiti', sans-serif; font-weight:700px;">
              จัดการข้อมูลลูกค้า
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
        </div>
        <div class="grid_5">
          <!-- <h2>Pack 2 Go</h2> -->
        </div>
      </div>
    </div>
  </section>
</header>
<!-- <div class="block-1" >
  <div class="container">
    <div class="row">
      <div class="grid_3">
        <div class="block-1_count">10</div>
        Years of <br> Experience
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count">30</div>
        Successful <br> Projects
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <div class="block-1_count">20</div>
        Partner <br> Projects
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <a href="#" class="support"><img src="images/support.png" alt=""></a>
      </div>
    </div>
  </div>
</div> -->
<!--=====================
          Content
======================-->
<!-- <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div> -->
  <!-- <div class="container">
    <div class="row">
      <div class="grid_10 preffix_1 ta__center">
        <div class="greet">
          <h2 class="head__1">
            Welcome
          </h2>
          <p>Read more about the <a href=" http://blog.templatemonster.com/free-website-templates/" rel="nofollow" class="color1">freebie</a> here. <br> Go to TemplateMonster.com and find more <a href="http://www.templatemonster.com/properties/topic/business-services/" rel="nofollow" class="color1">goodies</a> of this kind </p>
          Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet site amet est vel, commodo venenatis eros. Fusce adipiscing quam id risus sagittis, non consequat lacus interdum. nulla, eu sodales arcu. Quisque viverra nulla nunc, eu ultrices libero ultricies eget. Phasellus accumsan
        </div>
      </div>
    </div>
  </div>
  <article class="content_gray">
    <div class="container">
      <div class="row">
        <div class="grid_7">
          <h3>Our Advantages</h3>
          <div class="block-2">
            <img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Experience</a></div>
              <p>Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert varius augue, eu consectetur ligulaam dui eros dertoli.</p>Fusce adipiscing quam id risus sagittis, non consequat lacus interdum. Proin ut tinciduntol nulla, eu sodales vertomin
              <br>
              <a href="#" class="link-1">more</a>
            </div>
          </div>
          <div class="block-2">
            <img src="images/page1_img2.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Marketing</a></div>
              <p>Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert varius augue, eu consectetur ligulaam dui eros dertoli.</p>Fusce adipiscing quam id risus sagittis, non consequat lacus interdum. Proin ut tinciduntol nulla, eu sodales vertomin
              <br>
              <a href="#" class="link-1">more</a>
            </div>
          </div>
        </div>
        <div class="grid_4 preffix_1">
          <h3>Testimonials</h3>
          <blockquote class="bq1">
            <p>“Curabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am est vel commodo venenatisipiscing... ”</p>
            <span>Liza Jons</span>
          </blockquote>
          <blockquote class="bq1">
            <p>“Burabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am ast vel commodo venenatisipiscino... ”</p>
            <span>Mark Brown</span>
          </blockquote>
        </div>
      </div>
    </div>
  </article>
  <div class="container">
    <div class="row">
      <div class="grid_5">
        <h4>About Company</h4>
        <img src="images/page1_img3.jpg" alt="" class="img_inner fleft">
          <p>Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert arius augue, eu consectetur </p>
          <p class="offset__1">Eligulaam dui eros dertolisce dertolo adipiscing quam id risus sagittis</p>
          Curabitur vel lorem sit amet nulla ullamcorper fermentum In vitae dert rius augue, eu consectetur larem dui eros dertolisce dertolo
      </div>
      <div class="grid_4">
        <h4>Solutions</h4>
        <ul class="list-1">
          <li><a href="#">Vivamus at magna non nunc tristique </a></li>
          <li><a href="#">Aliquam nibh ante, egestas id</a></li>
          <li><a href="#">Ommodo luctus libero</a></li>
          <li><a href="#">Faucibus malesuada faucibusonec </a></li>
          <li><a href="#">Laoreet metus id laoreet</a></li>
          <li><a href="#">Jalesuadaorem ipsum dolor sit ame</a></li>
        </ul>
      </div>
      <div class="grid_3">
        <h4>Contact Info</h4>
        <address>
          <ul class="cont_address">
            <li>8901 Marmora Road, Glasgow, D04 89GR</li>
            <li>+1 (800) 123 9876</li>
            <li><a href="#">info@demolink.org</a></li>
            <li><a href="#">www.demolink.org</a></li>
          </ul>
        </address>
      </div>
    </div>
  </div>
</section> -->
<!--==============================
              footer
=================================-->
<!-- <footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> -->
        <!-- <div class="copyright"><span class="brand">Pack 2 Go</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> -->
          <!-- <div class="sub-copy" style="text-align:center;">Website designed by <a href="index.php" rel="nofollow">TemplateMonster.com</a></div> -->
        <!-- </div>
      </div>
    </div>
  </div>
</footer> -->
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
