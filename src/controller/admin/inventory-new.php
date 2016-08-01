<?php

include '../../session.php';

if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
$cid = &$_REQUEST['cid'];
//echo $cid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>inventory</title>
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

    #search-out {
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

    #search-out:focus {
        width: 50%;
    }

    .btn-default {
        color: white !important;
        float: left !important;
        margin-left: 31%;
    }

    td {
        vertical-align: middle;
    }

    #searchtab2 {
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

    #searchtab2:focus {
        width: 50%;
    }

    #searchtab4 {
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

    #searchtab4:focus {
        width: 50%;
    }
    #searchtab41 {
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

    #searchtab41:focus {
        width: 50%;
    }

    .btn-default {
        color: white !important;
        float: left !important;
        margin-left: 31%;
    }

    td {
        vertical-align: middle;
    }
    a { cursor: pointer; cursor: hand; }
    li { cursor: pointer; cursor: hand; }
</style>

<section id="content">
    <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height:53px;">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab1default" data-toggle="tab">เพิ่มข้อมูลสินค้า</a></li>
                            <li><a href="#tab2default" data-toggle="tab">รายการส่งสินค้า</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown"> <i class="fa fa-wpforms" aria-hidden="true"></i>
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab" id="loadpick">รายการ Pick สินค้า</a></li>
                                    <li><a href="#tab5default" data-toggle="tab" id="loadinvoice">รายการ Invoice</a></li>
                                </ul>
                            </li>
                            <li><a href="#tab3default" data-toggle="tab">จัดการค่าใช้จ่าย</a></li>

                        </ul>

                        <!-- <input type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModalupfile" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;" value="นำเข้าข้อมูลด้วยไฟล์"> -->

                        <!-- <input type="button" class="btn btn-sm"   style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"  value="เพิ่มข้อมูลสินค้า"> -->


                    </div>
                    <div class="panel-body">

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                                <a href="manage-product.php"
                                   style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i
                                        class="fa fa-arrow-left fa-lg" aria-hidden="true"></i> กลับ</a>
                                <input type="button" class="btn btn-sm" id="newItem"
                                       style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"
                                       value="เพิ่มข้อมูลสินค้า">

                                <input type="text" id="search" class="light-table-filter form-control"
                                       data-table="order-table"
                                       name="search" placeholder="Search..">
                                <table class="table  table-bordered order-table" id="example1">
                                    <thead>
                                    <!-- <tr>
                                    <th></th>
                                  </tr> -->
                                    <tr>
                                        <th id="name"><label> รหัสสินค้า</label></th>
                                        <th><label> รูปภาพสินค้า</label></th>
                                        <th><label>ชื่อสินค้า</label></th>
                                        <th><label>ประเภทสินค้า</label></th>
                                        <th><label>รายละเอียดสินค้า</label></th>
                                        <th><label>จำนวน</label></th>
                                        <th><label>โลเคชั่น</label></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tb">
                                    </tbody>
                                </table>

                            </div>
                            <div class="tab-pane fade" id="tab2default">
                                <button type="button" id="createOr" class="btn btn-sm"
                                        style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    สร้างรายการส่งสินค้า
                                </button>
                                <input type="text" id="search-out" class="light-table-filter form-control"
                                       data-table="order-table"
                                       name="search" placeholder="Search..">

                                <div class="col-lg-12">
                                    <table width="100%" class="table  table-bordered order-table" id="exampleShowout">
                                        <thead>
                                        <tr style="text-align:center;">
                                            <th id="name" style="width:190px;text-align:center;"><label>
                                                    เลขที่บิล</label></th>
                                            <th style="width:120px;text-align:center;"><label>วันที่สร้างบิล</label>
                                            </th>
                                            <th style="width:290px;text-align:center;"><label>ผู้รับสินค้า</label></th>
                                            <th style="width:290px;text-align:center;"><label>ที่อยู่จัดส่ง</label></th>
                                            <th style="width:150px; text-align:center;">
                                                <label>จำนวนสินค้าในคำสั่งซื้อ</label></th>
                                            <th style="text-align:center;"><label>สถานะบิล</label></th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id='tby'>

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <!-- </div> -->
                            <div class="tab-pane fade" id="tab3default">

                                <input type="text" id="searchtab2" class="light-table-filter form-control"
                                       data-table="order-table"
                                       name="searchtab2" placeholder="Search..">
                                <br><br>
                                <table class="table  table-bordered order-table" id="example1">
                                    <thead>

                                    <tr>
                                        <th id="name" style="text-align:center;"><label> เลขที่เอกสาร pick
                                                สินค้า</label></th>
                                        <!--                                <th style="text-align:center;"><label>เลขที่ Order</label></th>-->
                                        <th style="text-align:center;"><label>วันที่ทำรายการ</label></th>
                                        <th style="text-align:center; width:170px;"><label>จำนวนรายการสินค้า</label>
                                        </th>
                                        <th style="text-align:center;"><label>จำนสนาินค้า</label></th>
                                        <th style="text-align:center;"><label>สถานะ</label></th>
                                        <th style="text-align:center;"><label></label></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tb1">
                                                         <tr>
                                                           <td>OUT19029930092</td>
                                                           <td>21/07/59</td>
                                                           <td>ripculr</td>
                                                           <td></td>

                                                           <td>1112321</td>

                                                           <td></td>
                                                           <td align="center">
                                                             <div class="dropdown" id="dropdown">
                                                               <button class="btn btn-default dropdown-toggle" type="button"
                                                               data-toggle="dropdown"><i class="fa fa-cog"
                                                               aria-hidden="true"></i>
                                                               <span class="caret"></span></button>
                                                               <ul class="dropdown-menu">
                                                                 <li><a href="pick.php"> Pick สินค้า</a></li>

                                                                 <li><a href="addcost.php">เพิ่มค่าใช้จ่าย</a></li>
                                                                 <li role="presentation" class="divider"></li>
                                                                 <li><a href="#">รายละเอียด</a></li>
                                                                 <li><a href="wherehouse.php">แก้ไขค่าใช้จ่าย</a></li>
                                                                 <li><a href="#">พิมพ์</a></li>
                                                               </ul>
                                                             </div>
                                                           </td>
                                                         </tr>
                                                         <tr>
                                                           <td>OUT19029930090</td>
                                                           <td>21/07/59</td>
                                                           <td>ripculr</td>

                                                           <td></td>
                                                           <td>45 บาท</td>

                                                           <td></td>
                                                           <td align="center">
                                                             <div class="dropdown" id="dropdown">
                                                               <button class="btn btn-default dropdown-toggle" type="button"
                                                               data-toggle="dropdown"><i class="fa fa-cog"
                                                               aria-hidden="true"></i>
                                                               <span class="caret"></span></button>
                                                               <ul class="dropdown-menu">
                                                                 <li><a href="addcost.php">สร้างรายการ Pick สินค้า</a></li>
                                                                 <li><a href=""></a></li>
                                                                 <li><a href="#"></a></li>
                                                                 <li role="presentation" class="divider"></li>
                                                                 <li><a href=""></a></li>
                                                                 <li><a href="#"></a></li>
                                                               </ul>
                                                             </div>
                                                           </td>
                                                         </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="tab-pane fade" id="tab4default">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-sm"
                                        style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    สร้างรายการ Pick สินค้าประจำร้าน
                                </button>
                                <input type="text" id="searchtab4" class="light-table-filter form-control"
                                       data-table="order-table"
                                       name="searchtab4" placeholder="Search..">
                                <br><br>
                                <table class="table  table-bordered order-table" id="examplexx">
                                    <thead>

                                    <tr>
                                        <th id="name"><label> เลขที่ SaleOrder</label></th>
                                        <th><label>เลขที่อ้างอิง Pick</label></th>
                                        <th><label>วันที่ทำรายการ</label></th>
                                        <th><label>จำนวนสินค้า</label></th>

                                        <th><label>สถานะ Pick</label></th>
                                        <th><label></label></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbxx">

                                    </tbody>
                                </table>

                            </div>
                            <div class="tab-pane fade" id="tab5default">
                                <input type="text" id="searchtab41" class="light-table-filter form-control"
                                       data-table="order-table"
                                       name="searchtab41" placeholder="Search..">
                                <br><br>
                                <table class="table  table-bordered order-table" id="examplexx1">
                                    <thead>

                                    <tr>
                                        <th id="name"><label> เลขที่ SaleOrder</label></th>
                                        <th><label>เลขที่อ้างอิง Invoice</label></th>
                                        <th><label>วันที่ทำรายการ</label></th>
                                        <th><label>จำนวนสินค้า</label></th>

                                        <th><label>สถานะ Invoice</label></th>
                                        <th><label></label></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbxx1">

                                    </tbody>
                                </table>

                            </div>
                        </div>


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

