<?php
//
// include '../../session.php';
// if (loginUserName == "") {
//     echo '<script> window.location = "../../err_authen.php"; </script>';
// }
// $cid = $_REQUEST['cid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>item</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.ico">
  <link rel="shortcut icon" href="images/favicon.ico"/>
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
  $(window).load(function () {
    $().UItoTop({easingType: 'easeOutQuart'});
    $('#stuck_container').tmStickUp({});
  });
  </script>
  <!--[if lt IE 8]>
  <div style=' clear: both; text-align:center; position: relative;'>
  <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
  <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
  height="42" width="820"
  alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
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
      <style>
      li {
        font-family: 'Athiti', sans-serif;
        font-weight: 700px;
      }

      p {
        font-family: 'Athiti', sans-serif;
        font-weight: 700px;
      }

      a {
        font-family: 'Athiti', sans-serif;
        font-weight: bold;

      }

      h4 {
        font-family: 'Athiti', sans-serif;
        font-weight: 700px;
      }

      h2 {
        font-family: 'Athiti', sans-serif;
        font-weight: 700px;
        color: #7f5373;
      }

      .modal-title {
        font-family: 'Athiti', sans-serif;
        font-weight: 700px;
        color: #7f5373;
      }

      label {
        font-family: 'Athiti', sans-serif;
        font-weight: 700px;
        color: #7f5373;
      }

      .btn {
        background-color: #7f5373 !important;

      }

      #detail {
        float: left !important;
        margin-left: 31%;
      }

      .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover {
        color: #7f5373;
      }
      </style>

      <div class="container">
        <div class="row">
          <div class="grid_12 ">
            <div class="navigation ">
              <nav>
                <ul class="sf-menu">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="add-cus.php">จัดการข้อมูลลูกค้า</a></li>
                  <li class="current"><a href="manage-product.php">จัดการสินค้า</a></li>
                  <li><a href="report.php">รายงาน</a></li>
                  <li><a href="setting.php">ตั้งค่าการใช้งาน</a></li>
                  <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a
                    href="../../../logout.php">ออกจากระบบ</a></li>

                  </ul>
                  <p style="float:right; font-size:18px; margin-right:30px;">
                    สวัสดี <?php echo loginFullName ?></p>
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

      <section id="content">
        <!-- <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div> -->
        <div class="container">
          <div class="row">
            <div class="grid_12">
                <div class="panel-group" style="margin-top:20px;">
              <div class="panel panel-default">
                <div class="panel-heading" style="height:53px;background-color:#BF7CAC;">
                  <a href="inventory.php?cid=<?php echo $cid;?>"
                    style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i
                    class="fa fa-arrow-left fa-lg" aria-hidden="true"></i> กลับ</a>
                    <input type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModalupfile"
                    style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"
                    value="นำเข้าข้อมูลด้วยไฟล์">
                    <!-- <input type="button" class="btn btn-sm"  data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;" value="เพิ่มข้อมูลสินค้า"> -->
                    <!-- <input type="button" class="btn btn-sm"   style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"  value="เพิ่มข้อมูลสินค้า"> -->
                    <!-- <input type="text" id="search" class="light-table-filter form-control" data-table="order-table"  name="search" placeholder="Search.."> -->
                  </div>
                  <!-- <div class="panel-body"> -->

                    <div class="panel panel-default">
                      <div class="panel-heading"><label>ส่วนที่ 1 ชื่อสินค้า</label></div>
                      <div class="panel-body">
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">SKU</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="strsku" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">

                            <label class="control-label col-sm-4" for="">ชื่อสินค้า</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="strnameproduct" placeholder="">
                            </div>

                          </div>
                          <div class="form-group">
                            <label class=" control-label col-sm-4" for="">บาร์โค้ดสินค้า</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="strbarcode" placeholder="">
                            </div>

                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">ประเภทสินค้า</label>
                            <div class="col-sm-2">
                                <select class="form-control selectpicker show-tick" id="strtypeproduct">
                                    <option>เครื่องแต่งกาย</option>
                                    <option>เครื่องใช้ไฟฟ้า</option>
                                </select>

                            </div>
                            <label class="col-sm-2" for="">แจ้งเตือนเมื่อสินค้าถึงจำนวน</label>
                            <div class="col-sm-1">
                              <input type="number" min="0" class="form-control" id="strmin" placeholder="">
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">จำนวน</label>
                            <div class="col-sm-2">
                              <input type="number" min="1" class="form-control" id="stramount" placeholder="">
                            </div>
                            <label class="col-sm-1" for="">หน่วย</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="strunit" placeholder="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">หมายเหตุ</label>
                            <div class="col-sm-5">
                              <textarea class="form-control" rows="3" id="strnote"></textarea>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                        <div class="panel panel-default">
                      <div class="panel-heading"><label>ส่วนที่ 2 รายละเอียดสินค้า</label></div>
                      <div class="panel-body">
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class=" control-label col-sm-4" for="">แบรนด์</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="strbrand" placeholder="">
                            </div>
                            <label class="col-sm-1" for="">รุ่น</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="strseries" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">สี</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="strcolor" placeholder="">
                            </div>
                            <label class="col-sm-1" for="">ขนาด</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="strsize" placeholder="">
                            </div>

                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">ปริมาตร</label>
                            <div class="col-sm-2">
                              <input type="number" min="1" class="form-control" id="strcolor" placeholder="">
                            </div>
                            <label class="col-sm-1" for="">หน่วยปริมาตร</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="strsize" placeholder="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">วันที่ผลิต</label>
                            <div class="col-sm-5">
                              <input type="date" class="form-control" id="strMFD" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">วันหมดอายุ</label>
                            <div class="col-sm-5">
                              <input type="date" class="form-control" id="strEXP" placeholder="">
                            </div>
                          </div>
                        </form>
                      </div>
                      </div>
                        <div class="panel panel-default">
                        <div class="panel-heading"><label>ส่วนที่ 3 สถานที่วางสินค้า</label></div>
                        <div class="panel-body">
                          <form class="form-horizontal" role="form">
                            <div class="form-group">
                              <label class="control-label col-sm-4" for="">คลังสินค้า</label>
                              <div class="col-sm-4">
                                <select class="form-control" id="strlocation">
                                  <option>คลัง A</option>
                                  <option>คลัง B</option>

                                </select>
                              </div>
                            </div>
                          <div class="form-group">
                            <label class="control-label col-sm-4" for="">โลเคชั่น</label>
                            <div class="col-sm-4">
                              <select class="form-control" id="strlocation">
                                <option>04-01-01</option>
                                <option>04-01-02</option>
                                <option>04-01-03</option>
                                <option>04-01-04</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-5">
                              <input type="button" class="btn btn-info"  onclick="window.location='inventory.php?cid=<?php echo $cid;?>'"   id="cancel" value="ยกเลิก">
                              <input type="button" class="btn btn-info" id="save" value="ยืนยัน">

                            </div>
                          </div>
                        </form>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>


