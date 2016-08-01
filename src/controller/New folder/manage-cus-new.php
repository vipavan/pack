<?php

include '../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../err_authen.php"; </script>';
}
$recvid = $_REQUEST['recvid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>cus new</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <!-- <link href='https://fonts.googleapis.com/css?family=Athiti&subset=thai,latin' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="../../assets/css/font.css">
    <link rel="stylesheet" href="../../assets/css/style-add.css">
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
                color: #00b1ba;
            }

            .modal-title {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
                color: #00b1ba;
            }

            label {
                font-family: 'Athiti', sans-serif;
                font-weight: 700px;
                /*color:#00b1ba;*/
            }

            .btn {
                background-color: #00b1ba !important;

            }

            #detail {
                float: left !important;
                margin-left: 31%;
            }

            .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover {
                /*color:#7f5373;*/
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
                                <li><a href="check-stock.php">ตรวจสอบสินค้า</a></li>
                                <li><a href="send-goods.php">สร้างรายการส่งสินค้า</a></li>
                                <li class="current"><a href="manage-cus.php">จัดการข้อมูลลูกค้า</a></li>
                                <li><a href="report.php">รายงาน</a></li>
                                <!-- <li class="current"><a href="setting.php">ตั้งค่าการใช้งาน</a></li> -->
                                <li class="fa fa-sign-out" style="float:right; margin-right:30px;"><a
                                        href="../../logout.php">ออกจากระบบ</a></li>

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

    .btn-default {
        color: white !important;
        float: left !important;
        margin-left: 31%;
    }

    td {
        vertical-align: middle;
    }
</style>
<section id="content">
    <!-- <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div> -->
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="panel-group" style="margin-top:20px;">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:53px; background-color:#e1e1e1;">
                            <!-- <button type="button"  onclick="window.location='settingedit.php'" class="btn btn-sm" data-toggle="modal" data-target="#myModal-add"  style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มผู้ใช้งาน</button> -->
                            <button type="button" onclick="window.location='manage-cus.php'" class="btn btn-sm" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">กลับ</button>
                            <!-- <input type="button"  onclick="window.location='manage-cus-new.php'" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;" value="เพิ่มข้อมูลลูกค้า"> -->
                            <!-- <input type="text"  class="light-table-filter form-control" data-table="order-table" id="search" name="search" placeholder="Search.."> -->
                        </div>
                        <!-- <div class="panel-body"> -->
                        <div class="panel panel-default">
                            <div class="panel-heading"><label style="font-size:20px;"> ส่วนที่ 1 ข้อมูลทั่วไปสำหรับลูกค้าปลายทาง</label></div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ชื่อร้านค้า</label>
                                        <div class="col-sm-6" style="margin-right:1px;">
                                            <input type="text" class="form-control" id="strshopname" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ชื่อลูกค้า:</label>
                                        <div class="col-sm-2" style="margin-right:1px;">
                                            <input type="text" class="form-control" id="strfname" placeholder="">
                                        </div>
                                        <label class=" col-sm-1" for="">นามสกุล:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="strlname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ที่อยู่:</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" rows="3" id="straddress"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">ตำบล:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="strsubdistrict"  >
                                        </div>
                                        <label class="control-label col-sm-1" for="">อำเภอ:</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="strdistrict">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label col-sm-3" for="">จังหวัด:</label>
                                        <div class="col-sm-2">
                                            <select class="form-control selectpicker show-tick" id="strprovince">
                                            </select>
                                        </div>
                                        <label class=" control-label col-sm-2" for="">รหัสไปรษณีย์:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="strzipcode" placeholder="">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">เลขที่เสียภาษีอากร</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="strtexid" placeholder="">
                                        </div>
                                        <label class="control-label col-sm-2" for="">เลขที่ประจำตัวประชาชน</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="strpid" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">โทร:</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="strtell" placeholder="">
                                        </div>
                                        <label class=" control-label col-sm-1" for="">มือถือ:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strmobile" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">e-mail</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="stremail" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">หมายเหตุ:</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" rows="3" id="strnote"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div></div>
                        <div class="panel panel-default">
                            <div class="panel-heading"><label style="font-size:20px;"> ส่วนที่ 2 ข้อมูลโซเชียล</label></div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">FACEBOOK</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strFB" placeholder="">
                                        </div>
                                        <label class="col-sm-1" for="">LINE</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strLine" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">WECHAT</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strwechat" placeholder="">
                                        </div>
                                        <label class="col-sm-1" for="">WhatsApp</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strwhatsapp" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="">INSTAGRAM</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strinstagram" placeholder="">
                                        </div>
                                        <label class="col-sm-1" for="">WEBSITE</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="strwebsite" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <button type="button" id="cancel" onclick="window.location='manage-cus.php'"  class="btn btn-info">ยกเลิก
                                                <button type="button" id="save" class="btn btn-info">ยืนยัน
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>


<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script>
    $(document).ready(function () {
//          alert('vvv');
        var recvid = "<?php echo $recvid?>";
        var cid = "<?php echo cid?>";
        $("#cancel").click(function () {
            window.location = "./manage-cus.php";
        });
        if (recvid == '') {

            var str = $("#strdistrict").val();
            var dist1 = str.substr(0, 2);
            $.post('../service/insertNewReceiver.php', {
                cid: cid,
                recvName: $('#strfname').val(),
                recvLname: $('#strlname').val(),
                recvTexId: $('#strtexid').val(),
                recvAddress: $('#straddress').val(),
                recvSubDistrict: $('#strsubdistrict').val(),
                recvDistrict: dist1,
                recvDistrictDesc: $('#strdistrict option:selected').text(),
                recvProvince: $('#strprovince').val(),
                recvProvinceDesc: $('#strprovince option:selected').text(),
                recvZipcode: $('#strzipcode').val(),
                recvTel: $('#strtell').val(),
                recvPhone: $('#strmobile').val(),
                recvEmail: $('#stremail').val(),
                recvRemark: $('#strnote').val(),
                recvShopName: $('#strshopname').val(),
                recvPID: $('#strpid').val(),
////////////////////// contact /////////////////////////


///////////////////// social///////////////////////////
                FBUrl: $('#strFB').val(),
                IGID: $('#strinstagram').val(),
                lineId: $('#strLine').val(),
                WechatId: $('#strwechat').val(),
                WhatsAppId: $('#strwhatsapp').val(),
                PageUrl: $('#strwebsite').val()
            }).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];

                if (statusRes == 1) {
                    if (res == "success") {
                        alert('บันทึกเรียบร้อย');
                        window.location = "./manage-cus.php";

                    }
                }

            });

        } else {

//            alert(recvid);

            var delay = 1000; //1 second

            setTimeout(function () {
                //your code to be executed after 1 second
                loadData(cid, recvid);
            }, delay);

            function loadData(cid, recvid) {
                $.post("../service/getRecvInfo.php", {cid: cid, recvid: recvid}).done(function (data) {
                    var jsonData = JSON.parse(data);
//                    alert(JSON.stringify(jsonData));
                    var statusRes = jsonData["status"];
                    var appendTxt = "";
                    if (statusRes == 1) {
                        var dis = jsonData["result"][0]['RECV_DISTRICT'] + jsonData["result"][0]['RECV_PROVINCE'];
//                    alert(dis);
//                    $('#strcid').val(jsonData["result"][0]['CID']);
                        $('#strshopname').val(jsonData["result"][0]['RECV_SHOPNAME']);
                        $('#strfname').val(jsonData["result"][0]['RECV_NAME']);
                        $('#strlname').val(jsonData["result"][0]['RECV_LASTNAME']);
                        $('#straddress').val(jsonData["result"][0]['RECV_ADDRESS']);
                        $('#strdistrict').val(dis);
                        $('#strprovince').val(jsonData["result"][0]['RECV_PROVINCE']);
                        $('#strzipcode').val(jsonData["result"][0]['RECV_ZIPCODE']);
                        $('#strtell').val(jsonData["result"][0]['RECV_TEL']);
                        $('#strmobile').val(jsonData["result"][0]['RECV_PHONE']);
                        $('#stremail').val(jsonData["result"][0]['RECV_EMAIL']);
                        $('#strnote').val(jsonData["result"][0]['RECV_REMARK']);
                        $('#strtexid').val(jsonData["result"][0]['RECV_TEXID']);

                        $('#strsubdistrict').val(jsonData["result"][0]['RECV_TEXID']);
                        $('#strpid').val(jsonData["result"][0]['RECV_PID']);


                        $('#strwhatsapp').val(jsonData["result"][0]['WHATSAPP_ID']);
                        $('#strwechat').val(jsonData["result"][0]['WECHAT_ID']);
                        $('#strwebsite').val(jsonData["result"][0]['PAGE_URL']);
                        $('#strFB').val(jsonData["result"][0]['FACEBOOK_URL']);
                        $('#strinstagram').val(jsonData["result"][0]['INSTAGRAM_ID']);
                        $('#strLine').val(jsonData["result"][0]['LINE_ID']);
                    }


                });
            }


            $('#save').click(function () {


                var str = $("#strdistrict").val();
                var dist1 = str.substr(0, 2);
                $.post('../service/updateReceiver.php', {
                    cid: cid,
                    recvid:recvid,
                    recvName: $('#strfname').val(),
                    recvLname: $('#strlname').val(),
                    recvTexId: $('#strtexid').val(),
                    recvAddress: $('#straddress').val(),
                    recvSubDistrict: $('#strsubdistrict').val(),
                    recvDistrict: dist1,
                    recvDistrictDesc: $('#strdistrict option:selected').text(),
                    recvProvince: $('#strprovince').val(),
                    recvProvinceDesc: $('#strprovince option:selected').text(),
                    recvZipcode: $('#strzipcode').val(),
                    recvTel: $('#strtell').val(),
                    recvPhone: $('#strmobile').val(),
                    recvEmail: $('#stremail').val(),
                    recvRemark: $('#strnote').val(),
                    recvShopName: $('#strshopname').val(),
                    recvPID: $('#strpid').val(),
////////////////////// contact /////////////////////////


///////////////////// social///////////////////////////
                    FBUrl: $('#strFB').val(),
                    IGID: $('#strinstagram').val(),
                    lineId: $('#strLine').val(),
                    WechatId: $('#strwechat').val(),
                    WhatsAppId: $('#strwhatsapp').val(),
                    PageUrl: $('#strwebsite').val()
                }).done(function (data) {
                    var jsonData = JSON.parse(data);
                    alert(JSON.stringify(jsonData));
                    var statusRes = jsonData["status"];
                    var res = jsonData["result"];

                    if (statusRes == 1) {
                        if (res == "success") {
                            alert('บันทึกเรียบร้อย');
                            window.location = "./manage-cus.php";
                        }
                    }
                });
            });

        }

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


    });
</script>


<script>
    $(document).ready(function () {
        loadprt();
        loaddist();

        function loaddist() {
            $("#strdistrict").find('option').remove().end();
            $.post("../service/getDistrict.php").done(function (data) {
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
            $.post("../service/getProvince.php").done(function (data) {
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