<script>
    $(document).ready(function () {
        loadTableOr();

        $('#createOr').click(function () {
            window.location = 'create-send.php?cid=' + "<?php echo $cid;?>";
        });

        function loadTableOr() {
            var cid = "<?php echo $cid;?>";
            var lg = "<?php echo loginUserName;?>";
            $.post("../../service/getOrderAll.php", {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var address = "";
                    var append = "";
                    for (var i = 0; i < resL; i++) {
                        var SO_DOCCODE = res[i]["SO_DOCCODE"];
                        var SO_DOCDATE = res[i]["SO_DOCDATE"];
                        var RECVNAME = res[i]["CNAME"];
//                        var RECV_ADDRESS = res[i]["RECV_ADDRESS"];
//                        var DISTRICT_DESC = res[i]["DISTRICT_DESC"];
//                        var PROVINCE_DESC = res[i]["PROVINCE_DESC"];
                        var RECV_TEL = res[i]["RECV_TEL"];
                        var PHONE = res[i]["RECV_PHONE"];
//                        var CUST_EMAIL_CONTACT = res[i]["RECV_EMAIL"];
                        var CUST_SHOPNAME = res[i]["RECV_SHOPNAME"];
                        var status = res[i]["SO_DOCSTATUS"];
                        var summary = res[i]["TOTAL"];

                        var option = '';
                        if (RECV_TEL != '') {
                            option = option + RECV_TEL + ',';
                        }
                        if (PHONE != '') {
                            option = option + PHONE + ',';
                        }
                        var str = SO_DOCDATE['date'];

                        var subMFD = str.substr(0, 10);
//                  var str = SO_DOCDATE['date'];
//                  var subMFD = str.substr(0, 10);
                        var fDate = subMFD.split("-");
                        var reStr = fDate[2] + '/' + fDate[1] + '/' + fDate[0];
//                        var str2 = GOODS_EXPIRED_DATE['date'];
//                        var subMFD2 = str2.substr(0, 10);

                        var rexv = '';
                        if (RECVNAME == ' ' && CUST_SHOPNAME != ' ') {
                            rexv = CUST_SHOPNAME
                        } else if (RECVNAME != ' ' && CUST_SHOPNAME == ' ') {
                            rexv = RECVNAME
                        } else if (RECVNAME != ' ' && CUST_SHOPNAME != ' ') {
                            rexv = CUST_SHOPNAME + '(' + RECVNAME + ')';
                        }

                        if (res[i]["RECV_ADDRESS"] != '') {
                            address = address + 'ที่่อยู่  ' + res[i]["RECV_ADDRESS"] + ' ';
                        }
                        if (res[i]["RECV_SUBDISTRICT"] != '') {
                            address = address + 'ตำบล ' + res[i]["RECV_SUBDISTRICT"] + ' ';
                        }
                        if (res[i]["RECV_DISTRICT_DESC"] != '') {
                            address = address + 'อำเภอ ' + res[i]["RECV_DISTRICT_DESC"] + ' ';
                        }
                        if (res[i]["RECV_PROVINCE_DESC"] != '') {
                            address = address + 'จังหวัด ' + res[i]["RECV_PROVINCE_DESC"] + ' ';
                        }
                        if (res[i]["RECV_ZIPCODE"] != '') {
                            address = address + 'รหัสไปรษณีย์  ' + res[i]["RECV_ZIPCODE"] + ' ';
                        }
                        var txt = '';
                        if (status == 1) {
                            txt = 'รอการดำเนินการ';
                        } else if (status == 2) {
                            txt = 'รอการจัดส่ง';
                        } else if (status == 3) {
                            txt = 'ส่งสินค้าทางขนส่งเรียบร้แย'
                        }


                        var foo = option.substring(0, option.length - 1);

                        append = append + "<tr>";
                        // append = append + "<td>" + CID + "</td>";
                        append = append + "<td>" + SO_DOCCODE + "</td>";
                        append = append + "<td width='150'>" + reStr + "</td>";
                        append = append + "<td width='100'>" + rexv + "</td>";
                        append = append + "<td width='150'>" + address + "</td>";
                        append = append + "<td  width='250'>" + summary + "</td>";
                        append = append + "<td  width='250'>" + txt + "</td>";

                        append = append + "<td width='70'>";
                        append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                        append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                        append = append + "<ul class=\"dropdown-menu\">";
                        append = append + "<li><a href=\"\" >รายละเอียด</a></li>";
                        if (status == 1) {
                            append = append + "<li><a href=\"./updateStatusOrderDiscard.php?cid=" + cid + "&order=" + SO_DOCCODE + "&lg=" + lg + "\" onclick=\"return confirm('ต้อองการลบข้อมูลการจัดซื้อรายการนี้?,หากตกลงจะไม่สามารถนำกลับมาใช้ใหม่')\">ยกเลิกรายการ</a></li>";
                        }
//
                        append = append + "</ul>";
                        append = append + "</div>";
                        append = append + "</td>";
                        append = append + "</tr>";
                        address = '';
                    }
//                    alert(append);
                    $('#tby').append(append);
                    $('#exampleShowout').DataTable({
                        "paging": false,

                        "searching": false,
                        // "ordering": false,
                        "order": [[0, "DESC"]],
                        "info": false,
                        responsive: true,

                    });

                }
            });
        }

    });