<!--  -->

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

                  <div class="modal-footer" style="background-color:pink;">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
            <!--end Modal add-->

            <!-- Modal add-->
            <div class="modal fade" id="myModalupfile" role="dialog">
              <div class="modal-dialog">

                <!-- Modal add content-->
                <div class="modal-content">
                  <div class="modal-header" style="background-color:pink;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title" style="text-align:center;">นำข้อมูลสินค้าเข้าคลัง</h2>
                  </div>
                  <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                  </div>
                  <form class="form-horizontal" role="form">
                    <div class="col-sm-8" style="margin-left:100px;">
                      <div class="form-group">
                        <label class="control-label col-sm-4" for="">เลือกหมวดหมู่สินค้า</label>
                        <div class="col-sm-6">
                          <select class="form-control" id="strcategory">
                            <option>เครื่องสำอางค์</option>
                            <option>เครื่องใช้ไฟฟ้า</option>
                          </select>
                        </div>
                      </div>

                      <div class="input-group">
                        <span class="input-group-btn">
                          <button id="fake-file-button-browse" type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-file"></span>
                          </button>
                        </span>
                        <input type="file" id="files-input-upload" style="display:none">
                        <input type="text" id="fake-file-input-name" disabled="disabled" placeholder="File not selected"
                        class="form-control">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-default" disabled="disabled" id="fake-file-button-upload">
                            <span class="glyphicon glyphicon-upload"></span>
                          </button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <!-- <label class="control-label col-sm-4" for="">ดาวโหลด template <a href="product_template.xls">คลิกที่นี่</a>   </label> -->
                      <!-- <div class="col-sm-6">
                      <input type="text" class="form-control" id="strfname" placeholder="">
                    </div> -->
                  </div>
                </form>

                <script type="text/javascript">
                // Fake file upload
                document.getElementById('fake-file-button-browse').addEventListener('click', function () {
                  document.getElementById('files-input-upload').click();
                });

                document.getElementById('files-input-upload').addEventListener('change', function () {
                  document.getElementById('fake-file-input-name').value = this.value;

                  document.getElementById('fake-file-button-upload').removeAttribute('disabled');
                });
                </script>
                <div class="modal-footer" style="background-color:pink;">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <!--end Modal add-->

          <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          <script>
          $(document).ready(function () {
            //  alert('sss');
            //        alert('sss');
            $('#save').click(function () {
              var lg = "<?php echo loginUserName;?>";
              var cid = "<?php echo $cid;?>";
              var nameproduct = $('#strnameproduct').val();
              var typeproduct = $('#strtypeproduct').val();
              var amount = $('#stramount').val();
              var unit = $('#strunit').val();
              var series = $('#strseries').val();
              var color = $('#strcolor').val();
              var strMFD = $('#strMFD').val();
              var strEXP = $('#strEXP').val();
              var location = $('#strlocation').val();
              var note = $('#strnote').val();
              var brand = $('#strbrand').val();
              var min = $('#strmin').val();
              var sku = $('#strsku').val();
              var size = $('#strsize').val();
              var size = $('#strbarcode').val();
              var vol = 0.0;
              var vol_unit = '';
              var desc = note;
              //            alert('sss');
              $.post('../../service/insertGoodsInCome.php', {
                CID: cid,
                GOODS_NAME: nameproduct,
                GOODS_SKU: sku,
                GOODS_TYPE: typeproduct,
                GOODS_QTY: amount,
                GOODS_QTY_UNIT: unit,
                GOODS_SERIES: series,
                GOODS_COLOR: color,
                GOODS_PRODUCTION_DATE: strMFD,
                GOODS_EXPIRED_DATE: strEXP,
                GOODS_LOCATION_DESC: location,
                GOODS_REMARK: note,
                GOODS_MIN: min,
                GOODS_BRAND: brand,
                GOODS_SIZE: size,
                GOODS_VOL: vol,
                GOODS_VOL_UNIT: vol_unit,
                loginid: lg,
                GOODS_DESC:desc
              }).done(function (data) {
                var jsonData = JSON.parse(data);
                //                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];

                if (statusRes == 1) {
                  if (res == "success") {
                    alert('บันทึกเรียบร้อย');
                    window.location = "./inventory.php?cid="+cid;
                  }
                }

              });
            });
            $('#example').DataTable({
              "paging": false,
              "searching": false,
              // "ordering": false,
              //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
              "info": false,
              responsive: true,

            });

          });

          </script>
          <!--==============================
          footer
          =================================-->
          <style>
          /*#footer{
          position: bottom;
        }

        body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }

      main {
      flex: 1 0 auto;
      }*/

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
