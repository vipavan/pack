<?php

include '../../session.php';
if (loginUserName == "") {
    echo '<script> window.location = "../../err_authen.php"; </script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>setting</title>
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

            .nav-tabs > li > a {
                color: #7f5373;
            }

            #detail {
                float: left !important;
                margin-left: 31%;
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
                                <li><a href="manage-product.php">จัดการสินค้า</a></li>
                                <li><a href="report.php">รายงาน</a></li>
                                <li class="current"><a href="setting.php">ตั้งค่าการใช้งาน</a></li>
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
</style>
<section id="content">
    <div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
    <div class="container">
        <dic class="row">
            <div class="grid_12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading" style="height:53px; background-color:#e1e1e1;">
                        <button type="button" onclick="window.location='settingedit.php?lg='+''+'&rn='+''" class="btn btn-sm"
                                data-toggle="modal" data-target="#myModal-add"
                                style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                            <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มผู้ใช้งาน
                        </button>
                        <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">กำหนดประเภทสินค้า</button>
                        <button type="button" onclick="window.location='setting-package.php'" class="btn btn-sm"
                                data-toggle="modal" data-target="#myModal"
                                style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                            จัดการแพ็คเกจ
                        </button>
                        <input type="text" class="light-table-filter form-control" data-table="order-table" id="search"
                               name="search" placeholder="Search..">
                    </div> -->
                    <div class="panel-heading">
                        <ul class="nav nav-tabs " id="myTab">
                            <li class="active"><a href="#tab1default" data-toggle="tab">จัดการข้อมูลผู้ใช้งาน</a></li>
                            <li><a href="#tab2default" data-toggle="tab">จัดการข้อมูลแพ็คเกจ</a></li>
                            <li><a href="#tab3default" data-toggle="tab">จัดการคลังสินค้า</a></li>
                            <li><a href="#tab4default" data-toggle="tab">จัดการหมวดหมู่สินค้า</a></li>
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
                                <button type="button" onclick="window.location='settingedit.php?lg='+''+'&rn='+''"
                                        class="btn btn-sm"
                                        data-toggle="modal" data-target="#myModal-add"
                                        style="margin-bottom:10px;  float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> เพิ่มผู้ใช้งาน
                                </button>
                                <input type="text" class="light-table-filter form-control" data-table="order-table"
                                       id="search"
                                       name="search" placeholder="Search..">
                                <table class="table table-bordered order-table" id="example">
                                    <thead>
                                    <tr>
                                        <th id="name"><label> ชื่อผู้ใช้</label></th>
                                        <th><label>ชื่อร้านค้า</label></th>
                                        <th><label>ชื่อ-นามสกุล</label></th>
                                        <th><label>สิทธิการใช้งาน</label></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tb">
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tab2default">
                                <button type="button" class="btn btn-sm"
                                        onclick="window.location='setting-packageedit.php'"
                                        style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มแพ็คเกจ
                                </button>
                                <table class="table table-bordered order-table" id="example-package">
                                    <input type="text" class="light-table-filter form-control" data-table="order-table"
                                           id="search"
                                           name="search" placeholder="Search..">
                                    <thead>
                                    <tr>
                                        <th id="name"><label> ชื่อแพ็คเกจ</label></th>
                                        <th><label>ประเภทการวางสินค้า</label></th>
                                        <th><label>รายละเอียด</label></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><label>smart</label></th>
                                        <td><label>ชั้นวาง</label></td>
                                        <td><label></label></td>
                                        <td align="center">
                                            <div class="dropdown" id="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button"
                                                        data-toggle="dropdown"><i class="fa fa-cog"
                                                                                  aria-hidden="true"></i>
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="setting-packageedit.php">แก้ไข</a></li>
                                                    <li><a href="#">ยกเลิกรายการ</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>silver</label></th>
                                        <td><label>พาเลท</label></td>
                                        <th><label></label></th>
                                        <td>
                                            <div class="dropdown" id="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button"
                                                        data-toggle="dropdown"><i class="fa fa-cog"
                                                                                  aria-hidden="true"></i>
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="setting-packageedit.php">แก้ไข</a></li>
                                                    <!-- <li></li> -->
                                                    <li><a href="#">ยกเลิกรายการ</a></li>
                                                    <!-- <li class="divider"></li>
                                                    <li><a href="#">About Us</a></li> -->
                                                </ul>
                                            </div>
                                        </td>
                                        <!-- <td><a href="#" style="color:#7f5373;"> <i class="fa fa-toggle-on" aria-hidden="true"></i> ใช้งาน</a></td> -->
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tab3default">
                                <button type="button" class="btn btn-sm" id="newWH"
                                        style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มคลังสินค้า
                                </button>
                                <button type="button" class="btn btn-sm" id="newLocation"
                                        style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มโลเคชั่น
                                </button>

                                <input type="text" class="light-table-filter form-control" data-table="order-table"
                                       id="search"
                                       name="search" placeholder="Search..">
                                <table class="table table-bordered order-table" id="example-location">
                                    <thead>
                                    <tr>
                                        <th id="name"><label> คลังสินค้า</label></th>
                                        <th><label> โลเคชั่น</label></th>
                                        <!-- <th><label></label></th> -->
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tb_wh">

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tab4default">

                                <button type="button" class="btn btn-sm" id="newCategories"
                                        style="margin-bottom:10px; margin-left:10px; float:left; font-family: 'Athiti', sans-serif; font-weight:700px;">
                                    <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มหมวดหมู่สินค้า
                                </button>
                                <input type="text" class="light-table-filter form-control" data-table="order-table"
                                       id="search"
                                       name="search" placeholder="Search..">
                                <table class="table table-bordered order-table" id="example-category">
                                    <thead>
                                    <tr>
                                        <th id="name"><label> หมวดหมู่สินค้า</label></th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tb_gt">

                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>$('#myTab a').click(function (e) {
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
        loadTable1();
        loadTable3();
        loadTable4();
        function loadTable1() {
            $.post("../../service/gatAllUser.php").done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    for (i = 0; i < resL; i++) {
                        var RUNNO = res[i]["RUNNO"];
                        var LOGIN_USERNAME = res[i]["LOGIN_USERNAME"];
                        var FULLNAME = res[i]["FULLNAME"];
                        var USER_TYPE_CODE = res[i]["USER_TYPE_CODE"];
                        var CID = res[i]["CID"];
                        var USER_STATUS = res[i]["USER_STATUS"];
                        var CUST_SHOPNAME = res[i]["CUST_SHOPNAME"];
                        if (USER_TYPE_CODE == 11) {
                            var pri = 'ADMIN';
                            CUST_SHOPNAME = '';
                            CID = 'ADMIN';
                        } else {
                            var pri = 'USER';
                        }
                        if (USER_STATUS == 0) {
                            append = append + "<tr bgcolor=\"#f1f1f1\" style=\"color:#E84A2D;\">";
                            append = append + "<td>" + LOGIN_USERNAME + "</td>";
                            append = append + "<td>" + CUST_SHOPNAME + "</td>";
                            append = append + "<td>" + FULLNAME + "</td>";
                            append = append + "<td>" + pri + "</td>";

                            append = append + "<td align=\"center\">";
                            append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                            append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                            append = append + "<ul class=\"dropdown-menu\">";


                            append = append + "<li><a href=\"./active-user.php?lg=" + LOGIN_USERNAME + "&rn=" + RUNNO + "\" >นำกลับมาใช้</a></li>";

                            append = append + "</ul>";
                            append = append + "</div>";
                            append = append + "</td>";
                            append = append + "</tr>";
                        } else {
                            append = append + "<tr>";
                            append = append + "<td>" + LOGIN_USERNAME + "</td>";
                            append = append + "<td>" + CUST_SHOPNAME + "</td>";
                            append = append + "<td>" + FULLNAME + "</td>";
                            append = append + "<td>" + pri + "</td>";

                            append = append + "<td >";
                            append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                            append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                            append = append + "<ul class=\"dropdown-menu\">";
                            append = append + "<li><a href=\"./settingedit.php?lg=" + LOGIN_USERNAME + "&rn=" + pri + "\">แก้ไข</a></li>";


                            append = append + "<li><a href=\"./deactive-user.php?lg=" + LOGIN_USERNAME + "&rn=" + RUNNO + "\" >ยกเลิกรายการ</a></li>";
                            append = append + "<li class=\"divider\"></li>";

                            append = append + "<li><a href=\"./updateLoginUser.php?lg=" + LOGIN_USERNAME + "&rn=" + pri + "\">แก้ไขรหัสผ่าน</a></li>";

                            append = append + "</ul>";
                            append = append + "</div>";
                            append = append + "</td>";
                            append = append + "</tr>";
                        }
                    }
                    $('#tb').append(append);
                    $('#example').DataTable({
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
        $('#example-package').DataTable({
            "paging": false,
            "searching": false,
            "info": false,

        });

        function loadTable3() {
            $.post("../../service/getAllWHLO.php").done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    for (i = 0; i < resL; i++) {
                        var WH_ID = res[i]["WH_ID"];
                        var WH_NAME = res[i]["WH_NAME"];
                        var LOCATION_ID = res[i]["LOCATION_ID"];
                        var LOCATION_DESC = res[i]["LOCATION_DESC"];
                        if(LOCATION_ID == null){
                            LOCATION_DESC = "-"
                        }

                        append = append + "<tr>";
                        append = append + "<td>" + WH_NAME + "</td>";
                        append = append + "<td>" + LOCATION_DESC + "</td>";

                        append = append + "<td align=\"center\">";
                        append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                        append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                        append = append + "<ul class=\"dropdown-menu\">";
                        if(LOCATION_ID == null) {
                            append = append + "<li><a href=\"./location.php?wh="+ WH_ID +"&lo=\">เพิ่มโลเคชั่น</a></li>";
                        }else{
                            append = append + "<li><a href=\"./location.php?wh=" + WH_ID + "&lo=" + LOCATION_ID +"&lod=" + LOCATION_DESC + "\">แก้ไขโลเคชั่น</a></li>";
                        }
                        append = append + "<li role=\"presentation\" class=\"divider\"></li>";
                        append = append + "<li><a href=\"./warehouse.php?wh="+ WH_ID +"\">แก้ไขคลังสินค้า</a></li>";
                        append = append + "</ul>";
                        append = append + "</div>";
                        append = append + "</td>";
                        append = append + "</tr>";

                    }
                    $('#tb_wh').append(append);
                    $('#example-location').DataTable({
                        "paging": false,
                        "searching": false,
                        // "ordering": false,
//                         "order": [[ 2, "asc"],[ 0, "asc" ]],
                        "info": false,
                        responsive: true,
                    });
//
                }
            });

        }

        function loadTable4() {
            $.post("../../service/getAllGoodsType.php").done(function (data) {
                var jsonData = JSON.parse(data);
//                alert(JSON.stringify(jsonData));
                var status = jsonData["status"];
                if (status == 1) {
                    var res = jsonData["result"];
                    var resL = res.length;
                    var i;
                    var append = "";
                    for (i = 0; i < resL; i++) {
                        var GOODS_TYPE_ID = res[i]["GOODS_TYPE_ID"];
                        var GOODS_TYPE_DESC = res[i]["GOODS_TYPE_DESC"];


                        append = append + "<tr>";
                        append = append + "<td>" + GOODS_TYPE_DESC + "</td>";

                        append = append + "<td align=\"center\">";
                        append = append + "<div class=\"dropdown\" id=\"dropdown\">";
                        append = append + "<button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i> <span class=\"caret\"></span></button>";
                        append = append + "<ul class=\"dropdown-menu\">";
                        append = append + "<li><a href=\"category.php?gtId="+ GOODS_TYPE_ID+"&gtName=" + GOODS_TYPE_DESC +"\">แก้ไข</a></li>";
                        append = append + "</ul>";
                        append = append + "</div>";
                        append = append + "</td>";
                        append = append + "</tr>";

                    }
                    $('#tb_gt').append(append);
                    $('#example-category').DataTable({
                        "paging": false,
                        "searching": false,
                        "info": false,

                    });
////
                }
            });

        }





    });


</script>
<script>
    $(document).ready(function () {
        $('#newWH').click(function () {
            window.location = "./warehouse.php?wh=";
        });
        $('#newLocation').click(function () {
            window.location = "./location.php?wh=&lo=";
        });
        $('#newCategories').click(function () {
            window.location = "./category.php?gtId=&gtName=";
        });

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