</script>
<script>
    $(document).ready(function () {
        //        alert("<?php //echo $cid?>//");
        loadTable();
        //        alert("zzzz");

        $('#newItem').click(function () {
            //            alert('dddd');
            var cid = "<?php echo $cid;?>";
            var lg = "<?php echo loginUserName;?>";

            window.location = "./item.php?ig=" + lg + "&cid=" + cid + "&itemid=";

        });
        function loadTable() {
            var cid = "<?php echo $cid;?>";
            var lg = "<?php echo loginUserName;?>";
            $.post("../../service/getGoodsForCID.php", {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
                //                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    for (i = 0; i < resL; i++) {
                        var CID = res[i]["CID"];
                        var GOODS_ID = res[i]["GOODS_ID"];
                        // var GOODS_SKU = res[i]["GOODS_SKU"];   /ใส่รูป/
                        var GOODS_SKU = res[i]["GOODS_SKU"];
                        var GOODS_NAME = res[i]["GOODS_NAME"];
                        var GOODS_QTY = res[i]["GOODS_QTY"];
                        var GOODS_QTY_UNIT = res[i]["GOODS_QTY_UNIT"];
                        var GOODS_TYPE = res[i]["GOODS_TYPE_DESC"];

                        var GOODS_BRAND = res[i]["GOODS_BRAND"];
                        var GOODS_SERIES = res[i]["GOODS_SERIES"];
                        var GOODS_COLOR = res[i]["GOODS_COLOR"];
                        var GOODS_SIZE = res[i]["GOODS_SIZE"];
                        var GOODS_VOL = res[i]["GOODS_VOL"];
                        var GOODS_VOL_UNIT = res[i]["GOODS_VOL_UNIT"];
                        var GOODS_PRODUCTION_DATE = res[i]["GOODS_PRODUCTION_DATE"];
                        var GOODS_EXPIRED_DATE = res[i]["GOODS_EXPIRED_DATE"];
                        //          var GOODS_LOCATION_DESC = res[i]["GOODS_LOCATION_DESC"];
                        var WH_NAME = res[i]["WH_NAME"];
                        var LOCATION_DESC = res[i]["LOCATION_DESC"];
                        var str = GOODS_PRODUCTION_DATE['date'];
                        var subMFD = str.substr(0, 10);
                        var str2 = GOODS_EXPIRED_DATE['date'];
                        var subMFD2 = str2.substr(0, 10);
                        //                            alert(JSON.stringify(str2));
                        //                            alert(subMFD2);
                        var option = '';
                        if (GOODS_BRAND != '') {
                            option = option + 'แบรน:' + GOODS_BRAND + ',';
                        }
                        if (GOODS_SERIES != '') {
                            option = option + 'รุ่น:' + GOODS_SERIES + ',';
                        }
                        if (GOODS_COLOR != '') {
                            option = option + 'สี:' + GOODS_COLOR + ',';
                        }
                        if (GOODS_SIZE != '') {
                            option = option + 'ขนาด:' + GOODS_SIZE + ',';
                        }
                        if (GOODS_VOL != 0.0) {
                            option = option + 'ปริมาตร:' + GOODS_VOL + ' ' + GOODS_VOL_UNIT + ',';
                        }
                        if (subMFD != '1900-01-01') {
                            option = option + 'วันผลิต:' + subMFD + ',';
                        }
                        if (subMFD2 != '1900-01-01') {
                            option = option + 'วันหมดอายุ:' + subMFD2 + ',';
                        }
                        var foo = option.substring(0, option.length - 1);
                        //                            alert(foo);

                        var location = '';
                        if (WH_NAME == '') {
                            location = '';
                        } else {
                            location = 'คลัง: ' + WH_NAME + ',โลเคชั่น: ' + LOCATION_DESC;
                        }

                        if (GOODS_QTY == 0) {
                            append = append + "<tr bgcolor=\"#f1f1f1\" style=\"color:#E84A2D;\">";
                            // append = append + "<td>" + CID + "</td>";
                            append = append + "<td>" + GOODS_SKU + "</td>";
                            append = append + "<td>" + +"</td>";
                            append = append + "<td>" + GOODS_NAME + "</td>";
                            append = append + "<td>" + GOODS_TYPE + "</td>";
                            append = append + "<td>" + foo + "</td>";
                            append = append + "<td>" + GOODS_QTY + ' ' + GOODS_QTY_UNIT + "</td>";
                            append = append + "<td>" + location + "</td>";

                            append = append + "<td width='70'>";
                            append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                            append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                            append = append + "<ul class=\"dropdown-menu\">";
                            append = append + "<li><a href=\"./item.php?ig=" + lg + "&cid=" + CID + "&itemid=" + GOODS_ID + "\" >แก้ไข</a></li>";
                            append = append + "</ul>";
                            append = append + "</div>";
                            append = append + "</td>";
                            append = append + "</tr>";
                        } else {
                            append = append + "<tr>";
                            // append = append + "<td>" + CID + "</td>";
                            append = append + "<td>" + GOODS_SKU + "</td>";
                            append = append + "<td>" + +"</td>";
                            append = append + "<td>" + GOODS_NAME + "</td>";
                            append = append + "<td>" + GOODS_TYPE + "</td>";
                            append = append + "<td>" + foo + "</td>";
                            append = append + "<td>" + GOODS_QTY + ' ' + GOODS_QTY_UNIT + "</td>";
                            append = append + "<td>" + location + "</td>";


                            append = append + "<td>";
                            append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                            append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i><span class=\"caret\"></span></button>";
                            append = append + "<ul class=\"dropdown-menu\">";
                            append = append + "<li><a href=\"./item.php?ig=" + lg + "&cid=" + CID + "&itemid=" + GOODS_ID + "\" >แก้ไข</a></li>";
                            //

                            append = append + "</ul>";
                            append = append + "</div>";
                            append = append + "</td>";
                            append = append + "</tr>";
                        }

                    }
                    //                    alert(append);
                    $('#tb').append(append);
                    $('#example1').DataTable({
                        "paging": false,

                        "searching": false,
                        // "ordering": false,
                        //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        responsive: true,

                    });

                }
            });
        }


    })
    ;

