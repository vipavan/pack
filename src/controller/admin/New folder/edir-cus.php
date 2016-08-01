<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
$cid=$_REQUEST['cid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>add cus</title>
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

    <!--    <link rel="stylesheet" type="text/css" href="../../../lib/DataTables-1.10.12/media/css/jquery.dataTables.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="../../../lib/DataTables-1.10.12/examples/resources/syntax/shCore.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="../../../lib/DataTables-1.10.12/examples/resources/demo.css">-->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css ">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css ">
    <!--    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js">-->
    <!--    </script>-->
    <!--    <script type="text/javascript" language="javascript" src="../../../lib/DataTables-1.10.12/media/js/jquery.dataTables.js">-->
    <!--    </script>-->
    <!--    <script type="text/javascript" language="javascript"-->
    <!--            src="../../../lib/DataTables-1.10.12/examples/resources/syntax/shCore.js">-->
    <!--    </script>-->
    <!--    <script type="text/javascript" language="javascript" src="../../../lib/DataTables-1.10.12/examples/resources/demo.js"></script>-->
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js "></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js "></script>
    <script type="text/javascript" language="javascript"
            src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js "></script>

    <script>
        $(window).load(function () {
            $().UItoTop({easingType: 'easeOutQuart'});
            $('#stuck_container').tmStickUp({});
        });
    </script>

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

            .sf-menu > li.sfHover > a, .sf-menu > li.current > a, .sf-menu > li > a:hover {
                color: #7f5373;
            }
        </style>
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li class="current"><a href="add-cus.php">จัดการข้อมูลลูกค้า</a></li>
                                <li><a href="manage-product.php">จัดการสินค้า</a></li>
                                <li><a href="">รายงาน</a></li>
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

    .btn-default {
        color: white !important;
        float: left !important;
        margin-left: 31%;
    }

    td {
        vertical-align: middle;
    }

    .table tbody tr:hover td, .table tbody tr:hover th {
        background-color: pink;
    }

</style>

<!--<script type="text/javascript" src="assets/js/jquery-latest.js"></script>-->
<!--<script type="text/javascript" src="assets/js/jquery.tablesorter.min.js"></script>-->
<!--<link rel="stylesheet" href="assets/css/jquery.dataTables.min">-->
<script type="text/javascript">
    $(document).ready(function () {
//        $('#example').table({
//            columnDefs: [{
//                targets: [0],
//                orderData: [0, 1]
//            }, {
//                targets: [1],
//                orderData: [1, 0]
//            }, {
//                targets: [4],
//                orderData: [4, 0]
//            }]
//        });
    });
</script>

<section id="content" style="background-image:url(../../../assets/images/login-bg.png)">
    <!-- <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div> -->
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="height:83px;background-image:url(../../../assets/images/head-panel-bg1.png)">
     <!-- <a href="add-cus.php" style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-arrow-left fa-lg" aria-hidden="true"></i> กลับ</a> -->
                  <h1  style="text-align: center"><label> แก้ไขข้อมูลลูกค้า</label></h1>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" style="margin-left:50px; margin-top:20px;">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">รหัสลูกค้า</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="strcidEdit" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">Package</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="strpackageEdit">
                                        <option>Smart</option>
                                        <option>Silver</option>
                                        <option>Gold</option>
                                    </select>
                                </div>
                                <label class="col-sm-1" for="">ชื่อร้านค้า</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="strnameEdit" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">ชื่อ</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="strfnameEdit" placeholder="">
                                </div>
                                <label class=" col-sm-1" for="">นามสกุล</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="strlnameEdit" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">ที่อยู่</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="3" id="straddressEdit"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">อำเภอ:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="strdistrictEdit">
                                        <option>หนองจอก</option>
                                        <option>มีนบุรี</option>
                                        <option>ลาดกระบัง</option>
                                        <option>บางกะปิ</option>
                                    </select>
                                </div>
                                <label class="col-sm-1" for="">จังหวัด:</label>
                                <div class="col-sm-3">
                                    <select class="form-control selectpicker show-tick" id="strprovinceEdit">
                                        <option>กรุงเทพมหานคร</option>
                                        <option>กระบี่</option>
                                        <option>กาญจนบุรี</option>
                                        <option>ขอนแก่น</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">รหัสไปรษณีย์</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="strzipcodeEdit" placeholder="">
                                </div>
                                <label class="control-label  col-sm-2" for="">เลขที่เสียภาษีอากร</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="strtexidEdit" placeholder="" maxlength="13">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">โทร</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="strtellEdit" placeholder="" maxlength="10">
                                </div>
                                <label class="control-label col-sm-1" for="">มือถือ</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="strmobileEdit" placeholder="" maxlength="10">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="">e-mail</label>
                              <div class="col-sm-7">
                                  <input type="email" class="form-control" id="stremailEdit" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="">Facebook</label>
                              <div class="col-sm-3">
                                  <input type="text" class="form-control" id="strFBEdit" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="">Twitter</label>
                              <div class="col-sm-3">
                                  <input type="text" class="form-control" id="strTwitterEdit" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="">Line</label>
                              <div class="col-sm-3">
                                  <input type="text" class="form-control" id="strLineEdit" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="">หมายเหตุ</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="3" id="strnoteEdit"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-4">
                                  <button type="button" id="cancel" class="btn btn-info" onclick="window.location='add-cus.php'" >ยกเลิก</button>
                                    <button type="button" id="saveEdit" class="btn btn-info">ยืนยัน</button>

                                </div>
                                <div class="col-sm-3">


                                </div>
                            </div>

                        </form>

                    </div>

                    <div class="panel-footer" style="height:83px;background-image:url(../../../assets/images/head-panel-bg1.png)"></div>




                </div>
            </div>
    </div>


</section>


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->


<script>
    $(document).ready(function () {
        $('#saveEdit').click(function () {
            var packages = $('#strpackageEdit').val();
            var cid = $('#strcidEdit').val();
            var custShopName = $('#strnameEdit').val();
            var custName = $('#strfnameEdit').val();
            var custLastName = $('#strlnameEdit').val();
            var custAddress = $('#straddressEdit').val();
            var str = $("#strdistrictEdit").val();
            var custDistrict = str.substr(0, 2);
            var custProvince = $('#strprovinceEdit').val();
            var custZipcode = $('#strzipcodeEdit').val();
            var custTelContact = $('#strtellEdit').val();
            var custMobile = $('#strmobileEdit').val();
            var custEmailContact = $('#stremailEdit').val();
            var custDesc = $('#strnoteEdit').val();
            var custTypeCode = "";
            var FBUrl = $('#strFBEdit').val();;
            var TWUrl = $('#strTwitterEdit').val();;
            var lineId = $('#strLineEdit').val();;
            var custTexId = $('#strtexidEdit').val();;
            alert(cid);
            $.post('../../service/updateCustomer.php', {
                cid: cid,
                custName: custName,
                custLastName: custLastName,
                custDesc: custDesc,
                custAddress: custAddress,
                custDistrict: custDistrict,
                custProvince: custProvince,
                custZipcode: custZipcode,
                custTelContact: custTelContact,
                custEmailContact: custEmailContact,
                custTypeCode: custTypeCode,
                custShopName: custShopName,
                FBUrl: FBUrl,
                TWUrl: TWUrl,
                lineId: lineId,
                custTexId: custTexId,
                custMobile: custMobile
            }).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];

                if (statusRes == 1) {
                    if (res == "success") {
                        alert('บันทึกเรียบร้อย');
                        window.location = "./add-cus.php";
                    }
                }
            });

        });
        $("#strdistrictEdit").change(function () {
            var str = $("#strdistrictEdit").val();
            var selectPro = str.substr(2, 2);
            $("#strprovinceEdit").val(selectPro);

        });

        $("#strprovinceEdit").change(function () {
            var str = $("#strprovinceEdit").val();
            var selectDist = '01' + str;
            $("#strdistrictEdit").val(selectDist);
        });

        function clearForm() {
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
    });
