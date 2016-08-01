<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
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
    <!-- <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css "> -->
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
                margin-left: 21%;
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
        margin-left: 11%;
    }

    td {
        vertical-align: middle;
    }
</style>
<style>
    #search-inv {
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

    #search-inv:focus {
        width: 50%;
    }

    .btn-default {
        color: white !important;
        float: left !important;
        margin-left: 11%;
    }

    td {
        vertical-align: middle;
    }
</style>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="panel panel-default" style="margin-top:20px;">
                    <div class="panel-heading" style="height:53px;">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab1default" data-toggle="tab">แสดงรายการ Pick สินค้า</a></li>
                            <li><a href="#tab2default" data-toggle="tab">แสดงใบรายการจัดส่งสินค้า</a></li>
                            <!-- <li><a href="#tab3default" data-toggle="tab">รายงานสินค้าคงคลัง</a></li> -->
                        </ul>
                        <!-- <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;"><i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> กลับ</button> -->

                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                                <button type="button" class="btn btn-sm" onclick="window.location='manage-product.php'"
                                        style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ
                                </button>
                                <input type="button" id="detailX" class="btn btn-sm" data-toggle="modal"
                                       data-target="#myModal"
                                       style=" margin-bottom:10px; margin-left:10px; float:left;font-family: 'Athiti', sans-serif; font-weight:700px;"
                                       value="สร้างรายการ pick ">
                                <input type="text" id="search" class="light-table-filter form-control"
                                       data-table="order-table"
                                       name="search" placeholder="Search..">

                                <table class="table table-striped table-bordered order-table" id="example_pick">
                                    <thead>
                                    <tr style="text-align:center;">
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
                                    <tbody id="allpick">

                                    </tbody>
                                </table>
                                <!-- tab 1-->
                                <!-- </div> -->
                                <!-- Modal add pick tab1default-->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        id="xClose">&times;</button>
                                                <h2 class="modal-title"> รายการ SALE ORDER</h2>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <a href="#" class="btn btn-default" role="button"
                                                           id="createPick"
                                                           style="font-family: 'Athiti', sans-serif; font-weight:700px;margin-left:40%;">สร้างรายการ
                                                            pick</a>
                                                    </div>
                                                </div>
                                                <input type="text" class="light-table-filter form-control"
                                                       data-table="order-table" id="search"
                                                       name="search" placeholder="Search..">
                                                <br><br>
                                                <table class="table table-bordered order-table" id="example-cus"
                                                       style="margin-top:20px;" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th><input type="checkbox" id="checkAll"
                                                                   onchange="checkAll(this)" name="chk[]"
                                                                   value=""><label>เลือกทั้งหมด</label>
                                                        </th>
                                                        <th id="name"><label> รหัส SALE ORDER</label></th>
                                                        <th><label>วันที่ทำรายการ</label></th>
                                                        <th><label>ชื่อร้านค้า</label></th>
                                                        <th><label>จำนวนรวม(หน่วย)</label></th>
                                                        <!--                        <th><label>หน่วย</label></th>-->

                                                    </tr>
                                                    </thead>
                                                    <tbody id="tb">
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="col-lg-6">
                                                    <INPUT type="hidden" class="btn btn-info" data-dismiss="modal"
                                                           id="hidfenbtn"></INPUT>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal pick tab1default -->

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
                                <!-- start checkAll  -->
                                <script>
                                    function checkAll(ele) {
                                        var checkboxes = document.getElementsByTagName('input');
                                        if (ele.checked) {
                                            for (var i = 0; i < checkboxes.length; i++) {
                                                if (checkboxes[i].type == 'checkbox') {
                                                    checkboxes[i].checked = true;
                                                }
                                            }
                                        } else {
                                            for (var i = 0; i < checkboxes.length; i++) {
                                                console.log(i)
                                                if (checkboxes[i].type == 'checkbox') {
                                                    checkboxes[i].checked = false;
                                                }
                                            }
                                        }
                                    }
                                </script>
                                <script>
                                    $(document).ready(function () {
                                        loadMainTable();
                                        function loadMainTable() {
                                            $.post('../../service/getAllPick.php').done(function (data) {
                                                var jsonData = JSON.parse(data);
                                                //                alert(JSON.stringify(jsonData));
                                                var status = jsonData["status"];
                                                if (status == 1) {
                                                    var res = jsonData["result"];
                                                    var resL = res.length;
                                                    var i;
                                                    var append = "";

                                                    for (i = 0; i < resL; i++) {
                                                        //                       var CID = res[i]["CID"];
                                                        var PICKLOT_DOCCODE = res[i]["PICKLOT_DOCCODE"];
                                                        var PICKLOT_DOCDATE = res[i]["PICKLOT_DOCDATE"];
                                                        var CSO = res[i]["CSO"];
                                                        var SUMITEM = res[i]["SUMITEM"];
                                                        var PICKLOT_STATUS = res[i]["PICKLOT_STATUS"];
                                                        //                       var SUMITEM = res[i]["SUMITEM"];
                                                        //                        alert(JSON.stringify(SO_DOCDATE));
                                                        var str = PICKLOT_DOCDATE['date'];
                                                        var subMFD = str.substr(0, 10);
                                                        var fDate = subMFD.split("-");
                                                        var reStr = fDate[2] + '/' + fDate[1] + '/' + fDate[0];
                                                        //                        alert(subMFD);

                                                        var option = '';
                                                        if (PICKLOT_STATUS == 1) {
                                                            option = 'กำลังดำเนินการ';
                                                        } else {
                                                            option = 'สำเร็จ';
                                                        }
                                                        //                        alert(option);
                                                        //                        alert(foo);


                                                        append = append + "<tr>";
                                                        //                        append = append + "<td> </td>";
                                                        append = append + "<td class=\"pickKey\">" + PICKLOT_DOCCODE + "</td>";
                                                        append = append + "<td width='150' style=\"text-align:center;\" class=\"orderDate\">" + reStr + "</td>";
                                                        append = append + "<td width='100' style=\"text-align:center;\" class=\"orderBy\">" + CSO + "</td>";
                                                        append = append + "<td width='150' class=\"orderSum\">" + SUMITEM + "</td>";
                                                        append = append + "<td width='150' class=\"orderSum\">" + option + "</td>";
                                                        append = append + "<td align=\"center\">";
                                                        // append = append + "<button type=\"button\" class=\"detail\" class=\"btn btn-sm\" style=\"font-family: 'Athiti', sans-serif; font-weight:700px;\" >รายละเอียด </button>";

                                                        append = append + "  <div class=\"dropdown\" id=\"dropdown\">"
                                                        append = append + "    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"  ><i class=\"fa fa-cog\" aria-hidden=\"true\"></i><span class=\"caret\"></span></button>";
                                                        append = append + " <ul class=\"dropdown-menu\">";
                                                        append = append + "  <li><a class=\"detail\"><i class=\"fa fa-info\" aria-hidden=\"true\"></i> รายละเอียด</a></li>";
                                                        append = append + "  <li role=\"presentation\" class=\"divider\"></li>";
                                                        append = append + "  <li><a href=\"print.php\" target=\"_blank\"><i class=\"fa fa-print\" aria-hidden=\"true\"></i> พิมพ์</a></li>";
                                                        append = append + "  <li><a href=\"export1.php\" ><i class=\"fa fa-print\" aria-hidden=\"true\" ></i> ออกรายงาย</a></li>";

                                                        append = append + "  </ul>";
                                                        append = append + "  </div>";
                                                        append = append + "</td>";

                                                        append = append + "</tr>";
                                                    }

                                                    //                    alert(append);
                                                    //                    $("#tb").children().remove();
                                                    //                  $('#example-cus').DataTable.destroy();
                                                    $('#allpick').append(append);
                                                    $('#example_pick').DataTable({
                                                        "paging": false,
                                                        "searching": false,

                                                        // "ordering": false,
                                                        //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                                                        "info": false,
                                                        "bDestroy": true,

                                                    });
                                                    $('#example_pick').find('tbody').find('tr').each(function () {
                                                        var pickkey = $(this).find('.pickKey').text();
                                                        $(this).find('.detail').click(function () {
                                                            //                           alert(pickkey);
                                                            window.location = 'pick-detail.php?pk=' + pickkey;
                                                        });
                                                    });

                                                }
                                            });

                                        }
                                    });
                                </script>

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
                                            $('#example-cus').find('tbody').find('tr').each(function () {
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
                                        $('#detailX').click(function () {
                                            var delay = 500; //1 second

                                            setTimeout(function () {
                                                //your code to be executed after 1 second

                                                loadTable();
                                            }, delay);
                                        });
                                        function loadTable() {
                                            //            $('#example-cus').DataTable().clear();

                                            $.post('../../service/getNewOrderTable.php').done(function (data) {
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
                                                    $('#tb').append(append);
                                                    $('#example-cus').DataTable({
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


                            </div>
                            <!-- end checkAll -->
                            <div class="tab-pane fade" id="tab2default">
                                <input type="text" style="margin-top:20px; margin-bottom:20px;" id="search-inv"
                                       class="light-table-filter form-control" data-table="order-table"
                                       name="search" placeholder="Search..">

                                <table class="table table-striped table-bordered order-table" id="inv-tab2">
                                    <thead>
                                    <tr style="text-align:center;">
                                        <th id="name" style="text-align:center;"><label> เลขที่เอกสารอินว๊อยซ์</label>
                                        </th>
                                        <th style="text-align:center;"><label>วันที่ เอกสาร</label></th>
                                        <th style="text-align:center;"><label>เลขที่รายการสั่งสินค้า</label></th>
                                        <th style="text-align:center; width:170px;"><label>ชื่อที่อยู่ผู้ส่ง</label>
                                        </th>
                                        <th style="text-align:center;"><label>ชื่อที่อยู่ผู้รับ</label></th>
                                        <th style="text-align:center;"><label>จำนวนสินค้า</label></th>
                                        <th style="text-align:center;"><label></label></th>

                                    </tr>
                                    </thead>
                                    <tbody id="tbInv">
                                    <!--                                    <tr>-->
                                    <!--                                        <td style="text-align:center;">INV0520590001</td>-->
                                    <!--                                        <td style="text-align:center;">29/06/59</td>-->
                                    <!--                                        <td style="text-align:center;">OUT290959002</td>-->
                                    <!--                                        <td>วรรณลบ 29/4 หนองจอก หนองจอก กรุงเทพ 10530</td>-->
                                    <!--                                        <td> strphen look 29/4 หญ้าแฝก เชียงใหม่ 10299</td>-->
                                    <!--                                        <td>4</td>-->
                                    <!--                                        <td></td>-->
                                    <!--                                        <td>พิมพ์</td>-->
                                    <!---->
                                    <!--                                    </tr>-->

                                    </tbody>
                                </table>


                            </div>   <!-- tab 2-->
                        </div>   <!-- tab content-->

                    </div>   <!-- pennel body -->

                </div>   <!-- pennel defaluft-->
            </div>   <!-- grid  12 -->
        </div>    <!-- row  -->
    </div>   <!-- contrainer -->

</section>

<script>
    $(document).ready(function () {
            loadTableInv();
            function loadTableInv() {
                $.post('../../service/getTableInv.php').done(function (data) {
                    var jsonData = JSON.parse(data);
//                    alert(JSON.stringify(jsonData));
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";

                    for (i = 0; i < resL; i++) {
                        var INV_DOCCODE = res[i]["INV_DOCCODE"];
                        var INV_DOCDATE = res[i]["INV_DOCDATE"];
                        var SO_DOCCODE = res[i]["SO_DOCCODE"];
                        var str = INV_DOCDATE['date'];
                        var subMFD = str.substr(0, 10);
                        var fDate = subMFD.split("-");
                        var reStr = fDate[2] + '/' + fDate[1] + '/' + fDate[0];


                        var CUST_COMPUTE_NAME = res[i]["CUST_COMPUTE_NAME"];
                        var CUST_SHOPNAME = res[i]["CUST_SHOPNAME"];
                        var CUST_TYPE_CODE = res[i]["CUST_TYPE_CODE"];

                        var option2 = '';
                        if (CUST_TYPE_CODE == 1) {
                            option2 = CUST_SHOPNAME;
                            var address2 = '';
          address2 = address2 + option2 + '<br>';
                            if (res[i]["CUST_ADDRESS2"] != '') {
                                address2 = address2 + 'ที่่อยู่  ' + res[i]["CUST_ADDRESS2"] + '<br>';
                            }
                            if (res[i]["CUST_SUBDISTRICT2"] != '') {
                                address2 = address2 + 'ตำบล ' + res[i]["CUST_SUBDISTRICT2"] + '<br>';
                            }
                            if (res[i]["CUST_DISTRICT_DESC2"] != '') {
                                address2 = address2 + 'อำเภอ ' + res[i]["CUST_DISTRICT_DESC2"] + '<br>';
                            }
                            if (res[i]["CUST_PROVINCE_DESC2"] != '') {
                                address2 = address2 + 'จังหวัด ' + res[i]["CUST_PROVINCE_DESC2"] + '<br>';
                            }
                            if (res[i]["CUST_ZIPCODE2"] != '') {
                                address2 = address2 + 'รหัสไปรษณีย์  ' + res[i]["CUST_ZIPCODE2"] + '<br>';
                            }
                        } else {
                            option2 = CUST_COMPUTE_NAME;
                            var address2 = '';
          address2 = address2 + option2 + '<br>';
                            if (res[i]["CUST_ADDRESS"] != '') {
                                address2 = address2 + 'ที่่อยู่  ' + res[i]["CUST_ADDRESS"] + '<br>';
                            }
                            if (res[i]["CUST_SUBDISTRICT"] != '') {
                                address2 = address2 + 'ตำบล ' + res[i]["CUST_SUBDISTRICT"] + '<br>';
                            }
                            if (res[i]["CUST_DISTRICT_DESC"] != '') {
                                address2 = address2 + 'อำเภอ ' + res[i]["CUST_DISTRICT_DESC"] + '<br>';
                            }
                            if (res[i]["CUST_PROVINCE_DESC"] != '') {
                                address2 = address2 + 'จังหวัด ' + res[i]["CUST_PROVINCE_DESC"] + '<br>';
                            }
                            if (res[i]["CUST_ZIPCODE"] != '') {
                                address2 = address2 + 'รหัสไปรษณีย์  ' + res[i]["CUST_ZIPCODE"] + '<br>';
                            }
                        }

                        var RECV_NAME = res[i]["RECV_NAME"];
                        var RECV_LASTNAME = res[i]["RECV_LASTNAME"];
                        var RECV_SHOPNAME = res[i]["RECV_SHOPNAME"];
                        var RECVNAME = RECV_NAME + ' ' + RECV_LASTNAME;
                        var SUMITEM = res[i]["SUMITEM"];
//
                        var rexv = '';
                        if (RECVNAME == ' ' && RECV_SHOPNAME != '') {
                            rexv = RECV_SHOPNAME
                        } else if (RECVNAME != ' ' && RECV_SHOPNAME == '') {
                            rexv = RECVNAME
                        } else if (RECVNAME != ' ' && RECV_SHOPNAME != '') {
                            rexv = RECV_SHOPNAME + '(' + RECVNAME + ')';
                        }

                        var address = "";
                        if (rexv != '') {
                            address = address + rexv + '<br>';
                        }
                        if (res[i]["RECV_ADDRESS"] != '') {
                            address = address + 'ที่่อยู่  ' + res[i]["RECV_ADDRESS"]+ '<br>';
                        }
                        if (res[i]["RECV_SUBDISTRICT"] != '') {
                            address = address + ' ตำบล ' + res[i]["RECV_SUBDISTRICT"]+ '<br>';
                        }
                        if (res[i]["RECV_DISTRICT_DESC"] != '') {
                            address = address + ' อำเภอ ' + res[i]["RECV_DISTRICT_DESC"]+ '<br>';
                        }
                        if (res[i]["RECV_PROVINCE_DESC"] != '') {
                            address = address + ' จังหวัด ' + res[i]["RECV_PROVINCE_DESC"]+ '<br>';
                        }
                        if (res[i]["RECV_ZIPCODE"] != '') {
                            address = address + ' sรหัสไปรษณีย์  ' + res[i]["RECV_ZIPCODE"]+ '<br>';
                        }

                       //                alert(rexv);
//
                        var pick ='';
                        append = append + "<tr>";
                        append = append + "<td style=\"text-align:center;\"><a href=\"invoice-detail.php?inv="+ INV_DOCCODE +"&cid=\">" + INV_DOCCODE + "</td>";
                        append = append + "<td style=\"text-align:center;\">" + reStr + "</td>";
                        append = append + "<td style=\"text-align:center;\"><a href=\"saleorder-detail.php?so="+ SO_DOCCODE +"&p="+pick+"\">" + SO_DOCCODE + "</td>";
                        append = append + "<td>" + address2 + "</td>";
                        append = append + "<td>" + address + "</td>";
                        append = append + "<td>" + SUMITEM + "</td>";
                        append = append + "<td>พิมพ์</td>";

                        append = append + "</tr>";
                    }
                    $('#tbInv').append(append);
                    $('#inv-tab2').DataTable({
                        "paging": false,
                        "searching": false,

                        // "ordering": false,
                        //                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        "bDestroy": true,

                    });

//
                });
            }
        }
    );
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
<!-- tab script -->
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
<!-- end tab script -->

<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
