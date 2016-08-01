<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
//$cid =$_REQUEST['cid'];
$so = $_REQUEST['so'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="../../../assets/css/font.css">
    <link rel="stylesheet" href="../../../assets/css/style-cus.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

    <script src="../../../assets/js/jquery.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/jquery-migrate-1.1.1.js"></script>
    <script src="../../../assets/js/jquery.easing.1.3.js"></script>
    <script src="../../../assets/js/script.js"></script>
    <script src="../../../assets/js/superfish.js"></script>
    <script src="../../../assets/js/jquery.equalheights.js"></script>
    <script src="../../../assets/js/jquery.mobilemenu.js"></script>
    <script src="../../../assets/js/tmStickUp.js"></script>
    <script src="../../../assets/js/jquery.ui.totop.js"></script>
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.3.js"></script> -->
    <script src="../../../assets/js/jquery-1.12.3.min.js"></script>
    <script src="../../../assets/js/jquery.dataTables.js"></script>
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

            a {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
            }

            h1 {
                font-family: 'Athiti', sans-serif;
                font-weight: bold;
            }

            label {
                font-family: 'Athiti', sans-serif;
                font-weight: bold;
            }

            body {
                /*background-color: #e1e1e1;*/
            }

            h2 {
                font-family: 'Athiti', sans-serif;
                font-weight: bold;
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
                                <li class="fa fa-sign-out" style="float:right;"><a
                                        href=../../../logout.php"">ออกจากระบบ</a></li>
                            </ul>
                            <p style="float:right; font-size:18px;"><a href="">สวัสดี <?php echo loginFullName ?> </a>
                            </p>
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
                <div class="panel panel-default" style="margin-top:20px;">
                    <div class="panel-heading" style="height:53px; background-color:#e1e1e1; width:auto;">
                        <label style="font-size:20px; ">เพิ่มค่าใช้จ่ายในการจัดส่ง Sale Order <?php echo $so;?></label>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- <input type="button" onclick="window.location='send-goods.php'" class="btn btn-sm"
                                style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"
                                value="บันทึก"> -->
                                <button type="button" onclick="window.location='inventory.php#tab3default'"
                                        class="btn btn-sm"
                                        style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    กลับ
                                </button>
                            </div>
                        </div>
                        <br>
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

                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- <form class="form-inline" role="form">
                                    <div class="form-group">
                                    <label for="email">  </label>
                                  </div>
                                  <div class="form-group">
                                  <label> ชื่อสินค้า </label>
                                  <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                <label for="pwd"> จำนวน </label>
                                <input type="text" class="form-control" id="pwd">
                              </div>
                            </form> -->

                                    <table class="table" style="margin-top:10px;" id="table">
                                        <tr>
                                            <td>
                                                <i class="fa fa-search-plus" data-toggle="modal" id="searchItem"
                                                   data-target="#myModal"></i>
                                            </td>
                                            <td>
                                                <label style="width:100px;"> รหัสสินค้า: </label>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="strSku"
                                                       style="width:100px;"><input type="hidden" id="goodsId">
                                            </td>
                                            <td>
                                                <label> ชื่อสินค้า: </label>
                                            </td>
                                            <td>
                                                <input type="" class="form-control" id="strName">
                                            </td>
                                            <td>
                                                <label>รายละเอียดสินค้า: </label>
                                            </td>
                                            <td>
                                                <input type="" class="form-control" id="strDesc">
                                            </td>

                                            <td></td>
                                            <td>
                                                <label for=""> จำนวน </label>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" id="numItem" min="0"
                                                       style="width:100px;"><input type="hidden" id="numTemp">
                                            </td>
                                            <td>
                                                <label for=""> หน่วย </label>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="strUnitItem"
                                                       style="width:80px;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <!--                <td>-->
                                            <!--                  <label for=""> ค่าขนส่ง </label>-->
                                            <!--                </td>-->
                                            <!--                <td>-->
                                            <!--                  <input type="text" class="form-control" id="strcostsend"-->
                                            <!--                  style="width:100px;">-->
                                            <!--                </td>-->
                                            <td>
                                                <label for=""> ค่าหยิบสินค้าต่อหน่วย(บาท) </label>
                                            </td>
                                            <td>
                                                <input type="number" min="0" class="form-control" id="strcostpick">
                                            </td>
                                            <!-- <td></td> -->
                                            <!--                <td>-->
                                            <!--                  <label for=""> ช่องทางการจัดส่ง </label>-->
                                            <!--                </td>-->
                                            <!--                <td>-->
                                            <!--                  <input type="text" class="form-control" id="strsend"-->
                                            <!--                  style="width:180px;">-->
                                            <!--                </td>-->
                                            <td>
                                                <button class="btn btn-default btn-add" id="addRow">+</button>
                                                <input type="hidden" id="valueTmp">
                                            </td>
                                            <td>

                                                <button class="btn btn-default " id="button">-</button>
                                            </td>
                                        </tr>
                                    </table>

                                    <table class="table table-bordered  table-hov" id="example"
                                           style="margin-top:20px;">
                                        <!-- <label class="input-group-btn" style="width:auto;"><button type="button" id="addRow" class="btn btn-default btn-add" >+ </label> -->
                                        <thead>
                                        <tr>
                                            <th><label>id</label></th>
                                            <th><label>รหัสสินค้า</label></th>
                                            <th><label>ชื่อสินค้า</label></th>
                                            <th><label>รายละเอียดสินค้า</label></th>
                                            <th><label>จำนวน(หน่วย)</label></th>
                                            <th><label>ค่าหยิบต่อหน่วย(บาท)</label></th>
                                            <th><label>รวมราคา(บาท)</label></th>
                                        </tr>
                                        </thead>
                                        <tbody id="tb">
                                        </tbody>
                                    </table>
                                    <div id="payment">
                                        <table class="table" style="margin-top:100px;" id="table">
                                            <tr>

                                                <td>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3" for="" style="font-size">กรุณาเลือกช่องทางการจัดส่งสินค้า</label>
                                                        <div class="col-sm-4">
                                                            <select class="form-control selectpicker show-tick"
                                                                    id="strprovince">
                                                                <option>ไปรษณีย์ไทย</option>
                                                                <option>Blue&White Express</option>
                                                                <option>kerry</option>
                                                                <!-- <option>ขอนแก่น</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="button" id="btnSave" class="btn btn-lg"
                                           style="margin-bottom:10px; margin-left:1%; font-family: 'Athiti', sans-serif; font-weight:700px;"
                                           value="บันทึก">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<script>
    $(document).ready(function () {
        var so = "<?php echo $so;?>";
        loadBlockReceiver();
        loadBlockItem();
        loadBlockCustomer();

//        $('#btnBack').click(function () {
//            var p  = "<?php //echo $p?>//";
//            if(p==''){
//                window.location = 'pick.php#tab2default';
//            }else {
//                window.location = 'pick-detail.php?pk=' + p;
//            }
//        });

        function loadBlockCustomer() {
            $.post('../../service/getSellOrderCustomer.php', {so: so}).done(function (data) {
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
                if(res[0]["CUST_TEXID"]!=''){
                    TEXTID =res[0]["CUST_TEXID"];
                }
                var option2 = '';
                if (CUST_TYPE_CODE ==1 ) {
                    option2 = CUST_SHOPNAME ;
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
                var xxx ='';
                if(TEL==''&& PHONE!=''){
                    xxx= PHONE;
                }else if(TEL!=''&& PHONE==''){
                    xxx= TEL;
                }else{
                    xxx=TEL;
                }


                //////////////set //////////////////////////
                var labelName = " <label class=\"control-label col-sm-5\" for=\"\">"+ option2 +"</label>"
                var labelTextId = " <label class=\"control-label col-sm-3\" for=\"\">"+ TEXTID +"</label>"
                var labelAddress = " <label class=\"control-label col-sm-5\" for=\"\">"+ address2 +"</label>"
                var labelTel = " <label class=\"control-label col-sm-5\" for=\"\">"+ xxx +"</label>"
                var labelEmail = " <label class=\"control-label col-sm-5\" for=\"\">"+ EMAIL +"</label>"
                $('#labelCustName').html(labelName);
                $('#labelCustTexId').html(labelTextId);
                $('#labelCustAddress').html(labelAddress);
                $('#labelCustTel').html(labelTel);
                $('#labelCustEmail').html(labelEmail);
            });
        }

        function loadBlockReceiver() {
            $.post('../../service/getSellOrderReceiverByCode.php', {so: so}).done(function (data) {
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
                if(res[0]["RECV_TEXID"]!=''){
                    TEXTID =res[0]["RECV_TEXID"];
                }
                var address = "";
////                if (rexv != '') {
////                    address = address + rexv + '<br>';
////                }
                if (res[0]["RECV_ADDRESS"] != '') {
                    address = address + 'ที่่อยู่  ' + res[0]["RECV_ADDRESS"]  ;
                }
                if (res[0]["RECV_SUBDISTRICT"] != ''){
                    address = address + ' ตำบล ' + res[0]["RECV_SUBDISTRICT"] ;
                }
                if (res[0]["RECV_DISTRICT_DESC"] != '') {
                    address = address + ' อำเภอ ' + res[0]["RECV_DISTRICT_DESC"] ;
                }
                if (res[0]["RECV_PROVINCE_DESC"] != '') {
                    address = address + ' จังหวัด ' + res[0]["RECV_PROVINCE_DESC"] ;
                }
                if (res[0]["RECV_ZIPCODE"] != '') {
                    address = address + ' sรหัสไปรษณีย์  ' + res[0]["RECV_ZIPCODE"] ;
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
                var xxx ='';
                if(TEL==''&& PHONE!=''){
                    xxx= PHONE;
                }else if(TEL!=''&& PHONE==''){
                    xxx= TEL;
                }else{
                    xxx=TEL;
                }
//
//                /////////////////////////// set value ///////////////////////////////////////
                var labelName = " <label class=\"control-label col-sm-5\" for=\"\">"+ rexv +"</label>"
                var labelTextId = " <label class=\"control-label col-sm-3\" for=\"\">"+ TEXTID +"</label>"
                var labelAddress = " <label class=\"control-label col-sm-5\" for=\"\">"+ address +"</label>"
                var labelTel = " <label class=\"control-label col-sm-5\" for=\"\">"+ xxx +"</label>"
                var labelEmail = " <label class=\"control-label col-sm-5\" for=\"\">"+ EMAIL +"</label>"
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
            $.post('../../service/getSellOrderDetailItemByCode.php', {so: so}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    var SO_DOCDATE = res[0]["SO_DOCDATE"];
                    var str = SO_DOCDATE['date'];
                    var subMFD = str.substr(0, 10);
                    var fDate = subMFD.split("-");
                    var reStr = fDate[2] + '/' + fDate[1] + '/' + fDate[0];

                    var labelDocDate = "<label class=\"control-label col-sm-3\" for=\"\">" + reStr + "</label>";

                    $('#labelDocDate').html(labelDocDate);
                }

            });
        }

    });


</script>

<script>
    $(document).ready(function () {
        var pri = "<?php echo userTypeCode ?>";

        if (pri == 11) {
            $('#payment').show();
        } else {
            $('#payment').hide();
        }

        //    $('#strTodo').val(new Date());


        var t = $('#example').DataTable({
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
        var arrDataId =[];
        var arrDataSum =[];
        var arrId = [];
        var arrNum = [];
        var arrSku = [];
        var arrGoodName = [];
        var arrGoodDesc = [];
        var arrUnit = []
        var arrCost =[]
        var arrTmpNum =[]

        function isInArray(value, array) {
            return array.indexOf(value) > -1;
        }

        $('#addRow').on('click', function () {
            var table = $('#example').DataTable();

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
            var costperunit = parseInt($('#strcostpick').val());
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
                                arrNum[i]+' ' +arrUnit[i],
                                arrCost[i],
                                parseInt(arrNum[i])*parseInt(arrCost[i]),
                            ]).draw(false);
                        }
                    }
                } else {
                    if(isInArray(goodsId,arrDataId)){
                        var a = arrDataId.indexOf(goodsId);
                        var valueAtIndex1 = arrDataSum[a];
                        var valueAtIndex2 = arrTmpNum[a];
//
                        if (num + parseInt(valueAtIndex1) <= numtemp) {
                            var sum = num + parseInt(valueAtIndex1);
                            var newTemp = parseInt(valueAtIndex2)-num;
                            arrDataSum[a] = sum;
                            arrTmpNum[a] = newTemp;
                            $('#valueTmp').val(arrTmpNum);
                            alert($('#valueTmp').val());
                            //                                alert(sum);
                        } else {
                            alert('ไม่สามารถเพิ่มสินค้าได้เนื่องจากเลือกหยิบมากกว่าจำนวนที่หยิบได้');
                           
                        }
                    }else{
                        arrDataId.push(goodsId);
                        arrDataSum.push(num);
                        arrTmpNum.push(parseInt(numtemp)-num);
                        $('#valueTmp').val(arrTmpNum);
                        alert($('#valueTmp').val());

                    }

                    arrId.push(goodsId);
                    arrNum.push(num);
                    arrSku.push(sku);
                    arrGoodName.push(itemName);
                    arrGoodDesc.push(itemDesc);
                    arrUnit.push(unit);
                    arrCost.push(costperunit);
                    for (var i = 0; i < arrId.length; i++) {
                        t.row.add([
                            arrId[i],
                            arrSku[i],
                            arrGoodName[i],
                            arrGoodDesc[i],
                            arrNum[i]+' ' +arrUnit[i],
                            arrCost[i],
                            parseInt(arrNum[i])*parseInt(arrCost[i]),
                        ]).draw(false);
                    }







                    //                    alert('arrId:'+arrId +'arrNum'+arrNum);

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
                            arrNum[i]+' ' +arrUnit[i],
                            arrCost[i],
                            parseInt(arrNum[i])*parseInt(arrCost[i]),
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

        // Automatically add a first row of data
        //    $('#addRow').click();???????????????????????????????????????????????????????????????????????????????????????
        $("#btnSave").click(function () {
            var table = $('#example').DataTable();
            var cid = "<?php echo cid;?>";
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
                        if ($('#recvidX').val() == '') {
                            //
                            var custLastName = $('#strlname').val();
                            var custAddress = $('#straddress1').val();
                            var str = $("#strdistrict").val();
                            var custDistrict = str.substr(0, 2);
                            var custProvince = $('#strprovince').val();
                            var custZipcode = $('#strzipcode').val();
                            var custTelContact = $('#strtell').val();
                            var custMobile = $('#strmobile').val();
                            var custEmailContact = $('#stremail').val();
                            var custDesc = '';
                            var FBUrl = "";
                            var TWUrl = "";
                            var lineId = "";
                            //
                            var custTexId = "";
                            //////                alert('new');
                            ////
                            $.post('../../service/insertNewReceiver.php', {
                                cid: cid,
                                recvName: custName,
                                recvLname: custLastName,
                                recvAddress: custAddress,
                                recvDistrict: custDistrict,
                                recvProvince: custProvince,
                                recvZipcode: custZipcode,
                                recvTel: custTelContact,
                                recvEmail: custEmailContact,
                                recvShopName: custShopName,
                                recvRemark: custDesc,
                                fburl: FBUrl,
                                twurl: TWUrl,
                                lineid: lineId,
                                recvTexId: custTexId,
                                recvPhone: custMobile
                            }).done(function (data) {
                                var jsonData = JSON.parse(data);
                                //                    alert(JSON.stringify(jsonData));
                                var statusRes = jsonData["status"];
                                var res = jsonData["result"];


                                if (statusRes == 1) {
                                    if (res == "success") {
                                        var recvid = jsonData["value"];
                                        //                                        alert('บันทึกเรียบร้อย');
                                        //                                        window.location = "./manage-cus.php";
                                    }
                                }
                            });
                            //                        });
                        } else {
                            //                            alert('dddd');
                            var recvid = $('#recvidX').val();
                            //                            alert(recvid);
                            var cid = "<?php echo cid;?>";
                            var lg = "<?php echo loginUserName;?>";
                            //                            alert(cid);
                            //                            $.post('../service/getNewCodeSellOrder.php', {
                            //                                cid: cid,
                            //                                recvid: recvid
                            //                            }).done(function (data) {
                            //                                var jsonData = JSON.parse(data);
                            ////                                alert(JSON.stringify(jsonData));
                            //                                var res = jsonData["result"];
                            //                                alert(res);
                            var d1 = $('#strTodo').val();
                            //                                alert(d1);
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
                                CELLS: cells
                            }).done(function (data) {
                                var jsonData = JSON.parse(data);
                                alert(JSON.stringify(jsonData));
                                //                                    var statusRes = jsonData["status"];
                                //                                    var res = jsonData["result"];
                                //
                                //                                    if (statusRes == 1) {
                                //                                        if (res == "success") {
                                ////                                            alert(JSON.stringify(cells));
                                ////                                            var datal = cells.length;
                                ////                                            for(var i =0; i< datal ;i++){
                                ////
                                ////                                            }
                                ////                                            $.post()
                                //                                        }
                                //                                    }
                            });
                            //                            });

                        }
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
        var t = $('#example').DataTable();

        $('#example tbody').on('click', 'tr', function () {
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

        $('#searchItem').click(function () {

            loadData();

        });



        function loadData() {
            //            $('#search-product').empty();
            var so = "<?php echo $so;?>";
            //            alert(cid);
            //            var lg = "<?php //echo loginUserName;?>//";
            $.post("../../service/getSellOrderDetailItemByCode.php", {so: so}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    for (i = 0; i < resL; i++) {
//                        var CID = res[i]["CID"];
                        var GOODS_ID = res[i]["GOODS_ID"];
                        var GOODS_SKU = res[i]["GOODS_SKU"];
                        var GOODS_NAME = res[i]["GOODS_NAME"];
                        var GOODS_QTY = res[i]["SO_ORDER_QTY"];
                        var GOODS_QTY_UNIT = res[i]["SO_GOODS_QTY_UNIT"];
//                        var GOODS_TYPE = res[i]["GOODS_TYPE"];

                        var GOODS_BRAND = res[i]["GOODS_BRAND"];
                        var GOODS_SERIES = res[i]["GOODS_SERIES"];
                        var GOODS_COLOR = res[i]["GOODS_COLOR"];
                        var GOODS_SIZE = res[i]["GOODS_SIZE"];
                        var GOODS_VOL = res[i]["GOODS_VOL"];
                        var GOODS_VOL_UNIT = res[i]["GOODS_VOL_UNIT"];
                        var GOODS_PRODUCTION_DATE = res[i]["GOODS_PRODUCTION_DATE"];
//                        var GOODS_EXPIRED_DATE = res[i]["GOODS_EXPIRED_DATE"];
//                        var GOODS_LOCATION_DESC = res[i]["GOODS_LOCATION_DESC"];
//                        var str = GOODS_PRODUCTION_DATE['date'];
//                        var subMFD = str.substr(0, 10);
//                        var str2 = GOODS_EXPIRED_DATE['date'];
//                        var subMFD2 = str2.substr(0, 10);
//                        var GOODS_TEMP = parseFloat(res[i]["GOODS_TEMP"]);
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
//                        if (subMFD != '1900-01-01') {
//                            option = option + 'วันผลิต:' + subMFD + ',';
//                        }
//                        if (subMFD2 != '1900-01-01') {
//                            option = option + 'วันหมดอายุ:' + subMFD2 + ',';
//                        }
                        var foo = option.substring(0, option.length - 1);
                        //                            alert(foo);

                        if (GOODS_QTY != 0) {

                            append = append + "<tr>";
                            append = append + "<td>" + GOODS_ID + "</td>";
                            append = append + "<td>" + GOODS_SKU + "</td>";
                            append = append + "<td>" + GOODS_NAME + "</td>";
                            append = append + "<td>" + foo + "</td>";
                            append = append + "<td>" + GOODS_QTY + "</td>";
                            append = append + "<td>" + GOODS_QTY_UNIT + "</td>";
                            append = append + "<td></td>";


                            append = append + "</tr>";
                        }

                    }
                    //                    alert(append);
                    $('#tbP').append(append);
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
<script>
    $(document).ready(function () {
        loadprt();
        loaddist();

        function loaddist() {
            $("#strdistrict").find('option').remove().end();
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
                }


            });
        }

        function loadprt() {
            $("#strprovince").find('option').remove().end();
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
        float: left !important;
        margin-left: 15%;
    }

    td {
        vertical-align: middle;
    }

    .btn {
        background-color: #7f5373 !important;

    }

    .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover {
        color: #7f5373;
    }

    li {
        font-family: 'Athiti', sans-serif;
        font-weight: 700px;
    }
</style>

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
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">เลือกสินค้า</h2>
            </div>
            <div class="modal-body">
                <p></p>
                <input type="text" class="light-table-filter form-control" data-table="order-table" id="search"
                       name="search" placeholder="Search..">
                <br><br>
                <table class="table table-bordered order-table" id="search-product" style="margin-top:20px;"
                       width="100%">
                    <!-- <table class="table table-bordered table-striped table-hover" id="example" style="margin-top:20px;"> -->
                    <thead>
                    <tr>
                        <th id="name"><label> GOODSID</label></th>
                        <th><label> รหัสสินค้า</label></th>
                        <th><label>ชื่อสินค้า</label></th>
                        <th><label>รายละเอียดสินค้า</label></th>
                        <th><label>จำนวนที่หยิบได้</label></th>
                        <th><label>หน่วย</label></th>
                        <th><label></label></th>
                    </tr>
                    </thead>
                    <tbody id="tbP">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal" id="cSearchItem">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  -->
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

<!--==============================
footer
=================================-->
<!-- <footer id="footer" style="position: fixed-x left bottom;">
<div class="container">
<div class="row">
<div class="grid_12">
<div class="copyright"><span class="brand">Stable</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
<div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
</div>
</div>
</div>
</div>
</footer> -->
<a href="#" id="toTop" class="fa fa-chevron-up"></a>

</body>
</html>
