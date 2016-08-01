<?php

include '../../session.php';
if(loginUserName == ""){
    echo '<script> window.location = "../../err_authen.php"; </script>';
}

?>
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
    float: left !important;
    margin-left: 31%;
  }
  #detail{
    float: left !important;
    margin-left: 31%;
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
               <li class="current"><a href="">จัดการสินค้า</a></li>
               <li><a href="">รายงาน</a></li>
               <li><a href="setting.php">ตั้งค่าการใช้งาน</a></li>
              <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a href="../../../logout.php">ออกจากระบบ</a></li>

             </ul>
              <p style="float:right; font-size:18px; margin-right:30px;"> สวัสดี <?php echo loginFullName ?></p>
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
  float: left !important;
  margin-left: 31%;
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
     <div class="panel-heading" style="height:53px;">
       <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> กลับ</button> -->
       <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มแพ็คเกจ</button> -->
       <button type="button" id="detail" class="btn btn-sm"  style=" margin-bottom:10px; margin-left:10px; float:left;font-family: 'Athiti', sans-serif; font-weight:700px;" onclick="window.location='pick.php'">สร้างรายการ pick</button>

              <input type="text" id="search" class="light-table-filter form-control" data-table="order-table"  name="search" placeholder="Search..">
     </div>
     <div class="panel-body">
       <table class="table table-striped table-bordered order-table" id= "example" >
     <thead>
     <!-- <tr>
     <th></th>
     </tr> -->
     <tr style="text-align:center;">
     <!-- <th id="name"  style="text-align:center;"><label> รหัสลูกค้า</label></th> -->
      <th  style="text-align:center;" ><label>ชื่อลูกค้า</label></th>
     <th   style="text-align:center;"> <label>ORDER ใหม่</label></th>
     <th  style="text-align:center;"><label>จำนวนปนะเถทสินต้า</label></th>
     <th></
     </tr>
     </thead>
           <tbody id="tb">
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
      loadTable();
      function loadTable() {
          $.post("../../service/getCustomerAllO.php").done(function (data) {
              var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
              var status = jsonData["status"];
              if (status == 1) {
                  var res = jsonData["result"];
                  var resL = res.length;
                  var i;
                  var append = "";
                  var CNAME ="";
                  var newOrder ;
                  for (i = 0; i < resL; i++) {
                      var CID = res[i]["CID"];
                      var CUST_STATUS = res[i]["CUST_STATUS"];
                      var C = res[i]["C"];
                      var CG = res[i]["CG"];
                      var type = res[i]["CUST_TYPE_CODE"];
                      var CUST_TEL = res[i]["CUST_TEL"];
                      var CUST_PHONE = res[i]["CUST_PHONE"];
                      if(type=='1'){
                          CNAME =  res[i]["CUST_SHOPNAME"];
                      }else{
                          CNAME =  res[i]["CUST_NAME"] + ' ' +  res[i]["CUST_LASTNAME"];
                      }
                      if(C=='0'){
                          newOrder ='';
                      }else{
                          newOrder = C;
                      }
//                      var option = '';
//                      if (CUST_TEL != '') {
//                          option = option +  CUST_TEL + ',';
//                      }
//                      if (CUST_PHONE != '') {
//                          option = option + CUST_PHONE + ',';
//                      }
//                      var foo = option.substring(0, option.length - 1);
//
                      if (CUST_STATUS == 1) {
                          append = append + "<tr>";
                          // append = append + "<td>" + CID + "</td>";
                          append = append + "<td width:'90'>" + CNAME + "</td>";
                          append = append + "<td>" + newOrder + "</td>";
                          append = append + "<td>" + CG + "</td>";

                          append = append + "<td align=\"center\" style=\"margin-right:30% !important;\">";
                          append = append + "<a href=\"inventory.php?cid="+ CID+"\" class=\"btn btn-info\" role=\"button\"> เลือก</a>";

                          append = append + "</td>";
                          append = append + "</tr>";
                      }
                  }
                  $('#tb').append(append);
                  $('#example').DataTable({
                      "paging": false,

                      "searching" : false,
                      // "ordering": false,
//                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                      "info": false,
                      responsive:true,

                  });

              }

          });
      }



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