</script>
<script>
    $(document).ready(function () {
        var pri = "<?php echo userTypeCode ?>";
        $('#fShow').hide();
        if (pri == 11) {
            $('#payment').show();
        } else {
            $('#payment').hide();
        }

        //    $('#strTodo').val(new Date());


        var t = $('#example_1').DataTable({
            "paging": false,
            "searching": false,
            "bInfo": false,
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                },

            ]
        });
        var counter = 1;
        var arrId = [];
        var arrNum = [];
        var arrSku = [];
        var arrGoodName = [];
        var arrGoodDesc = [];
        var arrUnit = []

        function isInArray(value, array) {
            return array.indexOf(value) > -1;
        }

        $('#addRow').on('click', function () {
            var table = $('#example_1').DataTable();

            table
                .clear()
                .draw();
            var goodsId = $('#goodsId').val();
            var sku = $('#strSku').val();
            var itemName = $('#strName').val();
            var itemDesc = $('#strDesc').val();
            var num = parseInt($('#numItem').val());
            var unit = $('#strUnitItem').val();
            var numtemp = parseInt($('#numTemp').val());
            //            alert(goodsId);

            if (num > 0) {
                if (num > numtemp) {
                    alert('ไม่สามารถเพิ่มสินค้าได้เนื่องจากเลือกหยิบมากกว่าจำนวนที่หยิบได้');
                    if (arrId.length > 0) {
                        for (var i = 0; i < arrId.length; i++) {
                            t.row.add([
                                arrId[i],
                                arrSku[i],
                                arrGoodName[i],
                                arrGoodDesc[i],
                                arrNum[i],
                                arrUnit[i],
                            ]).draw(false);
                        }
                    }
                } else {
                    if (isInArray(goodsId, arrId)) {
                        //                        alert('ddd');
                        var a = arrId.indexOf(goodsId);
                        var valueAtIndex1 = arrNum[a];
                        //                        alert(valueAtIndex1);
                        //                        alert(num + parseInt(valueAtIndex1));
                        if (num + parseInt(valueAtIndex1) <= numtemp) {
                            var sum = num + parseInt(valueAtIndex1);
                            arrNum[a] = sum;
                            //                                alert(sum);
                        } else {
                            alert('ไม่สามารถเพิ่มสินค้าได้เนื่องจากเลือกหยิบมากกว่าจำนวนที่หยิบได้');
                        }
                    } else {
                        //                        alert('ddddd');

                        arrId.push(goodsId);
                        arrNum.push(num);
                        arrSku.push(sku);
                        arrGoodName.push(itemName);
                        arrGoodDesc.push(itemDesc);
                        arrUnit.push(unit);


                    }
                    //                    alert('arrId:'+arrId +'arrNum'+arrNum);
                    for (var i = 0; i < arrId.length; i++) {
                        t.row.add([
                            arrId[i],
                            arrSku[i],
                            arrGoodName[i],
                            arrGoodDesc[i],
                            arrNum[i],
                            arrUnit[i],
                        ]).draw(false);
                    }
                    //
                    //                    counter++;
                }
            } else if (num <= 0) {
                alert('กรุณาเลือกหยิบสินค้าขั้นต่ำ1ชิ้น');
                if (arrId.length > 0) {
                    for (var i = 0; i < arrId.length; i++) {
                        t.row.add([
                            arrId[i],
                            arrSku[i],
                            arrGoodName[i],
                            arrGoodDesc[i],
                            arrNum[i],
                            arrUnit[i],
                        ]).draw(false);
                    }
                }
            }
        });

        $("#strdistrict").change(function () {
            var str = $("#strdistrict").val();
            var selectPro = str.substr(2, 2);
            $("#strprovince").val(selectPro);

        });

        $("#strprovince").change(function () {
            var str = $("#strprovince").val();
            var selectDist = '01' + str;
            $("#strdistrict").val(selectDist);
        });

        $("#strdistrictNew").change(function () {
            var str = $("#strdistrictNew").val();
            var selectPro = str.substr(2, 2);
            $("#strprovinceNew").val(selectPro);

        });

        $("#strprovinceNew").change(function () {
            var str = $("#strprovinceNew").val();
            var selectDist = '01' + str;
            $("#strdistrictNew").val(selectDist);
        });


        // Automatically add a first row of data
        //    $('#addRow').click();???????????????????????????????????????????????????????????????????????????????????????
        $("#btnSave").click(function () {
            var table = $('#example_1').DataTable();
            var cid = "<?php echo $cid;?>";
            //
            var cells = [];
            var data = table.rows().data();
            data.each(function (value) {
                cells.push(value);
            });
            if (cells.length != 0) {
                var custShopName = $('#strshopname').val();
                var custName = $('#strFname').val();
                if (custShopName != '' || custName != '') {
                    if ($('#straddress1').val() != '') {

                        var recvid = $('#recvidX').val();
                        var cid = "<?php echo $cid;?>";
                        var lg = "<?php echo loginUserName;?>";
                        var d1 = $('#strTodo').val();
                        var str = $("#strdistrict").val();
                        var dist1 = str.substr(0, 2);
                        $.post('../../service/insertSellOrderHeader.php', {
                            CID: cid,
                            SO_DOCDATE: d1,
                            SO_DODATE: $('#strDo').val(),
                            SO_PODATE: $('#strPo').val(),
                            SO_TRANTRIPDATE: '',
                            RECVID: recvid,
                            SO_SHIPMENT_METHOD: '',
                            SO_SHIPMENT_TRACKING: '',
                            SO_REF: '',
                            SO_REMARK: $('#strRemark').val(),
                            SO_DOC_BY: lg,
                            CELLS: cells,
                            address: $('#straddress1').val(),
                            subdistrict: $('#strsubdistrict').val(),
                            district: dist1,
                            districtDesc: $('#strdistrict option:selected').text(),
                            province: $('#strprovince').val(),
                            provinceDesc: $('#strprovince option:selected').text(),
                            zipcode: $('#strzipcode').val()
                        }).done(function (data) {
                            var jsonData = JSON.parse(data);
                            //                            alert(JSON.stringify(jsonData));
                            var statusRes = jsonData["status"];
                            var res1 = jsonData["result"];
                            if (statusRes == 1) {
                                if (res1 == "success") {
                                    alert('บันทึกเรียบร้อย');
                                    //                                    window.location = "send-goods.php";
                                    location.reload();
                                    ;
                                }
                            }
                        });
                        //                            });


                    } else {
                        alert('กรุณาใส่ที่อยู่ผู้รับ');
                    }
                } else {
                    alert('กรุณาใส่ชื่อผู้รับสินค้า');
                }
            } else {
                alert('กรุณาเลือกสินค้าจากระบบ');
            }

        });
        //        ????????????????????????????????????????????????????????????????????????????????????????????????????????
        var t = $('#example_1').DataTable();

        $('#example_1 tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            }
            else {
                t.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
        $('#button').click(function () {
            var data1 = t.row('.selected').data();
            var idDel = data1[0];
            var a = arrId.indexOf(idDel);
            arrId.splice(a, 1);
            arrNum.splice(a, 1);
            arrSku.splice(a, 1);
            arrGoodName.splice(a, 1);
            arrGoodDesc.splice(a, 1);
            arrUnit.splice(a, 1);
            t.row('.selected').remove().draw(true);
        });


    });

</script>
<script>
    $(document).ready(function () {
        loadprt();
        loaddist();

        function loaddist() {
            $("#strdistrict").find('option').remove().end();
            $("#strdistrictNew").find('option').remove().end();
            $.post("../../service/getDistrict.php").done(function (data) {
                var jsonData = JSON.parse(data);
                //                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var datalength = jsonData["result"].length;
                    for (var i = 0; i < datalength; i++) {
                        appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["DISTRICT_CODE"] + jsonData["result"][i]["PROVINCE_CODE"] + ">" + jsonData["result"][i]["DISTRICT_DESC"] + "</option>"
                    }
                    $("#strdistrict").append(appendTxt);
                    $("#strdistrictNew").append(appendTxt);
                }


            });
        }

        function loadprt() {
            $("#strprovince").find('option').remove().end();
            $("#strprovinceEdit").find('option').remove().end();
            $.post("../../service/getProvince.php").done(function (data) {
                var jsonData = JSON.parse(data);
                //                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var datalength = jsonData["result"].length;
                    for (var i = 0; i < datalength; i++) {
                        appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["PROVINCE_CODE"] + ">" + jsonData["result"][i]["PROVINCE_DESC"] + "</option>"
                    }
                    $("#strprovince").append(appendTxt);
                    $("#strprovinceNew").append(appendTxt);
                }


            });
        }


    });
</script>

