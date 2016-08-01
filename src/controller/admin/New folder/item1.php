<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}
$cid = $_REQUEST['cid'];
$itemId = $_REQUEST['itemid'];
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
                            <a href="inventory.php?cid=<?php echo $cid; ?>"
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

                                            </select>

                                        </div>
                                        <label class="col-sm-2" for="">แจ้งเตือนเมื่อสินค้าถึงจำนวน</label>
                                        <div class="col-sm-1">
                                            <input type="number" min="0" class="form-control" id="strmin" value="0"
                                                   placeholder="">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="">จำนวน</label>
                                        <div class="col-sm-2">
                                            <input type="number" min="1" class="form-control" id="stramount" value="0"
                                                   placeholder="">
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
                                            <input type="number" min="1" class="form-control" id="strvol" value="0"
                                                   placeholder="">
                                        </div>
                                        <label class="col-sm-1" for="">หน่วยปริมาตร</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="strvolunit" placeholder="">
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
                                            <select class="form-control" id="strwarehouse">


                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="">โลเคชั่น</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="strlocation">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <input type="button" class="btn btn-info"
                                                   onclick="window.location='inventory.php?cid=<?php echo $cid; ?>'"
                                                   id="cancel" value="ยกเลิก">
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

        <div>
            <input type="hidden" id="strsku_t">
            <input type="hidden" id="strnameproduct_t">
            <input type="hidden" id="strbarcode_t">
            <input type="hidden" id="strtypeproduct_t">
            <input type="hidden" id="strmin_t">
            <input type="hidden" id="stramount_t">
            <input type="hidden" id="strunit_t">
            <input type="hidden" id="strnote_t">
            <input type="hidden" id="strbrand_t">
            <input type="hidden" id="strseries_t">
            <input type="hidden" id="strcolor_t">
            <input type="hidden" id="strsize_t">
            <input type="hidden" id="strvol_t">
            <input type="hidden" id="strvolunit_t">
            <input type="hidden" id="strMFD_t">
            <input type="hidden" id=strEXP_t">
            <input type="hidden" id="strwarehouse_t">
            <input type="hidden" id="strlocation_t">
        </div>

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
                          <button type="button" class="btn btn-default" disabled="disabled"
                                  id="fake-file-button-upload">
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
        var lg = "<?php echo loginUserName;?>";
        var cid = "<?php echo $cid;?>";
        var itemId = "<?php echo $itemId;?>";

        if (itemId != '') {
//            alert('dddd');
            loadDataItemById(itemId)
        }

        function loadDataItemById(GOODS_ID) {
            $.post('../../service/getDataItemById.php', {CID: cid, GOODS_ID: GOODS_ID}).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
//                alert(jsonData['data12'][0]['GOODS_SIZE']);
                $('#strsku').val(jsonData['data1'][0]['GOODS_SKU']);
                $('#strnameproduct').val(jsonData['data1'][0]['GOODS_NAME']);
                $('#strbarcode').val(jsonData['data1'][0]['GOODS_BARCODE']);
                $('#strtypeproduct').val(jsonData['data1'][0]['GOODS_TYPE']);
                $('#strmin').val(jsonData['data1'][0]['GOODS_MIN']);
                $('#stramount').val(jsonData['data1'][0]['GOODS_QTY']);
                $('#strunit').val(jsonData['data1'][0]['GOODS_QTY_UNIT']);
                $('#strnote').val(jsonData['data1'][0]['GOODS_REMARK']);
                $('#strbrand').val(jsonData['data2'][0]['GOODS_BRAND']);
                $('#strseries').val(jsonData['data2'][0]['GOODS_SERIES']);
                $('#strcolor').val(jsonData['data2'][0]['GOODS_COLOR']);
                $('#strsize').val(jsonData['data2'][0]['GOODS_SIZE']);
                $('#strvol').val(parseFloat(jsonData['data2'][0]['GOODS_VOL']));
                $('#strvolunit').val(jsonData['data2'][0]['GOODS_VOL_UNIT']);
                $('#strMFD').val(jsonData['data2'][0]['GOODS_PRODUCTION_DATE']);
                $('#strEXP').val(jsonData['data2'][0]['GOODS_EXPIRED_DATE']);
                $('#strwarehouse').val(jsonData['data3'][0]['WH_ID']);
                $('#strlocation').val(jsonData['data3'][0]['LOCATION_ID']);

                $('#strsku_t').val(jsonData['data1'][0]['GOODS_SKU']);
                $('#strnameproduct_t').val(jsonData['data1'][0]['GOODS_NAME']);
                $('#strbarcode_t').val(jsonData['data1'][0]['GOODS_BARCODE']);
                $('#strtypeproduct_t').val(jsonData['data1'][0]['GOODS_TYPE']);
                $('#strmin_t').val(jsonData['data1'][0]['GOODS_MIN']);
                $('#stramount_t').val(jsonData['data1'][0]['GOODS_QTY']);
                $('#strunit_t').val(jsonData['data1'][0]['GOODS_QTY_UNIT']);
                $('#strnote_t').val(jsonData['data1'][0]['GOODS_REMARK']);
                $('#strbrand_t').val(jsonData['data2'][0]['GOODS_BRAND']);
                $('#strseries_t').val(jsonData['data2'][0]['GOODS_SERIES']);
                $('#strcolor_t').val(jsonData['data2'][0]['GOODS_COLOR']);
                $('#strsize_t').val(jsonData['data2'][0]['GOODS_SIZE']);
                $('#strvol_t').val(parseFloat(jsonData['data2'][0]['GOODS_VOL']));
                $('#strvolunit_t').val(jsonData['data2'][0]['GOODS_VOL_UNIT']);
                $('#strMFD_t').val(jsonData['data2'][0]['GOODS_PRODUCTION_DATE']);
                $('#strEXP_t').val(jsonData['data2'][0]['GOODS_EXPIRED_DATE']);
                $('#strwarehouse_t').val(jsonData['data3'][0]['WH_ID']);
                $('#strlocation_t').val(jsonData['data3'][0]['LOCATION_ID']);

            });
        }


        $('#save').click(function () {
            if (itemId == '') {
                $.post('../../service/getCheckGoodsInStore.php', {
                    CID: cid,
                    GOODS_SKU: $('#strsku').val(),
                    GOODS_NAME: $('#strnameproduct').val(),
                    GOODS_DESC: '',
                    GOODS_TYPE: $('#strtypeproduct').val(),
                    GOODS_QTY: $('#stramount').val(),
                    GOODS_QTY_UNIT: $('#strunit').val(),
                    GOODS_STATUS: 1,
                    GOODS_REMARK: $('#strnote').val(),
                    GOODS_MIN: $('#strmin').val(),
                    GOODS_TEMP: $('#stramount').val(),
                    GOODS_BARCODE: $('#strbarcode').val(),
                    GOODS_PIC_URL: '',

////////////////s detail /////////////////////
                    GOODS_BRAND: $('#strbrand').val(),
                    GOODS_SERIES: $('#strseries').val(),
                    GOODS_COLOR: $('#strcolor').val(),
                    GOODS_SIZE: $('#strsize').val(),
                    GOODS_VOL: $('#strvol').val(),
                    GOODS_VOL_UNIT: $('#strvolunit').val(),
                    GOODS_PRODUCTION_DATE: $('#strMFD').val(),
                    GOODS_EXPIRED_DATE: $('#strEXP').val(),
                    GOODS_PRICE: 0,
                }).done(function (data) {
                    var jsonData = JSON.parse(data);
//                    alert(JSON.stringify(jsonData));
                    var statusRes = jsonData["status"];
                    var res = jsonData["result"];
                    var res2 = jsonData["result2"];
//                    alert(res2);
                    if (statusRes == 1) {
                        if (res != 0) {
                            updateItemQty(res2);

//                            alert(res2);
                        } else {
                            insertData();
//                            alert(res);
                        }
//                        alert(res);
                    }

                });
            } else {
//                alert('update');
                updataData(itemId);
            }
//
        });

        function insertData() {
            $.post('../../service/insertGoodsInCome.php', {
                CID: cid,
                GOODS_SKU: $('#strsku').val(),
                GOODS_NAME: $('#strnameproduct').val(),
                GOODS_DESC: '',
                GOODS_TYPE: $('#strtypeproduct').val(),
                GOODS_QTY: $('#stramount').val(),
                GOODS_QTY_UNIT: $('#strunit').val(),
                GOODS_STATUS: 1,
                GOODS_REMARK: $('#strnote').val(),
                GOODS_MIN: $('#strmin').val(),
                GOODS_TEMP: $('#stramount').val(),
                GOODS_BARCODE: $('#strbarcode').val(),
                GOODS_PIC_URL: '',

////////////////s detail /////////////////////
                GOODS_BRAND: $('#strbrand').val(),
                GOODS_SERIES: $('#strseries').val(),
                GOODS_COLOR: $('#strcolor').val(),
                GOODS_SIZE: $('#strsize').val(),
                GOODS_VOL: $('#strvol').val(),
                GOODS_VOL_UNIT: $('#strvolunit').val(),
                GOODS_PRODUCTION_DATE: $('#strMFD').val(),
                GOODS_EXPIRED_DATE: $('#strEXP').val(),
                GOODS_PRICE: 0,


//////////////////s location //////////////
                WH_ID: $('#strwarehouse').val(),
                LOCATION_ID: $('#strlocation').val(),
////// ohter
                loginid: lg


            }).done(function (data) {
                var jsonData = JSON.parse(data);
//                                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];

                if (statusRes == 1) {
                    if (res == "success") {
                        alert('บันทึกเรียบร้อย');
                        window.location = "./inventory.php?cid=" + cid;
                    }
                }

            });
        }

        function updateItemQty(GOODS_ID) {
            $.post('../../service/updateQtyIncome.php', {
                CID: cid,
                GOODS_ID: GOODS_ID,
                GOODS_SKU: $('#strsku').val(),
                GOODS_NAME: $('#strnameproduct').val(),
                GOODS_DESC: '',
                GOODS_TYPE: $('#strtypeproduct').val(),
                GOODS_QTY: $('#stramount').val(),
                GOODS_QTY_UNIT: $('#strunit').val(),
                GOODS_STATUS: 1,
                GOODS_REMARK: $('#strnote').val(),
                GOODS_MIN: $('#strmin').val(),
                GOODS_TEMP: $('#stramount').val(),
                GOODS_BARCODE: $('#strbarcode').val(),
                GOODS_PIC_URL: '',

////////////////s detail /////////////////////
                GOODS_BRAND: $('#strbrand').val(),
                GOODS_SERIES: $('#strseries').val(),
                GOODS_COLOR: $('#strcolor').val(),
                GOODS_SIZE: $('#strsize').val(),
                GOODS_VOL: $('#strvol').val(),
                GOODS_VOL_UNIT: $('#strvolunit').val(),
                GOODS_PRODUCTION_DATE: $('#strMFD').val(),
                GOODS_EXPIRED_DATE: $('#strEXP').val(),
                GOODS_PRICE: 0,


//////////////////s location //////////////
                WH_ID: $('#strwarehouse').val(),
                LOCATION_ID: $('#strlocation').val(),
////// ohter
                loginid: lg


            }).done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];

                if (statusRes == 1) {
                    if (res == "success") {
                        alert('บันทึกเรียบร้อย');
                        window.location = "./inventory.php?cid=" + cid;
                    }
                }

            });
        }

        function updataData(GOODS_ID) {
            $.post('../../service/updateDataItem.php', {
                CID: cid,
                GOODS_ID: GOODS_ID,
                GOODS_SKU: $('#strsku').val(),
                GOODS_NAME: $('#strnameproduct').val(),
                GOODS_DESC: '',
                GOODS_TYPE: $('#strtypeproduct').val(),
                GOODS_QTY: $('#stramount').val(),
                GOODS_QTY_UNIT: $('#strunit').val(),
                GOODS_STATUS: 1,
                GOODS_REMARK: $('#strnote').val(),
                GOODS_MIN: $('#strmin').val(),
                GOODS_TEMP: $('#stramount').val(),
                GOODS_BARCODE: $('#strbarcode').val(),
                GOODS_PIC_URL: '',

////////////////s detail /////////////////////
                GOODS_BRAND: $('#strbrand').val(),
                GOODS_SERIES: $('#strseries').val(),
                GOODS_COLOR: $('#strcolor').val(),
                GOODS_SIZE: $('#strsize').val(),
                GOODS_VOL: $('#strvol').val(),
                GOODS_VOL_UNIT: $('#strvolunit').val(),
                GOODS_PRODUCTION_DATE: $('#strMFD').val(),
                GOODS_EXPIRED_DATE: $('#strEXP').val(),
                GOODS_PRICE: 0,


//////////////////s location //////////////
                WH_ID: $('#strwarehouse').val(),
                LOCATION_ID: $('#strlocation').val(),
////// ohter
                loginid: lg,

                GOODS_SKU_T: $('#strsku_t').val(),
                GOODS_NAME_T: $('#strnameproduct_t').val(),
//$GOODS_DESC_T = $_REQUEST['GOODS_DESC_T:    ,
                GOODS_TYPE_T: $('#strtypeproduct_t').val(),
                GOODS_QTY_T: $('#stramount_t').val(),
                GOODS_QTY_UNIT_T: $('#strunit_t').val(),
//$GOODS_STATUS = $_REQUEST['GOODS_STATUS:    ,
                GOODS_REMARK_T: $('#strnote_t').val(),
                GOODS_MIN_T: $('#strmin_t').val(),
//$GOODS_TEMP = $_REQUEST['GOODS_TEMP:    ,
                GOODS_BARCODE_T: $('#strbarcode_t').val(),
                GOODS_PIC_URL_T: '',
////
////////////////////s detail /////////////////////
                GOODS_BRAND_T: $('#strbrand_t').val(),
                GOODS_SERIES_T: $('#strseries_t').val(),
                GOODS_COLOR_T: $('#strcolor_t').val(),
                GOODS_SIZE_T: $('#strsize_t').val(),
                GOODS_VOL_T: $('#strvol_t').val(),
                GOODS_VOL_UNIT_T: $('#strvolunit_t').val(),
//                GOODS_PRODUCTION_DATE_T: $('#strMFD_t').val(),
//                GOODS_EXPIRED_DATE_T: $('#strEXP_t').val(),
//                GOODS_PRICE_T: 0,
////
////
//////////////////////s location //////////////
                WH_ID_T: $('#strwarehouse_t').val(),
                LOCATION_ID_T: $('#strlocation_t').val()


            }).done(function (data) {
                var jsonData = JSON.parse(data);
                                alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var res = jsonData["result"];

                if (statusRes == 1) {
                    if (res == "success") {
                        alert('บันทึกเรียบร้อย');
                        window.location = "./inventory.php?cid=" + cid;
                    }
                }

            });
        }

    })
    ;

