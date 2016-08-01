<!DOCTYPE html>
<html lang="en">
<head>
  <title>setting</title>
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
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          
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
        text-align: center;
      }
      .btn{
        background-color: #7f5373 !important;

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
                  <li><a href="index-admin.php">Home</a></li>
                  <li ><a href="setting.php">จัดการข้อมูลลูกค้า</a></li>
                  <li ><a href="manage-product.php">จัดการสินค้า</a></li>
                  <li><a href="">รายงาน</a></li>
                  <li class="current"><a href="setting.php">ตั้งค่าการใช้งาน</a></li>
                  <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a href="">ออกจากระบบ</a></li>

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
            <div class="panel-heading" style="height:53px; background-color:#e1e1e1;">
              <button type="button" class="btn btn-sm"  onclick="window.location='setting.php'" style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> จัดการผู้ใช้งาน</button>
              <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">กำหนดประเภทสินค้า</button> -->
              <button type="button" class="btn btn-sm"  onclick="window.location='setting-packageedit.php'" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">เพิ่มแพ็คเกจ</button>
              <input type="text" id="search" class="light-table-filter form-control" data-table="order-table" name="search" placeholder="Search..">
            </div>
            <div class="panel-body">
              <table class="table table-bordered order-table" id="example">
                <thead>
                  <tr>
                    <th id="name"><label> ชื่อแพ็คเกจ</label></th>
                    <th><label>ประเภทการวางสินค้า</label></th>
                    <th><label>รายละเอียด</label></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><label>smart</label></th>
                    <td><label>ชั้นวาง</label></td>
                    <td><label></label></td>
                      <td align="center">
                        <div class="dropdown" id="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"  ><i class="fa fa-cog" aria-hidden="true"></i>
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="setting-packageedit.php">แก้ไข</a></li>
                              <li><a href="#">ยกเลิกรายการ</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><label>silver</label></th>
                        <td><label>พาเลท</label></td>
                        <th><label></label></th>
                        <td>
                          <div class="dropdown" id="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"  ><i class="fa fa-cog" aria-hidden="true"></i>
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <li><a href="setting-packageedit.php">แก้ไข</a></li>
                                <!-- <li></li> -->
                                <li><a href="#">ยกเลิกรายการ</a></li>
                                <!-- <li class="divider"></li>
                                <li><a href="#">About Us</a></li> -->
                              </ul>
                            </div>
                          </td>
                          <!-- <td><a href="#" style="color:#7f5373;"> <i class="fa fa-toggle-on" aria-hidden="true"></i> ใช้งาน</a></td> -->
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
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
          <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

          <!--  Modal edit- -->
          <div class="modal fade" id="myModal-edit" role="dialog">
            <div class="modal-dialog">

              <!-- Modal add content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title" style="text-align:center;">แก้ไขข้อมูลแพ็คเกจ</h2>

                </div>
                <div class="modal-body">
                  <!-- <p>Some text in the modal.</p> -->
                </div>
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="">ชื่อแพ๊คเกจ</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="">รายละเอียด</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" rows="3" id="straddress"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">ประเภทการจัดวาง</label>
                    <div class="checkbox col-sm-offset-1 col-sm-4">
                      <label><input type="checkbox" value="">ชั้นวาง</label>
                    </div>
                    <div class="checkbox col-sm-4">
                      <label><input type="checkbox" value="">พาเลท</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                      <button type="submit" class="btn btn-info">ยืนยัน</button>
                    </div>
                  </div>
                </form>
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end Modal edit- -->
          <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
          <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
          <script>
          $(document).ready(function () {
            // alert ('dddd');
            $('#save').click(function () {
              // alert ('dddd');

              var packages = $('#strpackage').val();
              var fname = $('#strfname').val();
              var lname = $('#strlname').val();
              var address = $('#straddress').val();
              var district = $('#strdistrict').val();
              var province = $('#strprovince').val();
              var zipcode = $('#strzipcode').val();
              var tell = $('#strtell').val();
              var mobile = $('#strmobile').val();
              var email = $('#stremail').val();
              var note = $('#strnote').val();
              alert(packages);
              alert(fname);
              alert(lname);
              alert(address);
              // alert(subdistrict);
              alert(district);
              alert(province);
              alert(zipcode);
              alert(tell);
              alert(mobile);
              alert(email);
              alert(note);
            });
            $('#example').DataTable({
                "paging": false,

                "searching" : false,
                // "ordering": false,
          //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                "info": false,
                responsive:true,

            });
          });
          function clearForm(){
            $('#strpackage').val();
            $('#strfname').val();
            $('#strlname').val();
            $('#straddress').val();
            $('#strdistrict').val();
            $('#strprovince').val();
            $('#strzipcode').val();
            $('#strtell').val();
            $('#strmobile').val();
            $('#stremail').val();
            $('#strnote').val();
          }
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
