<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
$cid = $_REQUEST['cid'];
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
                font-weight: 700px;
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
                    <p style="float:right; font-size:18px; margin-right:30px;"> สวัสดี
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
                <div class="panel-group">
                    <div class="panel panel-default" style="margin-top:20px;">
                        <div class="panel-heading" style="height:53px; background-color:#00b1ba; width:auto;">
                            <label style="font-size:20px; ">รายการส่งสินค้า</label>
                        </div>
                        <!-- <div class="panel-body"> -->

                        <div class="panel panel-default">
                            <div class="panel-heading"><label>ส่วนที่ 1 ผู้ส่งสินค้า</label></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                      
                                        <button type="button" onclick="window.location='inventory.php'"
                                                class="btn btn-sm"
                                                style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                            ยกเลิก
                                        </button>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="">วันที่ทำรายการ</label>
                                                <div class="col-sm-3">
                                                    <input type="date" class="form-control" id="strTodo" placeholder=""
                                                           value="<?php echo date('Y-m-d'); ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="">ชื่อสถานประกอบการ</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="strShopNameShow"
                                                           placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="">ชื่อ-นามสกุล</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="strNameShow"
                                                           placeholder="">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="">ที่อยู่</label>
                                                <div class="col-sm-4">
                                                    <textarea class="form-control" rows="3" id="strAddressShop"
                                                              placeholder=""></textarea>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="">เลขที่เสียภาษีอากร</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="strTexidShop"
                                                           placeholder="">
                                                </div>
                                                <label class="col-sm-1" style="width:auto;" for="">เลขที่ประชาชน</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="stricShop"
                                                           placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="">โทร</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="strPhone"
                                                           placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="">E-mail</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="strEmail"
                                                           placeholder="">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                            <label class="control-label col-sm-3" for="">DO date</label>
                                            <div class="col-sm-2">
                                            <input type="date" class="form-control" id="strDo" placeholder="">
                                          </div>
                                          <label class="col-sm-1" for="">PO date</label>
                                          <div class="col-sm-2">
                                          <input type="date" class="form-control" id="strPo" placeholder="">
                                        </div>
                                      </div> -->
                                            <!-- <div class="form-group">

                                            </div> -->
                                            <!-- <div class="form-group">
                                              <label class="control-label col-sm-3" for="">รายละเอียด</label>
                                              <div class="col-sm-6">
                                                <textarea class="form-control" rows="3" id="strRemark"></textarea>
                                              </div>
                                            </div> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- ผู้รับสินค้า -->
                            <div class="panel-heading"><label>ส่วนที่ 2 ผู้รับสินค้า</label></div>
                            <div class="panel-body">
                                <div class="col-lg-11">

                                    <form class="form-horizontal" role="form">
                                        <table class="table">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <i class="fa fa-search-plus fa-2x" data-toggle="modal"
                                                       data-target="#myModal-search-contact" aria-hidden="true"
                                                       id="searchRecv"></i>
                                                </td>
                                                <td>
                                                    <a class="fa fa-user-plus fa-2x"
                                                       data-toggle="modal" data-target="#myModal-add-contact"
                                                       aria-hidden="true" id="clearDataX"></a>
                                                </td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                        </table>
                                    </form>
                                    <div id="fShow">
                                        <form class="form-horizontal" role="form">


                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="">ชื่อร้านค้า</label>
                                                <inputt type="hidden" id="recvidX">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="strshopname"
                                                               placeholder="">
                                                    </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="">ชื่อ</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="strFname"
                                                           placeholder="">
                                                </div>
                                                <label class=" col-sm-2" for="">นามสกุล</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="strlname"
                                                           placeholder="">
                                                </div>

                                                <!--                                        <i class="fa fa-user-plus fa-2x" aria-hidden="true"></i>-->

                                            </div>
                                            <div class="form-group">

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="">ที่อยู่</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="straddress1"
                                                           placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="">ตำบล:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="strsubdistrict"
                                                           placeholder="">
                                                </div>
                                                <label class="col-sm-2" for="">อำเภอ:</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control selectpicker show-tick"
                                                            id="strdistrict">
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="">จังหวัด:</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control selectpicker show-tick"
                                                            id="strprovince">

                                                    </select>
                                                </div>
                                                <label class="col-sm-2" for="">รหัสไปรษณีย์</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="strzipcode"
                                                           placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="">เลขที่ภาษีอากร</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="strtexid"
                                                           placeholder="">
                                                </div>
                                                <label class=" col-sm-2" for="">เลขที่บัตรประชาชน</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="strpid" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="">โทรศัพท์</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="strtell" placeholder="">
                                                </div>
                                                <label class="col-sm-2" for="">มือถือ</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="strmobile"
                                                           placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label  col-sm-3" for="">e-mail</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="stremail"
                                                           placeholder="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-heading"><label> ส่วนที่ 3 เลือกสินค้า </label></div>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="table" style="margin-top:10px;" id="table">
                                            <tr>
                                                <td>
                                                    <i class="fa fa-search-plus" data-toggle="modal" id="searchItem"
                                                       data-target="#myModal"></i>
                                                </td>
                                                <td>
                                                    <label> รหัสชื่อสินค้า: </label>
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
                                                <td>
                                                    <button class="btn btn-default btn-add" id="addRow">+</button>

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
                                                <th id="name"><label>#</label></th>
                                                <th><label>รหัสสินค้า</label></th>
                                                <th><label>ชื่อสินค้า</label></th>
                                                <th><label>รายละเอียดสินค้า</label></th>
                                                <th><label>จำนวน</label></th>
                                                <th><label>หน่วย</label></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <div id="payment">
                                            <table class="table" style="margin-top:100px;" id="table">
                                                <tr>

                                                    <td>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for=""
                                                                   style="font-size">กรุณาเลือกช่องทางการจัดส่งสินค้า</label>
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
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var pri = "<?php echo userTypeCode ?>";
        $('#fShow').hide();
        if (pri == 11) {
            $('#payment').show();
        } else {
            $('#payment').hide();
        }
