<!DOCTYPE html>
<html lang="en">
<head>
  <title>setting</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="images/favicon.ico">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="../../assets/css/font.css">
  <link rel="stylesheet" href="../../assets/css/style-cus.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
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
        /*color:#7f5373;*/
      }
      .modal-title{
        font-family: 'Athiti', sans-serif; font-weight:700px;
        /*color:#7f5373;*/
      }
      label{
        font-family: 'Athiti', sans-serif; font-weight:700px;
        /*color:#7f5373;*/
        text-align: center;
      }
      .btn{
        /*background-color: #7f5373 !important;*/

      }
      #detail{
        float: left !important;
        margin-left: 31%;
      }
      .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover{
        /*color:#7f5373;*/
      }
      </style>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <div class="container">
        <div class="row">
          <div class="grid_12 ">
            <div class="navigation ">
              <nav>
                <ul class="sf-menu" >
                  <li><a href="index.php">Home</a></li>
                  <li ><a href="check-stock.php">ตรวจสอบสินค้า</a></li>
                  <li ><a href="send-goods.php">สร้างรายการส่งสินค้า</a></li>
                  <li ><a href="manage-cus.php">จัดการข้อมูลลูกค้า</a></li>
                  <li class="current"> <a href="report.php">รายงาน</a></li>
                  <!-- <li class="current"><a href="setting.php">ตั้งค่าการใช้งาน</a></li> -->
                  <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a href="../../logout.php">ออกจากระบบ</a></li>

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
    background-image: url('../../assets/images/searchicon.png');
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
  <section id="content"  >
    <div class="container">
      <!-- <div class="page-header">
          <h1>Panels with nav tabs.<span class="pull-right label label-default">:)</span></h1>
      </div> -->
      <div class="row">
      	<div class="col-md-12">
              <div class="panel with-nav-tabs panel-default" style="margin-top:20px;">
                  <div class="panel-heading">
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#tab1default" data-toggle="tab">รายงานสินค้าคงคลัง</a></li>
                              <li><a href="#tab2default" data-toggle="tab">รายงานสินค้าส่งออก</a></li>
                              <!-- <li><a href="#tab3default" data-toggle="tab">Default 3</a></li> -->
                              <!-- <li class="dropdown">
                                  <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                      <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                  </ul>
                              </li> -->
                          </ul>
                  </div>
                  <div class="panel-body">
                      <div class="tab-content">
                          <div class="tab-pane fade in active" id="tab1default">
                            <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <label class="control-label col-sm-10" for="" style="font-size:30px; text-align:center; margin-bottom:20px;">รายงานสินค้าคงคลัง</label>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-3">
                                  <div class="checkbox">
                                    <label><input type="checkbox">ทุกรหัสสินค้า</label>
                                  </div>  </div>
                                  <div class="col-sm-2">
                                  <div class="checkbox">
                                    <label><input type="checkbox"> แยกตามรหัสสินค้า</label>
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="form-group">
                                <label class="control-label col-sm-3" for="" style="margin-top:10px;">ตั้งแต่รหัส</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-3" for="" style="margin-top:10px;">ถึง</label>
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>
                              </div> -->
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-3">
                                  <div class="checkbox">
                                    <label><input type="checkbox">ทุกคุณลักษณะพิเศษ</label>
                                  </div>  </div>
                                  <div class="col-sm-2">
                                  <div class="checkbox">
                                    <label><input type="checkbox"> แยกตามคุณลักษณะพิเศษ</label>
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="form-group">

                                <label class="control-label col-sm-3" for="">คุณลักษณะพิเศษ</label>
                                <div class="col-sm-2">
                                    <select class="form-control selectpicker show-tick" id="">
                                        <option>สี</option>
                                        <option>ไซด์</option>

                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select class="form-control selectpicker show-tick" id="">
                                        <option>4</option>
                                        <option>6</option>

                                    </select>
                                </div>
                              </div>
                             -->
                                <div class="form-group">
                                  <label class="control-label col-sm-4" for="" style="margin-top:10px;">เริ่นต้น</label>
                                  <div class="col-sm-3">
                                    <input type="date" class="form-control" id="" placeholder="">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-sm-4" for="">สิ้นสุด</label>
                                  <div class="col-sm-3">
                                    <input type="date" class="form-control" id="" placeholder="Enter password">
                                  </div>
                                </div>
                                <!-- <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                      <label><input type="checkbox"> Remember me</label>
                                    </div>
                                  </div>
                                </div> -->
                                <div class="form-group" style="margin-top:20px; margin-left:9%;">
                                  <div class="col-sm-offset-1 col-sm-5" >
                                  <a href="/product_template.xls" class="btn btn-info" role="button" style=""download>นำข้อมูลออกเป็นไฟล์ Excel</a>
                                  </div>
                                </div>
                              </form>





                          </div>
                          <div class="tab-pane fade" id="tab2default">




                          </div>
                          <div class="tab-pane fade" id="tab3default">Default 3</div>
                          <div class="tab-pane fade" id="tab4default">Default 4</div>
                          <div class="tab-pane fade" id="tab5default">Default 5</div>
                      </div>
                  </div>
              </div>
          </div>
  	</div>
  </div>
  <br/>
    </section>


    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

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
