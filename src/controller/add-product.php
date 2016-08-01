<!DOCTYPE html>
<html lang="en">
<head>
<title>add product</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" href="../../assets/css/font.css">
<link rel="stylesheet" href="../../assets/css/style-add.css">
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<script src="assets/js/jquery.js"></script>
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
<body>
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.php">
            <img src="../../assets/images/logo1.png" alt="Logo alt" style="height:120px; width:120px;">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
  <style >
  li{
    font-family: 'Athiti', sans-serif; font-weight:700px;
  }
  a{
    font-family: 'Athiti', sans-serif; font-weight:700px;
  }
  h2{
    font-family: 'Athiti', sans-serif; font-weight:700px;
  }
  label{
    font-family: 'Athiti', sans-serif; font-weight:700px;
    /*color:#7f5373;*/
  }
  </style>
    <div class="container">
      <div class="row">
        <div class="grid_12 ">
          <div class="navigation ">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.php">Home</a></li>
               <li class="current"><a href="">นำข้อมูลเข้าคลังสินค้า</a></li>
               <li><a href="send-goods.php">สร้างรายการส่งสินค้า</a></li>
               <li><a href="">ตรวจสอบสินค้า</a></li>
               <li><a href="">รายงาน</a></li>
              <li class="fa fa-sign-out" style="float:right;"><a href="">ออกจากระบบ</a></li>

             </ul>
              <p style="float:right; font-size:18px;"> <a href="">สวัสดี username</a> </p>
            </nav>
            <div class="clear"></div>
          </div>
         <div class="clear"></div>
        </div>
     </div>
    </div>
  </section>
</header>
<!--=====================
          Content
======================-->
<section id="content"  ><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container">
      <dic class="row">
        <div class="grid_4">
          <h1></h1>
<button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal" style=" float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> นำสินค้าเข้าคลัง</button>
        </div>

        <div class="grid_3">
            <h1></h1>
        <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal-upfile" style=" float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> อัพโหลดสินค้าเข้าคลัง</button>
  </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <!-- <h3></h3> -->
          <table class="table table-bordered" id= "table">
    <thead>
      <!-- <tr>
        <th></th>
      </tr> -->
      <tr>
        <th id="name"><label> รหัสสินค้า</label></th>
        <th><label>สี</label></th>
        <th><label>ขนาด</label></th>
        <th><label>จำนวน</label></th>
        <th><label>โลเคชั่น</label></th>
          <th><label>หมายเหตุ</label></th>
        <th colspan="2"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">LK92-600</th>
        <td><label>น้ำเงิน</label></td> <!--ชื่อนามสกุล-->
        <td><label>37</label></td> <!--เบอร์โทร-->
        <td><label>1</label></td> <!--e-mail-->
        <td><label>04-01-01</label></td>
        <td><label></label></td>
        <td><a href="#" data-toggle="modal" data-target="#myModal-edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</a></td>
        <td><a href="#" > <i class="fa fa-toggle-on" aria-hidden="true"></i> ใช้งาน</a></td>
      </tr>
      <tr>
        <th scope="row">LK92-600</th>
        <td><label>ส้ม</label></td> <!--ชื่อนามสกุล-->
        <td><label>38</label></td> <!--เบอร์โทร-->
        <td><label>3</label></td> <!--e-mail-->
        <td><label>04-01-01</label></td>
        <td><label></label></td>
        <td><a href="#" data-toggle="modal" data-target="#myModal-edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</a></td>
        <td><a href="#" > <i class="fa fa-toggle-on" aria-hidden="true"></i> ใช้งาน</a></td>
      </tr>
      <tr>
        <th scope="row">FZ92-573</th>
        <td><label>ขาว</label></td>
        <td><label>36</label></td> <!--เบอร์โทร-->
        <td><label>1</label></td> <!--e-mail-->
        <td><label>04-02-03</label></td>
        <td><label></label></td>
        <td><a href="#"data-toggle="modal" data-target="#myModal-edit" > <i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</a></td>
        <td><a href="#" > <i class="fa fa-toggle-off" aria-hidden="true"></i> ไม่ใช้งาน</a></td>
      </tr>

    </tbody>
  </table>
        </div>

      </div>
    </div>
  </article>

</section>
<!-- Modal add-->
 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">

     <!-- Modal add content-->
     <div class="modal-content">
       <div class="modal-header" style="background-color:pink;">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h2 class="modal-title" style="text-align:center;">นำสินค้าเข้าคลัง</h2>
       </div>
       <div class="modal-body">
         <!-- <p>Some text in the modal.</p> -->
       </div>
       <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="">รหัสสินค้า</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <label class="control-label col-sm-2" for="">ชื่อสินค้า</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">ขนาด</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="" placeholder="">
      </div>
      <label class="control-label col-sm-2" for="">โลเคชั่น</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">หมายเหตุ</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="3" id=""></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-info">ยืนยัน</button>
      </div>
    </div>
  </form>

       <div class="modal-footer" style="background-color:pink;">
         <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
       </div>
     </div>

   </div>
 </div>
 <!--end Modal add-->

 <!-- Modal uploadfile-->
  <div class="modal fade" id="myModal-upfile" role="dialog">
    <div class="modal-dialog">

      <!-- Modal add content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:pink;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">นำสินค้าเข้าคลัง</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
        </div>
        <form class="form-horizontal" role="form">
     <div class="form-group">
       <label class="control-label col-sm-2" for="">รหัสสินค้า</label>
       <div class="col-sm-3">
         <input type="text" class="form-control" id="" placeholder="">
       </div>
       <label class="control-label col-sm-2" for="">สี</label>
       <div class="col-sm-3">
         <input type="text" class="form-control" id="" placeholder="">
       </div>
     </div>

   </form>

        <div class="modal-footer" style="background-color:pink;">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!--end Modal uploadFile->

 <!--  Modal edit- -->
 <div class="modal fade" id="myModal-edit" role="dialog">
   <div class="modal-dialog">

     <!-- Modal add content-->
     <div class="modal-content">
       <div class="modal-header" style="background-color:pink;">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title" style="text-align:center;">นำสินค้าเข้าคลัง</h4>
       </div>
       <div class="modal-body">
         <!-- <p>Some text in the modal.</p> -->
       </div>
       <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="">รหัสสินค้า</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="" placeholder="">
      </div>
      <label class="control-label col-sm-2" for="">สี</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">ขนาด</label>
      <div class="col-sm-3">
      <input type="text" class="form-control" id="" placeholder="">
      </div>
      <label class="control-label col-sm-2" for="">โลเคชั่น</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="" placeholder="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">หมายเหตุ</label>
      <div class="col-sm-8">
        <textarea class="form-control" rows="3" id=""></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-5">
        <button type="submit" class="btn btn-info">ยืนยัน</button>
      </div>
    </div>
  </form>

       <div class="modal-footer" style="background-color:pink;">
         <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
       </div>
     </div>

   </div>
 </div>
 <!-- end Modal edit- -->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="copyright"><span class="brand">Stable</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
          <div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
        </div>
      </div>
    </div>
  </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