<script>
    $(document).ready(function () {
        $('#clearDataX').click(function () {
            //            alert('dddd');
            $('#recvidX').val('');
            $('#strshopnames').val('');
            $('#strFname').val('');
            $('#strlname').val('');
            $('#straddress1').val('');
            $('#strdistrict').val('0101');
            $('#strprovince').val('01');
            $('#strzipcode').val('');
            $('#strtell').val('');
            $('#strmobile').val('');
            $('#stremail').val('');
        });

        $('#searchItem').click(function () {

            loadData();

        });

        $('#searchRecv').click(function () {

            //            alert('sss');

            loadTable();
        });

        //        var t = $('#search-product').DataTable({
        //            "paging": false,
        //            "searching": false,
        //            "bInfo": false,
        //        });
        function loadTable() {
            var cid = "<?php echo $cid;?>";
            $.post("../../service/getDataRecv.php", {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
                //                                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    for (i = 0; i < resL; i++) {
                        var RECVID = res[i]["RECVID"];
                        var CNAME = res[i]["RNAME"];
                        var ADDR = res[i]["ADDR"];
                        var TEL = res[i]["TEL"];
                        var PHONE = res[i]["PHONE"];
                        var CUST_EMAIL_CONTACT = res[i]["RECV_EMAIL"];
                        var CUST_SHOPNAME = res[i]["RECV_SHOPNAME"];
                        var option = '';
                        if (TEL != '') {
                            option = option + TEL + ',';
                        }
                        if (PHONE != '') {
                            option = option + PHONE + ',';
                        }

                        var foo = option.substring(0, option.length - 1);

                        append = append + "<tr>";
                        append = append + "<td>" + RECVID + "</td>";
                        append = append + "<td>" + CUST_SHOPNAME + "</td>";
                        append = append + "<td width='150'>" + CNAME + "</td>";
                        append = append + "<td width='100'>" + foo + "</td>";
                        append = append + "<td width='150'>" + CUST_EMAIL_CONTACT + "</td>";
                        append = append + "<td  width='250'>" + ADDR + "</td>";
                        append = append + "<td></td>";


                        append = append + "</tr>";

                    }
                    //                    alert(append);
                    $('#tbl').append(append);
                    var table = $('#example-cus').DataTable({
                        "paging": false,

                        "searching": false,
                        // "ordering": false,
                        //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        "columnDefs": [{
                            "targets": -1,
                            "data": null,
                            "defaultContent": "<button>เลือก</button>"
                        }, {
                            "targets": [0],
                            "visible": false,
                            "searchable": false
                        }
                        ], "bDestroy": true,
                        responsive: true,

                    });
                    $('#example-cus tbody').on('click', 'button', function () {
                        var data = table.row($(this).parents('tr')).data();
                        //                        alert( data[0] +"'s salary is: "+ data[ 5 ] );
                        //                        alert(data[0]);
                        closeModal();
                        $('#recvidX').val(data[0]);
                        var delay = 1000; //1 second

                        setTimeout(function () {
                            //your code to be executed after 1 second
                            loadData(cid, data[0]);
                        }, delay);

                    });


                    function loadData(cid, recvid) {
                        $('#fShow').show();
                        $.post("../../service/getRecvInfo.php", {cid: cid, recvid: recvid}).done(function (data) {
                            var jsonData = JSON.parse(data);
                            //                            alert(JSON.stringify(jsonData));
                            var statusRes = jsonData["status"];
                            var appendTxt = "";
                            if (statusRes == 1) {
                                var dis = jsonData["result"][0]['RECV_DISTRICT'] + jsonData["result"][0]['RECV_PROVINCE'];
                                //                    alert(dis);
                                //                    $('#strcid').val(jsonData["result"][0]['CID']);
                                $('#strshopname').val(jsonData["result"][0]['RECV_SHOPNAME']).prop('disabled', true);
                                $('#strFname').val(jsonData["result"][0]['RECV_NAME']).prop('disabled', true);
                                $('#strlname').val(jsonData["result"][0]['RECV_LASTNAME']).prop('disabled', true);
                                $('#straddress1').val(jsonData["result"][0]['RECV_ADDRESS']);
                                $('#strsubdistrict').val(jsonData["result"][0]['RECV_SUBDISTRICT']);
                                $('#strdistrict').val(dis);
                                $('#strprovince').val(jsonData["result"][0]['RECV_PROVINCE']);
                                $('#strzipcode').val(jsonData["result"][0]['RECV_ZIPCODE']);
                                $('#strtell').val(jsonData["result"][0]['RECV_TEL']);
                                $('#strmobile').val(jsonData["result"][0]['RECV_PHONE']);
                                $('#stremail').val(jsonData["result"][0]['RECV_EMAIL']);
                                //                                $('#strnote').val(jsonData["result"][0]['RECV_REMARK']);
                                $('#strtexid').val(jsonData["result"][0]['RECV_TEXID']).prop('disabled', true);
                                $('#strpid').val(jsonData["result"][0]['RECV_PID']).prop('disabled', true);
                                //                        $('#strFB').val(jsonData["result"][0]['FBURL']);
                                //                        $('#strTwitter').val(jsonData["result"][0]['TWURL']);
                                //                        $('#strLine').val(jsonData["result"][0]['LINEID']);
                            }


                        });
                    }


                    //


                }
            });
        }

        function loadData() {
            //            $('#search-product').empty();
            var cid = "<?php echo $cid;?>";
            //            alert(cid);
            //            var lg = "<?php //echo loginUserName;?>//";
            $.post("../../service/getGoodsForCID.php", {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
                //                                    alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    for (i = 0; i < resL; i++) {
                        var CID = res[i]["CID"];
                        var GOODS_ID = res[i]["GOODS_ID"];
                        var GOODS_SKU = res[i]["GOODS_SKU"];
                        var GOODS_NAME = res[i]["GOODS_NAME"];
                        var GOODS_QTY = res[i]["GOODS_QTY"];
                        var GOODS_QTY_UNIT = res[i]["GOODS_QTY_UNIT"];
                        var GOODS_TYPE = res[i]["GOODS_TYPE"];

                        var GOODS_BRAND = res[i]["GOODS_BRAND"];
                        var GOODS_SERIES = res[i]["GOODS_SERIES"];
                        var GOODS_COLOR = res[i]["GOODS_COLOR"];
                        var GOODS_SIZE = res[i]["GOODS_SIZE"];
                        var GOODS_VOL = res[i]["GOODS_VOL"];
                        var GOODS_VOL_UNIT = res[i]["GOODS_VOL_UNIT"];
                        var GOODS_PRODUCTION_DATE = res[i]["GOODS_PRODUCTION_DATE"];
                        var GOODS_EXPIRED_DATE = res[i]["GOODS_EXPIRED_DATE"];
                        var GOODS_LOCATION_DESC = res[i]["GOODS_LOCATION_DESC"];
                        var str = GOODS_PRODUCTION_DATE['date'];
                        var subMFD = str.substr(0, 10);
                        var str2 = GOODS_EXPIRED_DATE['date'];
                        var subMFD2 = str2.substr(0, 10);
                        var GOODS_TEMP = parseFloat(res[i]["GOODS_TEMP"]);
                        //                        alert(JSON.stringify(str2));
                        //                        alert(subMFD2);
                        var option = '';
                        if (GOODS_BRAND != '') {
                            option = option + 'แบรน:' + GOODS_BRAND + ',';
                        }
                        if (GOODS_SERIES != '') {
                            option = option + 'รุ่น:' + GOODS_SERIES + ',';
                        }
                        if (GOODS_COLOR != '') {
                            option = option + 'สี:' + GOODS_COLOR + ',';
                        }
                        if (GOODS_SIZE != '') {
                            option = option + 'ขนาด:' + GOODS_SIZE + ',';
                        }
                        if (GOODS_VOL != 0.0) {
                            option = option + 'ปริมาตร:' + GOODS_VOL + ' ' + GOODS_VOL_UNIT + ',';
                        }
                        if (subMFD != '1900-01-01') {
                            option = option + 'วันผลิต:' + subMFD + ',';
                        }
                        if (subMFD2 != '1900-01-01') {
                            option = option + 'วันหมดอายุ:' + subMFD2 + ',';
                        }
                        var foo = option.substring(0, option.length - 1);
                        //                            alert(foo);

                        if (GOODS_QTY != 0) {

                            append = append + "<tr>";
                            append = append + "<td>" + GOODS_ID + "</td>";
                            append = append + "<td>" + GOODS_SKU + "</td>";
                            append = append + "<td>" + GOODS_NAME + "</td>";
                            append = append + "<td>" + foo + "</td>";
                            append = append + "<td>" + GOODS_TEMP + "</td>";
                            append = append + "<td>" + GOODS_QTY_UNIT + "</td>";
                            append = append + "<td></td>";


                            append = append + "</tr>";
                        }

                    }
                    //                    alert(append);
                    $('#tbx').append(append);
                    //                    $('#search-product').DataTable();
                    var table = $('#search-product').DataTable({
                        "paging": false,

                        "searching": false,
                        // "ordering": false,
                        //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        "columnDefs": [{
                            "targets": -1,
                            "data": null,
                            "defaultContent": "<button>เลือกรายการนี้</button>"
                        }, {
                            "targets": [0],
                            "visible": false,
                            "searchable": false
                        }
                        ], "bDestroy": true,
                        responsive: true,

                    });
                    $('#search-product tbody').on('click', 'button', function () {
                        var data = table.row($(this).parents('tr')).data();
                        //                        alert( data[0] +"'s salary is: "+ data[ 5 ] );
                        closeModal();
                        $('#strSku').val(data[1]);
                        $('#goodsId').val(data[0]);
                        $('#strName').val(data[2]);
                        $('#strDesc').val(data[3]);
                        $('#numTemp').val(data[4]);
                        $('#numItem').val(1);
                        //                        alert(data[3]);
                        $('#strUnitItem').val(data[5]);
                    });

                }
            });
        }

        function closeModal() {
            $('#cSearchItem').click();
            $('#cSearchCus').click();
        }
    });