</script>

<script>
    $(document).ready(function () {
        $('#saveUsername').click(function () {
            var username = $('#strusername').val();
            var pass = $('#strpass').val();
            var confpass = $('#strconfpass').val();

            alert(username);
            alert(pass);
            alert(confpass);
        });
    });
</script>

<script>
    $(document).ready(function () {

        var cid = "<?php echo $cid;?>";
//        alert(cid);
        loadprt();
        loaddist();
        var delay=1000; //1 second

        setTimeout(function() {
            //your code to be executed after 1 second
            loadDataCust(cid);
        }, delay);

        function loaddist() {
            $("#strdistrictEdit").find('option').remove().end();
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
                    $("#strdistrictEdit").append(appendTxt);
                }


            });
        }

        function loadprt() {
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
                    $("#strprovinceEdit").append(appendTxt);
                }


            });
        }

        function loadDataCust(cid){
            $.post("../../service/getDataCustomer.php",{cid:cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var dis = jsonData["result"][0]['CUST_DISTRICT']+jsonData["result"][0]['CUST_PROVINCE'];
                    $('#strcidEdit').val(jsonData["result"][0]['CID']);
                    $('#strnameEdit').val(jsonData["result"][0]['CUST_SHOPNAME']);
                    $('#strfnameEdit').val(jsonData["result"][0]['CUST_NAME']);
                    $('#strlnameEdit').val(jsonData["result"][0]['CUST_LASTNAME']);
                    $('#straddressEdit').val(jsonData["result"][0]['CUST_ADDRESS']);
                    $('#strdistrictEdit').val(dis);
                    $('#strprovinceEdit').val(jsonData["result"][0]['CUST_PROVINCE']);
                    $('#strzipcodeEdit').val(jsonData["result"][0]['CUST_ZIPCODE']);
                    $('#strtellEdit').val(jsonData["result"][0]['CUST_TEL_CONTACT']);
                    $('#strmobileEdit').val(jsonData["result"][0]['CUST_MOBILE_CONTACT']);
                    $('#stremailEdit').val(jsonData["result"][0]['CUST_EMAIL_CONTACT']);
                    $('#strnoteEdit').val(jsonData["result"][0]['CUST_DESC']);
                    $('#strtexidEdit').val(jsonData["result"][0]['CUST_TEXID']);
                    $('#strFBEdit').val(jsonData["result"][0]['FACEBOOK_URL']);
                    $('#strTwitterEdit').val(jsonData["result"][0]['TWITTER_URL']);
                    $('#strLineEdit').val(jsonData["result"][0]['LINE_ID']);
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
