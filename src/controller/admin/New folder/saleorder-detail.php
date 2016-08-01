<!DOCTYPE html>
<html lang="en">
<head>
  <title>manage-product</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="images/favicon.ico">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="../../../assets/css/font.css">
  <link rel="stylesheet" href="../../../assets/css/style-cus.css">
  <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
  <script src="../../../assets/js/jquery.js"></script>
  <script src="../../../assets/js/jquery-migrate-1.1.1.js"></script>
  <script src="../../../assets/js/jquery.easing.1.3.js"></script>
  <script src="../../../assets/js/script.js"></script>
  <script src="../../../assets/js/superfish.js"></script>
  <script src="../../../assets/js/jquery.equalheights.js"></script>
  <script src="../../../assets/js/jquery.mobilemenu.js"></script>
  <script src="../../../assets/js/tmStickUp.js"></script>
  <script src="../../../assets/js/jquery.ui.totop.js"></script>
  <!-- start data table -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css ">
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css ">
  <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js "></script>
  <script type="text/javascript" language="javascript"
  src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js "></script>
  <script type="text/javascript" language="javascript"
  src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js "></script>
  <!--end datatable  -->
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
              <img src="../../../assets/images/logo1.png" alt="Logo alt" style="height:120px; width:120px;">
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
      p{
        font-family: 'Athiti', sans-serif; font-weight:700px;
      }
      a{
        font-family: 'Athiti', sans-serif; font-weight:bold;

      }
      h4{
        font-family: 'Athiti', sans-serif; font-weight:700px;
      }
      h2{
        font-family: 'Athiti', sans-serif; font-weight:700px;
        color:#7f5373;
      }
      .modal-title{
        font-family: 'Athiti', sans-serif; font-weight:700px;
        color:#7f5373;
      }
      label{
        font-family: 'Athiti', sans-serif; font-weight:700px;
        color:#7f5373;
      }
      .btn{
        background-color: #7f5373 !important;

      }
      #detail{
        float: left !important;
        margin-left: 11%;
      }
      .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover{
        color:#7f5373;
      }
      </style>
      <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
      <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
      <div class="container">
        <div class="row">
          <div class="grid_12 ">
            <div class="navigation ">
              <nav>
                <ul class="sf-menu" >
                  <li><a href="index.php">Home</a></li>
                  <li ><a href="add-cus.php">จัดการข้อมูลลูกค้า</a></li>
                  <li class="current"><a href="manage-product.php">จัดการสินค้า</a></li>
                  <li><a href="report.php">รายงาน</a></li>
                  <li><a href="setting.php">ตั้งค่าการใช้งาน</a></li>
                  <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a href="../../../logout.php">ออกจากระบบ</a></li>

                </ul>
                <p style="float:right; font-size:18px; margin-right:30px;"> สวัสดี username</p>
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
  <style>
  #search {
    float: right;
    height: 15px;
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('../../../assets/images/searchicon.png');
    background-position: 5px 5px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  }

  #search:focus {
    width: 50%;
  }
  .btn-default{
    color: white !important;
    /*float: left !important;*/
    /*margin-left: 21%;*/
  }
  td{
    vertical-align: middle;
  }
  </style>
  <section id="content"  ><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container">
      <dic class="row">
        <div class="grid_12">
          <div class="panel panel-default">
            <div class="panel-heading" style="height:95px;">
              <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> กลับ</button> -->
              <button type="button" class="btn btn-sm"  onclick="window.location='pick-detail.php'" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">กลับ</button>
              <!-- <input type="button" id="detail" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style=" margin-bottom:10px; margin-left:10px; float:left;font-family: 'Athiti', sans-serif; font-weight:700px;"  value="สร้างรายการ pick "> -->
              <h2 style="text-align: center;">Sale order เลขที่ 001590720</h2>
            </div>
            <div class="panel-body">
              <!-- <input type="text" id="search" class="light-table-filter form-control" data-table="order-table"  name="search" placeholder="Search.."> -->
              <div class="row">
                <div class="col-lg-6">
<style>