</script>
<!-- ///////////////////////////// Pick -->
<script>
    $(document).ready(function () {
        $('#loadpick').click(function () {
            loadMainTable();
        });
//        loadMainTable();
        function loadMainTable() {
            var cid = "<?php echo $cid ?> ";
            $.post('../../service/getPickFromCid.php', {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";

                    for (i = 0; i < resL; i++) {
                        var SO_DOCCODE = res[i]["SO_DOCCODE"];
                        var PICKLOT_DOCCODE = res[i]["PICKLOT_DOCCODE"];
                        var PICKLOT_DOCDATE = res[i]["PICKLOT_DOCDATE"];
//                        var CSO = res[i]["CSO"];
                        var SUMITEM = res[i]["SUMITEM"];
                        var PICKLOT_STATUS = res[i]["PICKLOT_STATUS"];
                        //                       var SUMITEM = res[i]["SUMITEM"];
                        //                        alert(JSON.stringify(SO_DOCDATE));
                        var str = PICKLOT_DOCDATE['date'];
                        var subMFD = str.substr(0, 10);
                        var fDate = subMFD.split("-");
                        var reStr = fDate[2] + '/' + fDate[1] + '/' + fDate[0];
//              //                        alert(subMFD);
//
                        var option = '';
                        if (PICKLOT_STATUS == 1) {
                            option = 'กำลังดำเนินการ';
                        } else {
                            option = 'สำเร็จ';
                        }
//              //                        alert(option);
//              //                        alert(foo);
//
//
                        append = append + "<tr>";
                        append = append + "<td class=\"pickSo\"><a  class=\"linkSo\">" + SO_DOCCODE + " </a></td>";
                        append = append + "<td class=\"pickKey\"><a  class=\"linkPick\">" + PICKLOT_DOCCODE + "</a></td>";
                        append = append + "<td width='150' style=\"text-align:center;\" class=\"orderDate\">" + reStr + "</td>";

                        append = append + "<td width='150' class=\"orderSum\">" + SUMITEM + "</td>";
                        append = append + "<td width='150' class=\"orderSum\">" + option + "</td>";
                        append = append + "<td align=\"center\">";
                        // append = append + "<button type=\"button\" class=\"detail\" class=\"btn btn-sm\" style=\"font-family: 'Athiti', sans-serif; font-weight:700px;\" >รายละเอียด </button>";

                        append = append + "  <div class=\"dropdown\" id=\"dropdown\">"
                        append = append + "    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"  ><i class=\"fa fa-cog\" aria-hidden=\"true\"></i><span class=\"caret\"></span></button>";
                        append = append + " <ul class=\"dropdown-menu\">";
                        append = append + "  <li><a class=\"detail\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i> รายละเอียด SaleOrder</a></li>";
                        append = append + "  <li><a class=\"detail2\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i> รายละเอียด Pick</a></li>";
                        append = append + "  <li role=\"presentation\" class=\"divider\"></li>";
                        append = append + "  <li><a href=\"print.php\" target=\"_blank\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i> พิมพ์ SaleOrder</a></li>";
//                        append = append + "  <li><a href=\"export1.php\" ><i class=\"fa fa-print\" aria-hidden=\"true\" ></i> ออกรายงาย</a></li>";

                        append = append + "  </ul>";
                        append = append + "  </div>";
                        append = append + "</td>";

                        append = append + "</tr>";
                    }
//
//            //                    alert(append);
//            //                    $("#tb").children().remove();
//            //                  $('#example-cus').DataTable.destroy();
                    $('#tbxx').append(append);
                    $('#examplexx').DataTable({
                        "paging": false,
                        "searching": false,

                        // "ordering": false,
                        //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        "bDestroy": true,

                    });
                    $('#examplexx').find('tbody').find('tr').each(function () {
                        var pickkey = $(this).find('.pickKey').find('.linkPick').text();
                        $(this).find('.detail').click(function () {
                            //                           alert(pickkey);
                            window.location = 'pick-detail.php?pk=' + pickkey;
                        });
                        $(this).find('.pickKey').find('.linkPick').click(function(){
                            window.location = 'pick-detail.php?pk=' + pickkey;
                        });
                    });
                    $('#examplexx').find('tbody').find('tr').each(function () {
                        var pickkey = $(this).find('.pickSo').find('.linkSo').text();
                        $(this).find('.detail2').click(function () {
                            //                           alert(pickkey);
                            window.location =  "saleorder-detail.php?so="+ pickkey +"&p="+PICKLOT_DOCCODE;
                        });
                        $(this).find('.pickSo').find('.linkSo').click(function(){
                            window.location = "saleorder-detail.php?so="+ pickkey +"&p="+PICKLOT_DOCCODE;
                        });
                    });

                }
            });

        }
    });
</script>