//        $('#strShopNameShow').prop('disabled',true);
//        $('#strNameShow').prop('disabled',true);
//        $('#strAddressShop').prop('disabled',true);
//        $('#strTexidShop').prop('disabled',true);
//        $('#stricShop').prop('disabled',true);
//        $('#strPhone').prop('disabled',true);
//        $('#strEmail').prop('disabled',true);

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
            var table = $('#example').DataTable();
//            var cid = "<?php //echo $cid;?>//";
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
                            SO_DODATE: '',
                            SO_PODATE: '',
                            SO_TRANTRIPDATE: '',
                            RECVID: recvid,
                            SO_SHIPMENT_METHOD: '',
                            SO_SHIPMENT_TRACKING: '',
                            SO_REF: '',
                            SO_REMARK: '',
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
                                    window.location = "inventory.php?cid=" + cid + "#tab2default";
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


    });

</script>
<script>
    $(document).ready(function () {
        loadprt();
        loaddist();
        loadCidData();
        function loadCidData() {
            var cid = '<?php echo $cid?>';
//            alert(cid);
            $.post("../../service/getDataCustomer.php", {cid: cid}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var data1 = jsonData["data1"];
                var data2 = jsonData["data2"];
//                alert(JSON.stringify(data2[0]))
//                alert(data2[0]['CUST_ADDRESS']);
                var CUST_COMPUTE_NAME = '';
                var CUST_SHOPNAME = '';
                var CUST_TYPE_CODE = data1[0]["CUST_TYPE_CODE"];
                if(data1[0]["CUST_COMPUTE_NAME"]!=''){
                    CUST_COMPUTE_NAME = data1[0]["CUST_COMPUTE_NAME"];
                }
                if(data1[0]["CUST_SHOPNAME"]!=''){
                    CUST_SHOPNAME = data1[0]["CUST_SHOPNAME"];
                }
//                alert(CUST_TYPE_CODE);


                $('#strShopNameShow').val(CUST_SHOPNAME).prop('disabled',true);
                $('#strNameShow').val(CUST_COMPUTE_NAME).prop('disabled',true);


                var TEL = data1[0]["CUST_TEL"];
                var PHONE = data1[0]["CUST_PHONE"];
                var EMAIL = data1[0]["CUST_EMAIL"];
                var TEXID = '';
//                alert(data1[0]["CUST_TEXID"])
                if(data1[0]["CUST_TEXID"]!=''){
                    TEXID =data1[0]["CUST_TEXID"];
                }
                var pid = data1[0]["CUST_PID"];
                var option2 = '';
                var address2 = '';


                if (CUST_TYPE_CODE ==1 ) {
//                    option2 = CUST_SHOPNAME ;
//          address2 = address2 + option2 + '<br>';
                    if (data2[0]["CUST_ADDRESS"] != '') {
                        address2 = address2 + 'ที่่อยู่  ' + data2[0]["CUST_ADDRESS"] + ' ';
                    }
                    if (data2[0]["CUST_SUBDISTRICT"] != '') {
                        address2 = address2 + 'ตำบล ' + data2[0]["CUST_SUBDISTRICT"] + ' ';
                    }
                    if (data2[0]["CUST_DISTRICT_DESC"] != '') {
                        address2 = address2 + 'อำเภอ ' + data2[0]["CUST_DISTRICT_DESC"] + ' ';
                    }
                    if (data2[0]["CUST_PROVINCE_DESC"] != '') {
                        address2 = address2 + 'จังหวัด ' + data2[0]["CUST_PROVINCE_DESC"] + ' ';
                    }
                    if (data2[0]["CUST_ZIPCODE"] != '') {
                        address2 = address2 + 'รหัสไปรษณีย์  ' + data2[0]["CUST_ZIPCODE"] + ' ';
                    }
                } else {
//                    option2 = CUST_COMPUTE_NAME;
//          address2 = address2 + option2 + '<br>';
                    if (data1[0]["CUST_ADDRESS"] != '') {
                        address2 = address2 + 'ที่่อยู่  ' + data1[0]["CUST_ADDRESS"] + ' ';
                    }
                    if (data1[0]["CUST_SUBDISTRICT"] != '') {
                        address2 = address2 + 'ตำบล ' + data1[0]["CUST_SUBDISTRICT"] + ' ';
                    }
                    if (data1[0]["CUST_DISTRICT_DESC"] != '') {
                        address2 = address2 + 'อำเภอ ' + data1[0]["CUST_DISTRICT_DESC"] + ' ';
                    }
                    if (data1[0]["CUST_PROVINCE_DESC"] != '') {
                        address2 = address2 + 'จังหวัด ' + data1[0]["CUST_PROVINCE_DESC"] + ' ';
                    }
                    if (data1[0]["CUST_ZIPCODE"] != '') {
                        address2 = address2 + 'รหัสไปรษณีย์  ' + data1[0]["CUST_ZIPCODE"] + ' ';
                    }
                }
//                alert(address2);
                var xxx ='';
                if(TEL==''&& PHONE!=''){
                    xxx= PHONE;
                }else if(TEL!=''&& PHONE==''){
                    xxx= TEL;
                }else{
                    xxx=TEL;
                }
//                alert(CUST_SHOPNAME);



//
//
                $('#strAddressShop').val(address2).prop('disabled',true);
                $('#strTexidShop').val(TEXID).prop('disabled',true);
                $('#stricShop').val(pid).prop('disabled',true);
                $('#strPhone').val(xxx).prop('disabled',true);
                $('#strEmail').val(EMAIL).prop('disabled',true);

            });
        }
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
                //                alert(JSON.stringify(jsonData));
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
                //                    alert(JSON.stringify(jsonData));
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
                    $('#tb').append(append);
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
        background-color: #00b1ba !important;

    }
</style>
<!-- Modal -->
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
                    <tbody id="tb">
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