</style>
                  <form class="form-horizontal" role="form" id="blockquote" style="border: 1px solid #333; padding: 5px;">
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">วันที่ทำรายการ</label>
                      <label class="control-label col-sm-3" for="">21 กรกฏาคม 2559</label>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">ผู้ส่ง</label>
                      <label class="control-label col-sm-3" for="">บริษัท Rip culr จำกัด</label>
                    </div>
                    <div class="form-group">
                      <label class=" control-label  col-sm-3" for="" >เลขที่เสียภาษีอากร</label>
                      <label class=" control-label  col-sm-2" for=""  max= "13">100210929019</label>

                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">ที่อยู่:</label>
                        <label class="control-label col-sm-5" for="">92/350 ถนนเลียบวารี แขวงร่มเกล้า เขตลาดกระบัง กรุงเทพมหานคร 10240</label>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">เบอร์โทร</label>
                        <label class="control-label col-sm-2" for="">0919909909</label>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">email</label>
                        <label class="control-label col-sm-2" for="">vipavan.k@gmail.com</label>
                    </div>
                  </form>
                </div>
                <div class="col-lg-6">
                  <form class="form-horizontal" role="form" style="border: 1px solid #333; padding: 5px; height:320px;" >
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">ผู้รับปลายทาง</label>
                        <label class="control-label col-sm-3" for="">วิภาวรรณ แก้วเล็ก</label>
                    </div>
                    <div class="form-group">
                      <label class=" control-label  col-sm-3" for="" >เลขที่เสียภาษีอากร</label>
                      <label class=" control-label  col-sm-3" for="" >1109290929091</label>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">ที่อยู่:</label>
                      <label class="control-label col-sm-5" for="">92/350 ถนนเลียบวารี แขวงร่มเกล้า เขตลาดกระบัง กรุงเทพมหานคร 10240</label>

                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">เบอร์โทร</label>
                        <label class="control-label col-sm-2" for="">0919909909</label>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="">email</label>
                        <label class="control-label col-sm-2" for="">vipavan.k@gmail.com</label>
                    </div>
                  </form>
                </div>
              </div>
              <table class="table table-striped table-bordered order-table" id= "example" >
                <thead>
                  <!-- <tr>
                  <th></th>
                </tr> -->
                <tr style="text-align:center;">
                  <!-- <th id="name"  style="text-align:center;"><label> เลขที่ Sale order</label></th> -->
                  <!-- <th  style="text-align:center;" ><label>วันที่ทำรายการ</label></th> -->
                  <!-- <th   style="text-align:center;"> <label>วันที่ส่งสินค้า</label></th> -->
                  <th   style="text-align:center;"> <label>SUK</label></th>
                  <th   style="text-align:center;"> <label>รายละเอียดสินค้า</label></th>
                  <!-- <th   style="text-align:center;"> <label>ผู้รับปลายทาง</label></th> -->
                  <th   style="text-align:center;"> <label>จำนวน</label></th>
                  <th  style="text-align:center;"><label>หน่วย</label></th>
                  <th  style="text-align:center;"><label>คลัง</label></th>
                  <th  style="text-align:center;"><label>โลเคชั่น</label></th>
                    <th  style="text-align:center;"><label>หมายเหตุ</label></th>
                </tr>
              </thead>
              <tbody>
                <tr style="text-align:center;">
                  <!-- <th scope="row"style="text-align:center;"><label>SO000012</label></th> -->
                  <!-- <td><label>17-07-59</label></td> -->
                  <!-- <td><label>18-07-59</label></td> -->
                  <td><label>SUT0001</label></td>
                  <td><label>กระเป๋า ม่วง</label></td>
                  <!-- <td><label>29/25 หนองจอก กทม 10530</label></td> -->
                  <td><label>2</label></td>
                  <td><label> ใบ</label></td>
                  <td><label> คลัง A</label></td>
                  <td><label> 01-04-01</label></td>
                    <td><label> </label></td>
                  <!-- <td align="center">
                  <button type="button" id="detail"  class="btn btn-sm"  style="font-family: 'Athiti', sans-serif; font-weight:700px;" onclick="window.location='pick-detail.php'" ><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เลือก</button>
                </td> -->
              </tr>
              <tr style="text-align:center;">
                <!-- <th scope="row"style="text-align:center;"><label>SO000013</label></th> -->
                <!-- <td><label>17-07-59</label></td> -->
                <!-- <td><label>18-07-59</label></td> -->
                <td><label>SUT0002</label></td>
                <td><label>รองเท้า ดำ</label></td>
                <!-- <td><label>แพร่</label></td> -->
                <td><label>2</label></td>
                <td><label> คู่</label></td>
                <td><label> คลัง B</label></td>
                <td><label> 01-04-01</label></td>
                  <td><label></label></td>
                <!-- <td align="center">
                <button type="button" id="detail"  class="btn btn-sm"  style="font-family: 'Athiti', sans-serif; font-weight:700px;" onclick="window.location='pick-detail.php'" ><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เลือก</button>
              </td> -->
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



</section>

<!-- start filter-->
<script>
(function (document) {
  'use strict';

  var LightTableFilter = (function (Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function (table) {
        Arr.forEach.call(table.tBodies, function (tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function () {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function (input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function () {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

  $.toggleShowPassword = function (options) {
    var settings = $.extend({
      field: "#password",
      control: "#toggle_show_password",
    }, options);

    var control = $(settings.control);
    var field = $(settings.field)

    control.bind('click', function () {
      if (control.is(':checked')) {
        field.attr('type', 'text');
      } else {
        field.attr('type', 'password');
      }
    })
  };
})(document);
</script>
<!-- end filter -->

<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script>
$(document).ready(function () {
  $('#example').DataTable({
    "paging": false,
    "searching" : false,
    // "ordering": false,
    //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
    "info": false,
    responsive:true,

  });

});


</script>
<!--==============================
footer
=================================-->
<style>
#footer{
  position: bottom;
}

body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

main {
  flex: 1 0 auto;
}

</style>
<!-- <footer class="page-footer">
<div class="footer-copyright">
<div class="container">
© 2014 Copyright Text
<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
</div>
</div>
</footer> -->


<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