<script>
    /////////////////////////////////////////////////// invoice
    $(document).ready(function () {
        $('#loadinvoice').click(function () {
            loadMainTableInvoice();
        });
//        loadMainTable();
        function loadMainTableInvoice() {
            var cid = "<?php echo $cid ?> ";
            $.post('../../service/getInvoiceFromCid.php', {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";

                    for (i = 0; i < resL; i++) {
                        var SO_DOCCODE = res[i]["SO_DOCCODE"];
                        var INV_DOCCODE = res[i]["INV_DOCCODE"];
                        var INV_DOCDATE = res[i]["INV_DOCDATE"];
//                        var CSO = res[i]["CSO"];
                        var SUMITEM = res[i]["SUMITEM"];
                        var INV_DOCSTATUS = res[i]["INV_DOCSTATUS"];
                        //                       var SUMITEM = res[i]["SUMITEM"];
                        //                        alert(JSON.stringify(SO_DOCDATE));
                        var str = INV_DOCDATE['date'];
                        var subMFD = str.substr(0, 10);
                        var fDate = subMFD.split("-");
                        var reStr = fDate[2] + '/' + fDate[1] + '/' + fDate[0];
//              //                        alert(subMFD);
//
                        var option = '';
                        if (INV_DOCSTATUS == 1) {
                            option = 'กำลังดำเนินการ';
                        } else {
                            option = 'สำเร็จ';
                        }
//              //                        alert(option);
//              //                        alert(foo);
//
//
                        append = append + "<tr>";
                        append = append + "<td class=\"pickSo\"><a  class=\"linkSo\">" + SO_DOCCODE + " </a></td>";
                        append = append + "<td class=\"pickInv\"><a  class=\"linkInv\">" + INV_DOCCODE + "</a></td>";
                        append = append + "<td width='150' style=\"text-align:center;\" class=\"orderDate\">" + reStr + "</td>";

                        append = append + "<td width='150' class=\"orderSum\">" + SUMITEM + "</td>";
                        append = append + "<td width='150' class=\"orderSum\">" + option + "</td>";
                        append = append + "<td align=\"center\">";
                        // append = append + "<button type=\"button\" class=\"detail\" class=\"btn btn-sm\" style=\"font-family: 'Athiti', sans-serif; font-weight:700px;\" >รายละเอียด </button>";

                        append = append + "  <div class=\"dropdown\" id=\"dropdown\">"
                        append = append + "    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"  ><i class=\"fa fa-cog\" aria-hidden=\"true\"></i><span class=\"caret\"></span></button>";
                        append = append + " <ul class=\"dropdown-menu\">";
                        append = append + "  <li><a class=\"detail\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i> รายละเอียด SaleOrder</a></li>";
                        append = append + "  <li><a class=\"detail2\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i> รายละเอียด Pick</a></li>";
                        append = append + "  <li role=\"presentation\" class=\"divider\"></li>";
                        append = append + "  <li><a href=\"print.php\" target=\"_blank\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i> พิมพ์ SaleOrder</a></li>";
//                        append = append + "  <li><a href=\"export1.php\" ><i class=\"fa fa-print\" aria-hidden=\"true\" ></i> ออกรายงาย</a></li>";

                        append = append + "  </ul>";
                        append = append + "  </div>";
                        append = append + "</td>";

                        append = append + "</tr>";
                    }
//
//            //                    alert(append);
//            //                    $("#tb").children().remove();
//            //                  $('#example-cus').DataTable.destroy();
                    $('#tbxx1').append(append);
                    $('#examplexx1').DataTable({
                        "paging": false,
                        "searching": false,

                        // "ordering": false,
                        //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        "bDestroy": true,

                    });
                    $('#examplexx1').find('tbody').find('tr').each(function () {
                        var pickkey = $(this).find('.pickInv').find('.linkInv').text();
                        $(this).find('.detail').click(function () {
                            //                           alert(pickkey);
                            window.location = 'invoice-detail.php?inv=' + pickkey +'&cid='+cid;
                        });
                        $(this).find('.pickInv').find('.linkInv').click(function(){
                            window.location = 'invoice-detail.php?inv=' + pickkey +'&cid='+cid;
                        });
                    });
                    $('#examplexx1').find('tbody').find('tr').each(function () {
                        var pickkey = $(this).find('.pickSo').find('.linkSo').text();
                        $(this).find('.detail2').click(function () {
                            //                           alert(pickkey);
                            window.location =  "saleorder-detail.php?so="+ pickkey +"&p="+PICKLOT_DOCCODE;
                        });
                        $(this).find('.pickSo').find('.linkSo').click(function(){
                            window.location = "saleorder-detail.php?so="+ pickkey +"&p="+PICKLOT_DOCCODE;
                        });
                    });

                }
            });

        }
    });
</script>


<!-- <script scr="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script> -->
<!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"> -->
<!-- <script src="assets/js/bootstrap-select.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap-select.css"> -->
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

    .btn-default {
        color: white !important;
        float: left !important;
        margin-left: 15%;
    }

    td {
        vertical-align: middle;
    }

    .btn {
        background-color: #00b1ba !important;

    }
</style>
<!-- Modal search cus -->
<div class="modal fade" id="myModal-search-contact" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title"> ค้นหาผู้รับปลายทาง</h2>
            </div>
            <div class="modal-body">

                <input type="text" class="light-table-filter form-control" data-table="order-table" id="search"
                       name="search" placeholder="Search..">
                <br><br>
                <table class="table table-bordered order-table" id="example-cus" style="margin-top:20px;">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>ชื่อร้านค้า</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>เบอร์โทร</th>
                        <th>อีเมล์</th>
                        <th>ที่อยู่</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="tbl">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-info" data-dismiss="modal" id="cSearchCus">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->
<!-- Modal add recieve -->
<div class="modal fade" id="myModal-add-contact" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title"> เพิ่มข้อมูลผู้รับปลายทางรายใหม่</h2>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">ชื่อร้านค้า</label>
                        <!--                        <inputt type="hidden" id="recvidX">-->
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="strshopnameNew" placeholder="">
                        </div>
                        <!-- <i class="fa fa-search-plus fa-2x" data-toggle="modal"
                        data-target="#myModal-search-contact" aria-hidden="true" id="searchRecv"></i> -->
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">ชื่อผู้รับสินค้า</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="strFnameNew" placeholder="">
                        </div>
                        <label class=" col-sm-2" for="">นามสกุลผู้รับสินค้า</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="strlnameNew" placeholder="">
                        </div>
                        <!-- <a class="fa fa-user-plus fa-2x"
                        data-toggle="modal"  data-target="#myModal-add-contact"
                        aria-hidden="true" id="clearDataX"></a> -->
                        <!--                                        <i class="fa fa-user-plus fa-2x" aria-hidden="true"></i>-->

                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">ที่อยู่</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="straddress1New" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">ตำบล:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="strsubdistrictNew" placeholder="">
                        </div>
                        <label class="col-sm-2" for="">อำเภอ:</label>
                        <div class="col-sm-3">
                            <select class="form-control selectpicker show-tick" id="strdistrictNew">
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">จังหวัด:</label>
                        <div class="col-sm-3">
                            <select class="form-control selectpicker show-tick" id="strprovinceNew">

                            </select>
                        </div>
                        <label class="col-sm-2" for="">รหัสไปรษณีย์</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="strzipcodeNew" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">เลขที่ภาษีอากร</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="strtexidNew" placeholder="">
                        </div>
                        <label class=" col-sm-2" for="">เลขที่บัตรประชาชน</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="strpidNew" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="">โทรศัพท์</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="strtellNew" placeholder="">
                        </div>
                        <label class="col-sm-2" for="">มือถือ</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="strmobileNew" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label  col-sm-3" for="">e-mail</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="stremailNew" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-6">
                            <button type="button" class="btn btn-info" id="save-receiver">บันทึก</button>

                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-info" data-dismiss="modal" style="float:right !important;"
                            id="cSearchCusNew">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end add recieve -->
<script>
    $(document).ready(function () {
        /////////// save new receiver ////////////////////////////////////////////////
        $('#save-receiver').bind("click", function () {
            var cid = "<?php echo $cid;?>";
            var str = $("#strdistrictNew").val();
            var dist1 = str.substr(0, 2);
            $.post('../../service/insertNewReceiver.php', {
                cid: cid,
                recvName: $('#strFnameNew').val(),
                recvLname: $('#strlnameNew').val(),
                recvTexId: $('#strtexidNew').val(),
                recvAddress: $('#straddress1New').val(),
                recvSubDistrict: $('#strsubdistrictNew').val(),
                recvDistrict: dist1,
                recvDistrictDesc: $('#strdistrictNew option:selected').text(),
                recvProvince: $('#strprovinceNew').val(),
                recvProvinceDesc: $('#strprovinceNew option:selected').text(),
                recvZipcode: $('#strzipcodeNew').val(),
                recvTel: $('#strtellNew').val(),
                recvPhone: $('#strmobileNew').val(),
                recvEmail: $('#stremailNew').val(),
                recvRemark: '',
                recvShopName: $('#strshopnameNew').val(),
                recvPID: $('#strpidNew').val(),
                ////////////////////// contact /////////////////////////


                ///////////////////// social///////////////////////////
                FBUrl: '',
                IGID: '',
                lineId: '',
                WechatId: '',
                WhatsAppId: '',
                PageUrl: ''
            }).done(function (data) {
                var jsonData = JSON.parse(data);
                //                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];
                var value = jsonData['value'];
                //                alert(value);
                var str = $("#strdistrict").val();
                var dist1 = str.substr(0, 2);
                if (statusRes == 1) {
                    if (res == "success") {
                        $('#recvidX').val(value);
                        $('#strFname').val($('#strFnameNew').val()).prop('disabled', true);
                        $('#strlname').val($('#strlnameNew').val()).prop('disabled', true);
                        $('#strtexid').val($('#strtexidNew').val()).prop('disabled', true);
                        $('#straddress1').val($('#straddress1New').val());
                        $('#strsubdistrict').val($('#strsubdistrictNew').val());
                        $('#strdistrict').val($('#strdistrictNew').val());
                        $('#strprovince').val($('#strprovinceNew').val());
                        $('#strzipcode').val($('#strzipcodeNew').val());
                        $('#strtell').val($('#strtellNew').val());
                        $('#strmobile').val($('#strmobileNew').val());
                        $('#stremail').val($('#stremailNew').val());
                        $('#strshopname').val($('#strshopnameNew').val()).prop('disabled', true);
                        $('#strpid').val($('#strpidNew').val()).prop('disabled', true);
                        alert('บันทึกเรียบร้อย');
                        $('#cSearchCusNew').click();
                        $('#fShow').show();

                    }
                }

            });
        });
    });
