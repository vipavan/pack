<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
$inv = $_REQUEST['inv'];
if($_REQUEST['cid']!=''){
    $cid =  $_REQUEST['cid'];
}else{
    $cid ='';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>manage-product</title>
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
                margin-left: 11%;
            }

            .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover {
                color: #7f5373;
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
                            <ul class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="add-cus.php">จัดการข้อมูลลูกค้า</a></li>
                                <li class="current"><a href="manage-product.php">จัดการสินค้า</a></li>
                                <li><a href="report.php">รายงาน</a></li>
                                <li><a href="setting.php">ตั้งค่าการใช้งาน</a></li>
                                <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a
                                        href="../../../logout.php">ออกจากระบบ</a></li>

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

    .btn-default {
        color: white !important;
        /*float: left !important;*/
        /*margin-left: 21%;*/
    }

    td {
        vertical-align: middle;
    }
</style>
<section id="content">
    <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height:95px;">
                        <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> กลับ</button> -->
                        <button type="button" class="btn btn-sm" id="btnBack"
                                style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                            กลับ
                        </button>
                        <!-- <input type="button" id="detail" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style=" margin-bottom:10px; margin-left:10px; float:left;font-family: 'Athiti', sans-serif; font-weight:700px;"  value="สร้างรายการ pick "> -->
                        <h2 style="text-align: center;">เอกสารนำส่งสินค้า เลขที่ <?php echo $inv; ?></h2>
                    </div>
                    <div class="panel-body">
                        <!-- <input type="text" id="search" class="light-table-filter form-control" data-table="order-table"  name="search" placeholder="Search.."> -->
                        <div class="row">
                            <div class="col-lg-6">
                                <style>

                                </style>
                                <form class="form-horizontal" role="form" id="blockquote"
                                      style="border: 1px solid #333; padding: 5px;">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">วันที่ทำรายการ</label>
                                        <!--                                        <label class="control-label col-sm-3" for="">21 กรกฏาคม 2559</label>-->
                                        <div id="labelDocDate"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ผู้ส่ง</label>
                                        <!--                                        <label class="control-label col-sm-3" for="">บริษัท Rip culr จำกัด</label>-->
                                        <div id="labelCustName"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label  col-sm-3" for="">เลขที่เสียภาษีอากร</label>
                                        <!--                                        <label class=" control-label  col-sm-2" for="" max="13">100210929019</label>-->
                                        <div id="labelCustTexId"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ที่อยู่:</label>
                                        <!--                                        <label class="control-label col-sm-5" for="">92/350 ถนนเลียบวารี แขวงร่มเกล้า-->
                                        <!--                                            เขตลาดกระบัง กรุงเทพมหานคร 10240</label>-->
                                        <div id="labelCustAddress"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">เบอร์โทร</label>
                                        <!--                                        <label class="control-label col-sm-2" for="">0919909909</label>-->
                                        <div id="labelCustTel"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">email</label>
                                        <!--                                        <label class="control-label col-sm-2" for="">vipavan.k@gmail.com</label>-->
                                        <div id="labelCustEmail"></div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-6">
                                <form class="form-horizontal" role="form"
                                      style="border: 1px solid #333; padding: 5px; height:320px;">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ผู้รับปลายทาง</label>
                                        <!--                                        <label class="control-label col-sm-3" for="">วิภาวรรณ แก้วเล็ก</label>-->
                                        <div id="labelRecvName"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label  col-sm-3" for="">เลขที่เสียภาษีอากร</label>
                                        <!--                                        <label class=" control-label  col-sm-3" for="">1109290929091</label>-->
                                        <div id="labelRecvTextID"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ที่อยู่:</label>
                                        <!--                                        <label class="control-label col-sm-5" for="">92/350 ถนนเลียบวารี แขวงร่มเกล้า-->
                                        <!--                                            เขตลาดกระบัง กรุงเทพมหานคร 10240</label>-->
                                        <div id="labelRecvAddress"></div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">เบอร์โทร</label>
                                        <!--                                        <label class="control-label col-sm-2" for="">0919909909</label>-->
                                        <div id="labelRecvTel"></div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">email</label>
                                        <!--                                        <label class="control-label col-sm-2" for="">vipavan.k@gmail.com</label>-->
                                        <div id="labelRecvEmail"></div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped table-bordered order-table" id="example">
                            <thead>
                            <!-- <tr>
                            <th></th>
                          </tr> -->
                            <tr style="text-align:center;">
                                <!-- <th id="name"  style="text-align:center;"><label> เลขที่ Sale order</label></th> -->
                                <!-- <th  style="text-align:center;" ><label>วันที่ทำรายการ</label></th> -->
                                <!-- <th   style="text-align:center;"> <label>วันที่ส่งสินค้า</label></th> -->
                                <th style="text-align:center;"><label>SKU</label></th>
                                <th style="text-align:center;"><label>ชื่แสิคน้า</label></th>

                                <th style="text-align:center;"><label>รายละเอียดสินค้า</label></th>
                                <!-- <th   style="text-align:center;"> <label>ผู้รับปลายทาง</label></th> -->
                                <th style="text-align:center;"><label>จำนวน</label></th>
                                <th style="text-align:center;"><label>หน่วย</label></th>
                                <th style="text-align:center;"><label>หมายเหตุ</label></th>
                            </tr>
                            </thead>
                            <tbody id='tb'>

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
        var inv = "<?php echo $inv;?>";
        loadBlockReceiver();
        loadBlockItem();
        loadBlockCustomer();

        $('#btnBack').click(function () {
            var cid  = "<?php echo $cid?>";
            if(cid==''){
                window.location = 'pick.php#tab2default';
            }else {
                window.location = 'inventory.php?cid=' + cid;
            }
        });

        function loadBlockCustomer() {
            $.post('../../service/getInvCustomer.php', {inv: inv}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var res = jsonData["result"];
                var CUST_COMPUTE_NAME = res[0]["CUST_COMPUTE_NAME"];
                var CUST_SHOPNAME = res[0]["CUST_SHOPNAME"];
                var CUST_TYPE_CODE = res[0]["CUST_TYPE_CODE"];

                var TEL = res[0]["CUST_TEL"];
                var PHONE = res[0]["CUST_PHONE"];
                var EMAIL = res[0]["CUST_EMAIL"];
                var TEXTID = '';
                if (res[0]["CUST_TEXID"] != '') {
                    TEXTID = res[0]["CUST_TEXID"];
                }
                var option2 = '';
                if (CUST_TYPE_CODE == 1) {
                    option2 = CUST_SHOPNAME;
                    var address2 = '';
//          address2 = address2 + option2 + '<br>';
                    if (res[0]["CUST_ADDRESS2"] != '') {
                        address2 = address2 + 'ที่่อยู่  ' + res[0]["CUST_ADDRESS2"] + ' ';
                    }
                    if (res[0]["CUST_SUBDISTRICT2"] != '') {
                        address2 = address2 + 'ตำบล ' + res[0]["CUST_SUBDISTRICT2"] + ' ';
                    }
                    if (res[0]["CUST_DISTRICT_DESC2"] != '') {
                        address2 = address2 + 'อำเภอ ' + res[0]["CUST_DISTRICT_DESC2"] + ' ';
                    }
                    if (res[0]["CUST_PROVINCE_DESC2"] != '') {
                        address2 = address2 + 'จังหวัด ' + res[0]["CUST_PROVINCE_DESC2"] + ' ';
                    }
                    if (res[0]["CUST_ZIPCODE2"] != '') {
                        address2 = address2 + 'รหัสไปรษณีย์  ' + res[0]["CUST_ZIPCODE2"] + ' ';
                    }
                } else {
                    option2 = CUST_COMPUTE_NAME;
                    var address2 = '';
//          address2 = address2 + option2 + '<br>';
                    if (res[0]["CUST_ADDRESS"] != '') {
                        address2 = address2 + 'ที่่อยู่  ' + res[0]["CUST_ADDRESS"] + ' ';
                    }
                    if (res[0]["CUST_SUBDISTRICT"] != '') {
                        address2 = address2 + 'ตำบล ' + res[0]["CUST_SUBDISTRICT"] + ' ';
                    }
                    if (res[0]["CUST_DISTRICT_DESC"] != '') {
                        address2 = address2 + 'อำเภอ ' + res[0]["CUST_DISTRICT_DESC"] + ' ';
                    }
                    if (res[0]["CUST_PROVINCE_DESC"] != '') {
                        address2 = address2 + 'จังหวัด ' + res[0]["CUST_PROVINCE_DESC"] + ' ';
                    }
                    if (res[0]["CUST_ZIPCODE"] != '') {
                        address2 = address2 + 'รหัสไปรษณีย์  ' + res[0]["CUST_ZIPCODE"] + ' ';
                    }
                }
                var xxx = '';
                if (TEL == '' && PHONE != '') {
                    xxx = PHONE;
                } else if (TEL != '' && PHONE == '') {
                    xxx = TEL;
                } else {
                    xxx = TEL;
                }


                //////////////set //////////////////////////
                var labelName = " <label class=\"control-label col-sm-5\" for=\"\">" + option2 + "</label>"
                var labelTextId = " <label class=\"control-label col-sm-3\" for=\"\">" + TEXTID + "</label>"
                var labelAddress = " <label class=\"control-label col-sm-5\" for=\"\">" + address2 + "</label>"
                var labelTel = " <label class=\"control-label col-sm-5\" for=\"\">" + xxx + "</label>"
                var labelEmail = " <label class=\"control-label col-sm-5\" for=\"\">" + EMAIL + "</label>"
                $('#labelCustName').html(labelName);
                $('#labelCustTexId').html(labelTextId);
                $('#labelCustAddress').html(labelAddress);
                $('#labelCustTel').html(labelTel);
                $('#labelCustEmail').html(labelEmail);
            });
        }

        function loadBlockReceiver() {
            $.post('../../service/getInvReceiverByCode.php', {inv: inv}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var res = jsonData["result"];
                var RECV_NAME = res[0]["RECV_NAME"];
                var RECV_LASTNAME = res[0]["RECV_LASTNAME"];
                var RECV_SHOPNAME = res[0]["RECV_SHOPNAME"];
                var RECVNAME = RECV_NAME + ' ' + RECV_LASTNAME;

//
                var TEL = res[0]["RECV_TEL"];
                var PHONE = res[0]["RECV_PHONE"];
                var EMAIL = res[0]["RECV_EMAIL"];
                var TEXTID = '';
                if (res[0]["RECV_TEXID"] != '') {
                    TEXTID = res[0]["RECV_TEXID"];
                }
                var address = "";
////                if (rexv != '') {
////                    address = address + rexv + '<br>';
////                }
                if (res[0]["RECV_ADDRESS"] != '') {
                    address = address + 'ที่่อยู่  ' + res[0]["RECV_ADDRESS"];
                }
                if (res[0]["RECV_SUBDISTRICT"] != '') {
                    address = address + ' ตำบล ' + res[0]["RECV_SUBDISTRICT"];
                }
                if (res[0]["RECV_DISTRICT_DESC"] != '') {
                    address = address + ' อำเภอ ' + res[0]["RECV_DISTRICT_DESC"];
                }
                if (res[0]["RECV_PROVINCE_DESC"] != '') {
                    address = address + ' จังหวัด ' + res[0]["RECV_PROVINCE_DESC"];
                }
                if (res[0]["RECV_ZIPCODE"] != '') {
                    address = address + ' รหัสไปรษณีย์  ' + res[0]["RECV_ZIPCODE"];
                }

                var rexv = '';
                if (RECVNAME == ' ' && RECV_SHOPNAME != '') {
                    rexv = RECV_SHOPNAME
                } else if (RECVNAME != ' ' && RECV_SHOPNAME == '') {
                    rexv = RECVNAME
                } else if (RECVNAME != ' ' && RECV_SHOPNAME != '') {
                    rexv = RECV_SHOPNAME + '(' + RECVNAME + ')';
                }
//                alert(rexv);
//
                var xxx = '';
                if (TEL == '' && PHONE != '') {
                    xxx = PHONE;
                } else if (TEL != '' && PHONE == '') {
                    xxx = TEL;
                } else {
                    xxx = TEL;
                }
//
//                /////////////////////////// set value ///////////////////////////////////////
                var labelName = " <label class=\"control-label col-sm-5\" for=\"\">" + rexv + "</label>"
                var labelTextId = " <label class=\"control-label col-sm-3\" for=\"\">" + TEXTID + "</label>"
                var labelAddress = " <label class=\"control-label col-sm-5\" for=\"\">" + address + "</label>"
                var labelTel = " <label class=\"control-label col-sm-5\" for=\"\">" + xxx + "</label>"
                var labelEmail = " <label class=\"control-label col-sm-5\" for=\"\">" + EMAIL + "</label>"
//                alert(labelName);
//
                $('#labelRecvName').html(labelName);
                $('#labelRecvTextID').html(labelTextId);
                $('#labelRecvAddress').html(labelAddress);
                $('#labelRecvTel').html(labelTel);
                $('#labelRecvEmail').html(labelEmail);
            });
        }

        function loadBlockItem() {
            $.post('../../service/getInvDetailItemByCode.php', {inv: inv}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    var INV_DOCDATE = res[0]["INV_DOCDATE"];
                    var str = INV_DOCDATE['date'];
                    var subMFD = str.substr(0, 10);
                    var fDate = subMFD.split("-");
                    var reStr = fDate[2] + '/' + fDate[1] + '/' + fDate[0];

                    var labelDocDate = "<label class=\"control-label col-sm-3\" for=\"\">" + reStr + "</label>";
                    $('#labelDocDate').html(labelDocDate);
                    for (i = 0; i < resL; i++) {
                        //                       var CID = res[i]["CID"];
//                        var SO_DOCCODE = res[i]["SO_DOCCODE"];

                        var GOODS_SKU = res[i]["GOODS_SKU"];
                        var GOODS_NAME = res[i]["GOODS_NAME"];

                        var GOODS_BRAND = res[i]["GOODS_BRAND"];
                        var GOODS_SERIES = res[i]["GOODS_SERIES"];
                        var GOODS_COLOR = res[i]["GOODS_COLOR"];
                        var GOODS_SIZE = res[i]["GOODS_SIZE"];
                        var GOODS_VOL = res[i]["GOODS_VOL"];
                        var GOODS_VOL_UNIT = res[i]["GOODS_VOL_UNIT"];
                        var SO_ORDER_QTY = res[i]["SO_ORDER_QTY"];
                        var SO_ORDER_QTY_UNIT = res[i]["SO_GOODS_QTY_UNIT"];
//                        var wh = res[i]["WH_NAME"];
//                        var location = res[i]["LOCATION_DESC"];


                        var option = '';
//                        if (GOODS_SKU != '') {
//                            option = option + 'รหัสสินค้า:' + GOODS_SKU + '<br>';
//                        }
//                        if (GOODS_NAME != '') {
//                            option = option + 'ชื่อสินค้า:' + GOODS_NAME + '<br>';
//                        }
                        if (GOODS_BRAND != '') {
                            option = option + 'แบรน:' + GOODS_BRAND + '<br>';
                        }
                        if (GOODS_SERIES != '') {
                            option = option + 'รุ่น:' + GOODS_SERIES + '<br>';
                        }
                        if (GOODS_COLOR != '') {
                            option = option + 'สี:' + GOODS_COLOR + '<br>';
                        }
                        if (GOODS_SIZE != '') {
                            option = option + 'ขนาด:' + GOODS_SIZE + '<br>';
                        }
                        if (GOODS_VOL != 0.0) {
                            option = option + 'ปริมาตร:' + GOODS_VOL + ' ' + GOODS_VOL_UNIT + '<br>';
                        }
                        //                       var SUMITEM = res[i]["SUMITEM"];
                        //                        alert(JSON.stringify(SO_DOCDATE));

//          var RECV_NAME = res[i]["RECV_NAME"];
//          var RECV_LASTNAME = res[i]["RECV_LASTNAME"];
//          var RECV_SHOPNAME = res[i]["RECV_SHOPNAME"];
//          var CUST_NAME = res[i]["CUST_NAME"];
//          var CUST_LASTNAME = res[i]["CUST_LASTNAME"];
//          var CUST_SHOPNAME = res[i]["CUST_SHOPNAME"];
//          var RECVNAME = RECV_NAME + ' ' + RECV_LASTNAME;
//          var option2 = '';
//          if (CUST_SHOPNAME != '' && CUST_NAME != '') {
//            option2 = CUST_SHOPNAME + ' (' + CUST_NAME + ' ' + CUST_LASTNAME + ')';
//          } else if (CUST_NAME == '' && CUST_SHOPNAME != '') {
//            option2 = CUST_SHOPNAME;
//          } else {
//            option2 = CUST_NAME + ' ' + CUST_LASTNAME;
//          }
//          //                        alert(subMFD);
//
//          var rexv = '';
//          if (RECVNAME == ' ' && RECV_SHOPNAME != '') {
//            rexv = RECV_SHOPNAME
//          } else if (RECVNAME != ' ' && RECV_SHOPNAME == '') {
//            rexv = RECVNAME
//          } else if (RECVNAME != ' ' && RECV_SHOPNAME != '') {
//            rexv = RECV_SHOPNAME + '(' + RECVNAME + ')';
//          }
//          var address = "";
//          if (rexv != '') {
//            address = address + rexv + '<br>';
//          }
//          if (res[i]["RECV_ADDRESS"] != '') {
//            address = address + 'ที่่อยู่  ' + res[i]["RECV_ADDRESS"] + '<br>';
//          }
//          if (res[i]["RECV_SUBDISTRICT"] != '') {
//            address = address + 'ตำบล ' + res[i]["RECV_SUBDISTRICT"] + '<br>';
//          }
//          if (res[i]["RECV_DISTRICT_DESC"] != '') {
//            address = address + 'อำเภอ ' + res[i]["RECV_DISTRICT_DESC"] + '<br>';
//          }
//          if (res[i]["RECV_PROVINCE_DESC"] != '') {
//            address = address + 'จังหวัด ' + res[i]["RECV_PROVINCE_DESC"] + '<br>';
//          }
//          if (res[i]["RECV_ZIPCODE"] != '') {
//            address = address + 'รหัสไปรษณีย์  ' + res[i]["RECV_ZIPCODE"] + '<br>';
//          }
//
//          var address2 = '';
//          address2 = address2 + option2 + '<br>';
//          if (res[i]["CUST_ADDRESS"] != '') {
//            address2 = address2 + 'ที่่อยู่  ' + res[i]["CUST_ADDRESS"] + '<br>';
//          }
//          if (res[i]["CUST_SUBDISTRICT"] != '') {
//            address2 = address2 + 'ตำบล ' + res[i]["CUST_SUBDISTRICT"] + '<br>';
//          }
//          if (res[i]["CUST_DISTRICT_DESC"] != '') {
//            address2 = address2 + 'อำเภอ ' + res[i]["CUST_DISTRICT_DESC"] + '<br>';
//          }
//          if (res[i]["CUST_PROVINCE_DESC"] != '') {
//            address2 = address2 + 'จังหวัด ' + res[i]["CUST_PROVINCE_DESC"] + '<br>';
//          }
//          if (res[i]["CUST_ZIPCODE"] != '') {
//            address2 = address2 + 'รหัสไปรษณีย์  ' + res[i]["CUST_ZIPCODE"] + '<br>';
//          }
//          //                        alert(option);
//          //                        alert(foo);


                        append = append + "<tr style=\"text-align:center;\">";
                        //                        append = append + "<td> </td>";
                        append = append + "<td class=\"pickKey\">" + GOODS_SKU + "</td>";
                        append = append + "<td class=\"orderDate\">" + GOODS_NAME + "</td>";
                        append = append + "<td  class=\"orderBy\">" + option + "</td>";
                        append = append + "<td  class=\"orderSum\">" + SO_ORDER_QTY + "</td>";
                        append = append + "<td  class=\"orderSum\">" + SO_ORDER_QTY_UNIT + "</td>";
//                        append = append + "<td  class=\"orderSum\">" + wh + "</td>";
//                        append = append + "<td  class=\"orderSum\">" + location + "</td>";
                        append = append + "<td  class=\"orderSum\"></td>";

                        append = append + "</tr>";
                    }
//                    alert(append);
                    //                    $("#tb").children().remove();
                    //                  $('#example-cus').DataTable.destroy();
                    $('#tb').append(append);
                    $('#example').DataTable({
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
<!--==============================
footer
=================================-->
<style>
    #footer {
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