</script>
<script>
    $(document).ready(function () {

        loadWh();

        loadGoodsType();
        loadLocation($("#strwarehouse").val());
        $("#strwarehouse").change(function () {
            loadLocation($(this).val());
        });
        var delay = 500; //1 second
        setTimeout(function () {
            //your code to be executed after 1 second
            loadLocation($("#strwarehouse").val());
        }, delay);
        ////// load date '//////////////
        function loadWh() {
            $("#strwarehouse").find('option').remove().end();


            $.post('../../service/getAllWH.php').done(function (data) {
                var jsonData = JSON.parse(data);
//                    alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var datalength = jsonData["result"].length;
                    for (var i = 0; i < datalength; i++) {
                        appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["WH_ID"] + ">" + jsonData["result"][i]["WH_NAME"] + "</option>"
                    }
                    $("#strwarehouse").append(appendTxt);
                }
            });
        }

        function loadLocation(whId) {
            $("#strlocation").find('option').remove().end();


            $.post('../../service/getComboLocation.php', {whId: whId}).done(function (data) {
                var jsonData = JSON.parse(data);
//                    alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    if (jsonData["result"] != '') {
                        var datalength = jsonData["result"].length;
                        for (var i = 0; i < datalength; i++) {
                            appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["LOCATION_ID"] + ">" + jsonData["result"][i]["LOCATION_DESC"] + "</option>"
                        }

                    } else {
                        appendTxt = appendTxt + "<option value='0'>" + "ไม่พบ location" + "</option>";
                    }
                    $("#strlocation").append(appendTxt);
                }
            });
        }

        function loadGoodsType() {
            $("#strcategory").find('option').remove().end();
            $("#strtypeproduct").find('option').remove().end();


            $.post('../../service/getAllGoodsType.php').done(function (data) {
                var jsonData = JSON.parse(data);
//                    alert(JSON.stringify(jsonData));
                var statusRes = jsonData["status"];
                var appendTxt = "";
                if (statusRes == 1) {
                    var datalength = jsonData["result"].length;
                    for (var i = 0; i < datalength; i++) {
                        appendTxt = appendTxt + "<option value=" + jsonData["result"][i]["GOODS_TYPE_ID"] + ">" + jsonData["result"][i]["GOODS_TYPE_DESC"] + "</option>"
                    }
                    $("#strcategory").append(appendTxt);
                    $("#strtypeproduct").append(appendTxt);
                }
            });
        }

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