</script>

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
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="xClose">&times;</button>
                <h2 class="modal-title"> รายการ SALE ORDER</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn btn-default" role="button" id="createPick"
                           style="font-family: 'Athiti', sans-serif; font-weight:700px;margin-left:40%;">สร้างรายการ
                            pick</a>
                    </div>
                </div>
                <input type="text" class="light-table-filter form-control" data-table="order-table" id="search"
                       name="search" placeholder="Search..">
                <br><br>
                <table class="table table-bordered order-table" id="loadorderpicklist" style="margin-top:20px;" width="100%">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="checkAll" onchange="checkAll(this)" name="chk[]" value=""><label>เลือกทั้งหมด</label>
                        </th>
                        <th id="name"><label> รหัส SALE ORDER</label></th>
                        <th><label>วันที่ทำรายการ</label></th>
                        <th><label>ชื่อร้านค้า</label></th>
                        <th><label>จำนวนรวม(หน่วย)</label></th>
                        <!--                        <th><label>หน่วย</label></th>-->

                    </tr>
                    </thead>
                    <tbody id="loadpickCid">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <div class="col-lg-6">
                    <INPUT type="hidden" class="btn btn-info" data-dismiss="modal" id="hidfenbtn"></INPUT>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var dataGroup = [];
        $('#createPick').click(function () {
            //            var table = $('#example-cus').DataTable();
            ////
            var cells = [];
            //            var data = table.rows().data();
            //            var datalength = data.length;
            ////            alert(data[0][1]);
            ////            alert(datalength);
            //            for(var i=0;i<datalength;i++){
            ////                if(data[i][2].prop('checked')==true){
            ////                    alert(data[i][2]);
            ////                }
            //                alert(data[i][1]);
            //            }
            var lg = "<?php echo loginUserName;?>";
            $('#loadorderpicklist').find('tbody').find('tr').each(function () {
                if ($(this).find('td:nth-child(1)').find('input').prop('checked') == true) {

                    var selectedCID = $(this).closest('tr').find('.orderKey').find('.hiddenValue').val();
                    var selectedRECVID = $(this).closest('tr').find('.orderKey').find('.hiddenValue2').val();
                    var selectedOrderCode = $(this).closest('tr').find('.orderKey').find('.orderCode').text();
                    var selectedOrderSum = $(this).closest('tr').find('.orderSum').text();
                    cells.push(lg + '#' + selectedCID + '#' + selectedOrderCode + '#' + selectedOrderSum + '#' + selectedRECVID);

                }

            });
            //            alert(JSON.stringify(cells));

            //            data.each(function (value) {
            //                cells.push(value);
            //            });
            //            alert(JSON.stringify(cells));
            $.post('../../service/insertNewPicklot.php', {
                dataGroup: cells,
                lg: lg
            }).done(function (data) {
                var jsonData = JSON.parse(data);
                //                alert(JSON.stringify(/jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];
                var resVal = jsonData["value"];
                if (statusRes == 1) {
                    if (res == "success") {
                        //                        alert('บันทึกเรียบร้อย');
                        //                        window.location = "./send-goods.php";

                        $.post('../../service/insertNewInvoice.php', {
                            dataGroup: cells,
                            lg: lg,
                            pick: resVal
                        }).done(function (data) {
                            var jsonData = JSON.parse(data);
//                                                                                        alert(JSON.stringify(jsonData));
                            var statusRes2 = jsonData["status"];
                            var res2 = jsonData["result"];
                            if (statusRes2 == 1) {
                                if (res2 == "success") {
                                    alert('บันทึกเรียบร้อย');
                                    location.reload();
                                }
                            }
                        });
                    }
                }
            });
        });
//        $('#detailX').click(function () {
//            var delay = 500; //1 second
//
//            setTimeout(function () {
//                //your code to be executed after 1 second
//
//                loadTable();
//            }, delay);
//        });
        loadTableOrPick();
        function loadTableOrPick() {
            //            $('#example-cus').DataTable().clear();
            var cid = '<?php echo $cid?>';
            $.post('../../service/getNewOrderTableCid.php',{cid:cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";

                    for (i = 0; i < resL; i++) {
                        var CID = res[i]["CID"];
                        var SO_DOCCODE = res[i]["SO_DOCCODE"];
                        var SO_DOCDATE = res[i]["SO_DOCDATE"];
                        var CUST_NAME = res[i]["CUST_NAME"];
                        var CUST_LASTNAME = res[i]["CUST_LASTNAME"];
                        var CUST_SHOPNAME = res[i]["CUST_SHOPNAME"];
                        var SUMITEM = res[i]["SUMITEM"];
                        var RECVID = res[i]["RECVID"];
                        //                        alert(JSON.stringify(SO_DOCDATE));
                        var str = SO_DOCDATE['date'];
                        var subMFD = str.substr(0, 10);
                        var fDate = subMFD.split("-");
                        var reStr = fDate[2] + '/' + fDate[1] + '/' + fDate[0];
                        //                        alert(subMFD);

                        var option = '';
                        if (CUST_SHOPNAME != '' && CUST_NAME != '') {
                            option = CUST_SHOPNAME + ' (' + CUST_NAME + ' ' + CUST_LASTNAME + ')';
                        } else if (CUST_NAME == '' && CUST_SHOPNAME != '') {
                            option = CUST_SHOPNAME;
                        } else {
                            option = CUST_NAME + ' ' + CUST_LASTNAME;
                        }
                        //                        alert(option);
                        //                        alert(foo);


                        append = append + "<tr>";
                        //                        append = append + "<td> </td>";
                        append = append + "<td><input type=\"checkbox\" id=\"checkItem\" class=\"case\" value=\"\"></td>";
                        append = append + "<td class=\"orderKey\"><div class=\"orderCode\">" + SO_DOCCODE + "</div><input class='hiddenValue' type='hidden' value='" + CID + "'><input class='hiddenValue2' type='hidden' value='" + RECVID + "'></td>";
                        append = append + "<td width='150' class=\"orderDate\">" + reStr + "</td>";
                        append = append + "<td width='100' class=\"orderBy\">" + option + "</td>";
                        append = append + "<td width='150' class=\"orderSum\">" + SUMITEM + "</td>";


                    }

                    //                    $("#tb").children().remove();
                    //                  $('#example-cus').DataTable.destroy();
                    $('#loadpickCid').append(append);
                    $('#loadorderpicklist').DataTable({
                        "paging": false,
                        "searching": false,

                        // "ordering": false,
                        //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        "bDestroy": true,

                    });

                }
            });
        }

    });


</script>

<!-- end modal -->
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->

</div>
</div>
<!-- </div> -->
</div></div>
</div>
</div>
</div>
<!-- <article class="content_gray offset__2">
<div class="container">

</article> -->

</section>


<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
? 2014 Copyright Text
<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
</div>
</div>
</footer> -->

<script>
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>

<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
